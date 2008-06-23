<?
	require_once('../l10n/l10n.lib.php');
	$page = (empty($_GET['page'])) ? 1 : $_GET['page'];
	
	require_once('MySqlConnect_v2.class.php');
	require_once('mysql.inc.php');
	$sql = new MySqlConnect($MYSQL_SERVER, $MYSQL_USER, $MYSQL_PASSWD, $MYSQL_DB);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Greg Seth Creations</title>
<link rel="stylesheet" href="default.css" />
<script type="text/javascript" src="global.js"></script>
</head>

<body>

<? function getWidget($id, $netvibesOnly=false) { ?>
	<ul class="installfor">
		<li><a href="http://eco.netvibes.com/subscribe/<?=$id?>" title="<?=l10n('Widget pour')?> Netvibes"><img src="img/netvibes.png" alt="Netvibes"> Netvibes</a></li>
			<? if (!$netvibesOnly): ?>
		<li><a href="http://eco.netvibes.com/subscribe/<?=$id?>?platform=igoogle" title="<?=l10n('Widget pour')?> iGoogle"><img src="img/igoogle.png" alt="iGoogle"> iGoogle</a></li>
		<li><a href="http://eco.netvibes.com/subscribe/<?=$id?>?platform=dashboard" title="<?=l10n('Widget pour')?> Apple Dashboard"><img src="img/dashboard.png" alt="Apple Dashboard"> Apple Dashboard</a></li>
		<li><a href="http://eco.netvibes.com/subscribe/<?=$id?>?platform=opera" title="<?=l10n('Widget pour')?> Opera"><img src="img/opera.png" alt="Opera"> Opera</a></li>
			<? endif; ?>
	</ul>
<? } ?>

<?
function getLink ($uri) {
	return empty($uri)
		? '<strong>'.l10n('privée').'</strong>'
		: '<a href="'.$uri.'">'.$uri.'</a>';
}

/*
$queryItemsPics = "SELECT *
	FROM gsc_text AS t, gsc_items AS i
	WHERE t.locale = '$lang'
		AND i.category_id = $page
		AND i.id = t.item_id
	GROUP BY i.id
	ORDER BY i.order";
*/

$queryItems = "SELECT i.id, i.year, i.version, t.title, t.description, r.uri, r.type
	FROM gsc_text AS t, gsc_items AS i
		LEFT JOIN gsc_resources AS r
		ON i.id = r.item_id
	WHERE t.locale = '$locale'
		AND i.category_id = $page
		AND i.id = t.item_id
	GROUP BY i.id
	ORDER BY i.order";
	
//$queryItems = "SELECT * FROM gsc_global WHERE locale='$lang' AND category_id=$page";

$items = $sql->query($queryItems);
?>

<div id="header">
	<p><span>Greg-Seth</span> Creations</p>
	<img id="bglogo" src="img/logo2x.png" alt="Greg Seth Creations" />
	<div id="langswitcher"><a href="?page=<?=$page?>&l=<?=($_SESSION['l']=='fr_FR') ? 'en_US' : 'fr_FR'?>" title="<?=l10n('View this page in english')?>"><img src="img/<?=($_SESSION['l']=='fr_FR') ? 'en_EN' : 'fr_FR'?>.png" alt="flag" /></a></div>
</div><!--#header-->
<div id="page">
	<div id="gallery">
		<ul id="list">
			<? foreach ($items as $item): ?>
			<? $dispStyle = ($i>1) ? 'hidden' : 'visible'; ?>
				
				<li class="<?=$dispStyle?>"><a href="#item<?=$item['id']?>" onclick="expand(<?=$item['id']?>, null, true)";><img src="img/list/<?=$item['id']?>.jpg" alt="<?=$item['title']?>" /></a></li>
			
			<? $i++; ?>
			<? endforeach; ?>
			
		</ul>
		<p id="list-nav"><a href="javascript:goPrevious()" title="&lt;&lt;&lt; <?=l10n('Précédent')?>" id="prev"><img src="img/blank.png" alt="&lt;&lt;&lt; <?=l10n('Précédent')?>" class="disabled"/>&nbsp;</a>&nbsp;<a href="javascript:goNext()" title="<?=l10n('Suivant')?> &gt;&gt;&gt;"id="next"><img src="img/blank.png" alt="<?=l10n('Suivant')?> &gt;&gt;&gt;"/>&nbsp;</a></p>
	</div><!--#gllery-->
</div><!--#page-->
<ul id="tabs">
	<? foreach ($sql->query("SELECT * FROM gsc_categories WHERE locale='$locale' ORDER BY id DESC") as $category): ?>
		<? $selection = ($page==$category['id']) ? 'selected' : 'unselected'; ?>
		
		<li><a href="?page=<?=$category['id']?>" class="tab <?=$selection?>"><?=$category['name']?></a></li>
		
	<? endforeach; ?>
</ul>
<div id="description">
	<div id="wrapper">
	<div id="text">
		<? foreach ($items as $item): ?>
			<div id="itemlist">
				<h1><a name="item<?=$item['id']?>" class="anchor closed" onclick="expand(<?=$item['id']?>, this.parentNode.offsetTop)"><?=$item['title']?></a></h1>
				
				<? switch ($page):
					case 1: // sites ?>
					<ul>
						<li><span class="label"><?=l10n('Adresse :')?></span> <?=getLink($item['uri'])?></li>
						<li><span class="label"><?=l10n('Date de création :')?></span> <?=$item['year']?></li>
						<li><span class="label"><?=l10n('Version :')?></span> <?=$item['version']?></li>
					</ul>
				<? break; ?>
				<? case 2: // graphics ?>
					<?
					$softwareList = '';
					foreach ($sql->query("SELECT * FROM gsc_softs AS s, gsc_use_soft AS u WHERE u.soft_id=s.id AND u.item_id=".$item['id']) as $soft) {
							$softwareList .= ', '.$soft['editor'].' '.$soft['name'].' '.$soft['version'];
					}
					$softwareList = substr($softwareList, 2);
					?>
					<ul>
						<li><span class="label"><?=l10n('Date de création :')?></span> <?=$item['year']?></li>
						<li><span class="label"><?=l10n('Logiciels utilisés :')?></span> <?=$softwareList?></li>
					</ul>
				<? break; ?>
				<? case 3: // themes ?>
					<? /***** nothing to do *****/ ?>
				<? break; ?>
				<? case 4: // widgets ?>
					<? getWidget(substr($item['uri'], 1), substr($item['uri'], 0, 1)=='-'); ?>
				<? break; ?>
				<? endswitch; ?>
				
				<p><?=$item['description']?></p>
			</div>
			
			<div id="expand<?=$item['id']?>" class="expand">			
				<h1><?=$item['title']?></h1>
				<ul>
					<? foreach ($sql->query("SELECT * FROM gsc_resources WHERE type LIKE 'image%' AND item_id=".$item['id']) as $res): ?>
					<li><!--<span class="label"><?=l10n('Taille réelle :')?></span> --><a href="img/resource/<?=$res['uri']?>"><img src="img/resource/<?=$res['uri']?>" alt="<?=$item['title']?>" alt="<?=$item['title']?>" /></a></li>
					<? endforeach; ?>
				</ul>			
			</div>
		<? endforeach; ?>
	</div><!--#text-->
	</div><!--#wrapper-->
	<p id="footer">
		<?=l10n('Le contenu de <span xmlns:dc="http://purl.org/dc/elements/1.1/">ce site</span> est sous license <a href="http://www.creativecommons.org">CreativeCommons</a> <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.0/fr/">BY-NC-ND</a>.')?><br /><?=l10n('Pour toute info, contactez-moi :')?> <a href="mailto:greg.seth@gmail.com">greg.seth@gmail.com</a>
	</p>
</div><!--#description-->
</body>


<!--begin: Google Analytics-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3754826-3");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!--end: Google Analytics-->
</html>
