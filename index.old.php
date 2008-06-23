<?
	if (empty($_GET['page']))	
		header ('Location: ?page=sites');
	else
		$page = $_GET['page'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Greg Seth Creations</title>
<link rel="stylesheet" href="default.css" />
<script type="text/javascript" src="global.js"></script>
<script type="text/javascript" src="data/<? echo $page; ?>.js"></script>
</head>

<body onload="init()">
<div id="header">
	<p><span>Greg-Seth</span> Creations</p>
	<img id="bglogo" src="img/logo2x.png" alt="Greg Seth Creations" />
</div>
<div id="page">
	<div id="gallery">
		<ul id="list">
			<li>&nbsp;</li>
		</ul>
		<p id="list-nav"><a href="javascript:goPrevious()" title="&lt;&lt;&lt; Précédent" id="prev"><img src="img/blank.png" alt=""/>&nbsp;</a>&nbsp;<a href="javascript:goNext()" title="Suivant &gt;&gt;&gt;"id="next"><img src="img/blank.png" alt=""/>&nbsp;</a></p>
	</div>
</div>
<div id="description">
	<ul id="tabs">
		<li><a href="?page=widgets" class="tab <? if ($page=='widgets') echo 'selected'; ?>">Widgets</a></li>
		<li><a href="?page=graphisme" class="tab <? if ($page=='graphics') echo 'selected'; ?>">Graphisme</a></li>
		<li><a href="?page=themes" class="tab <? if ($page=='themes') echo 'selected'; ?>">Thèmes</a></li>
		<li><a href="?page=sites" class="tab <? if ($page=='sites') echo 'selected'; ?>">Sites Web</a></li>
	</ul>
	<div id="text">
		<?
		switch ($page) {
			case 'widgets':
				function getWidget($id, $netvibesOnly=false) {
					?>
		<ul class="installfor">
			<li>
				<a href="http://eco.netvibes.com/subscribe/<? echo $id; ?>" title="Get widget for Netvibes"><img src="img/netvibes.png" alt="Netvibes"> Netvibes</a></li>
				<? if (!$netvibesOnly): ?>
			<li><a href="http://eco.netvibes.com/subscribe/<? echo $id; ?>?platform=igoogle" title="Get widget for iGoogle"><img src="img/igoogle.png" alt="iGoogle"> iGoogle</a></li>
			<li><a href="http://eco.netvibes.com/subscribe/<? echo $id; ?>?platform=dashboard" title="Get widget for Apple Dashboard"><img src="img/dashboard.png" alt="Apple Dashboard"> Apple Dashboard</a></li>
			<li><a href="http://eco.netvibes.com/subscribe/<? echo $id; ?>?platform=opera" title="Get widget for Opera"><img src="img/opera.png" alt="Opera"> Opera</a></li>
				<? endif; ?>
		</ul>
					<?
				}
		?>	
		<h1><a name="dewvibes">DewVibes</a></h1>
		<? getWidget(200881); ?>
		<p>Lecteur de musique mp3 et de playlists m3u qui utilise <a href="http://www.alsacreations.fr/mp3-dewplayer.html">Dewplayer</a> multi. Très simple d'utilisation : il suffit de donner l'adresse d'un liste de lecture au format m3u, de cocher les options souhaitées et d'écouter la musique...</p>
		
		<h1><a name="oil">Cours du pétrole</a></h1>
		<? getWidget(200798); ?>
		<p>Widget affichant uen temps réel le cours du baril de pétrole (New York). Il est aussi possible d'afficher le graphique de l'évolution au cours de la journée. Les donnée proviennent du site <a href="http://www.boursorama.com">boursorama</a>.</p>
		
		<h1><a name="rtl2">RTL2</a></h1>
		<? getWidget(200797); ?>
		<p>Widget affichant en temps réel le titre, l'artiste, le nom et la pochette de l'album de la musique diffusée sur RTL2.</p>

		<h1><a name="torrents">Torrent search</a></h1>
		<? getWidget(200796); ?>
		<p>Widget permettant d'utiliser le meta moteur de recherche Torrents.to</p>
		
		<h1><a name="mp3tunes">Locker MP3 Tunes</a></h1>
		<? getWidget(200799, true); ?>
		<p>Module permettant d'utiliser votre locker mp3tunes dans Netvibes.</p>
		
		
		<?
				break;	
			case 'themes':
		?>
		<h1><a name="ogame">OGame</a></h1>
		<ul>
			<li><span class="label">Pour appliquer le thème utiliser l'adresse <a href="http://11010101110.free.fr/OGame/revolution/">http://11010101110.free.fr/OGame/revolution/</a></li>
		</ul>
		<p>Thème pour le jeu massivement multijoueur <a href="http://www.ogame.fr">OGame</a>, basé sur le wallpaper <a href="http://www.webdiod.com/">Endless</a>.</p>
		<h1><a name="coc">[Cup] of coffee</a></h1>
		<p>Thème <a href="http://www.dotclear.net">DotClear</a> créé pour <a href="http://gregseth.free.fr/blog">mon blog</a>.</p>
		<h1><a name="kfet">DotClear #2</a></h1>
		<p>Thème pour <a href="http://www.dotclear.net">DotClear</a>. Vous pouvez-voir un exemple de ce thème sur <a href="http://www.esigetel.free.fr/projet">le blog</a> crée pour à l'occasion de mon projet de troisième année d'école d'ingé.<br />&Eacute;crivez-moi pour l'utiliser sur votre blog.</p>
		<?
				break;
			case 'graphisme':
		?>
		<h1><a name="ismans">International ISMANS ldt.</a></h1>
		<ul>
			<li><span class="label">Logiciels :</span> Adobe Illustrator CS2</li>
			<li><span class="label">Taille réelle :</span>  <a href="img/graphisme/ismans_712x356.png">PNG, 712x356, 50 Ko</a></li>
		</ul>
		<p>Logo réalisé dans le cadre d'un projet pour mon master en management.</p>
		<h1><a name="trinome">Trinôme</a></h1>
		<ul>
			<li><span class="label">Logiciels :</span> Adobe Photoshop CS2</li>
			<li><span class="label">Taille réelle :</span> <a href="img/graphisme/trinome_1600x1200.jpg">JPEG, 1600x1200, 306 Ko</a></li>
			<li><span class="label">Photo originale :</span> <a href="img/graphisme/trinome_original.jpg">JPEG, 1600x1200, 273 Ko</a></li>
		</ul>
		<p>Photo retouchée de mes deux binômes de projet (Gidoo et Vins) à l'<acronym title="&Eacute;cole Supérieure d'Ingénieurs en Informatique et Génie de Télécommunications">ESIGETEL</acronym> et moi même (au centre).</p>
		<h1><a name="tse">Logo TSE</a></h1>
		<ul>
			<li><span class="label">Logiciels :</span>Adobe Illustrator CS2, Adobe Photoshop CS2</li>
			<li><span class="label">Taille réelle :</span> <a href="img/graphisme/tse_1280x800.jpg">JPEG, 1280x800, 307 Ko</a></li>
		</ul>
		<p>Logo réalisé pour le plaisir, sur le thème de ma voie d'approfondissement à l'ESIGETEL : <acronym title="Technologie des Systèmes Embarqués">TSE</acronym>.</p>
		<h1><a name="geoloc">Design Geoloc Systems</a></h1>
		<ul>
			<li><span class="label">Logiciels :</span>Adobe Photoshop CS2, Macromedia Dreamweaver 8</li>
			<li><span class="label">Taille réelle :</span> <a href="img/graphisme/geoloc_big1.jpg">JPEG, 567x336 95 Ko</a> et <a href="img/graphisme/geoloc_big2.jpg">JPEG, 567x336, 67 Ko</a></li>
		</ul>
		<p>Propositions de design de la partie client du site internet de <a href="http://www.geoloc-systems.com">Geoloc Systems</a>, où j'ai réalisé mon stage de deuxième année pour l'ESIGETEL.</p>
		<h1><a name="abalone">Abalone</a></h1>
		<ul>
			<li><span class="label">Logiciels :</span>Bryce 4, Adobe Photoshop 7</li>
			<li><span class="label">Taille réelle :</span> <a href="img/graphisme/abalone_1024x768.jpg">JPEG, 1024x768, 45 Ko</a></li>
		</ul>
		<p>Fond d'écran sur le thème du jeu <a href="http://fr.abalonegames.com">abalone</a> réalisé principalement dans le logiciel de paysages 3D Bryce 4. En soumettant cette image lors d'un concours sur le site officiel, j'ai gagné un boîte de jeu ! :D</p>
		<h1><a name="ring">One ring to rule them all</a></h1>
		<ul>
			<li><span class="label">Logiciels :</span>Bryce 4, Adobe Photoshop 7</li>
			<li><span class="label">Taille réelle :</span> <a href="img/graphisme/ring_1600x1200.jpg">JPEG, 1600x1200, 65 Ko</a></li>
		</ul>
		<p>Fond d'écran sur le thème su Seigneur des anneaux. &Eacute;galament réalisé avec Bryce 4.</p>
		<?
				break;
			case 'sites':
		?>
		<h1><a name="encadrement">C. Keller</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <a href="http://encadrement.free.fr">http://encadrement.free.fr</a></li>
			<li><span class="label">Date de création :</span> 2000</li>
			<li><span class="label">Version : </span>2.0</li>
		</ul>
		<p>Galerie d'œuvres d'art réalisées par Catherine Keller, ma mère. Si vous aimez son travail, n'hésitez pas à la contacter : <a href="mailto:cath.keller@gmail.com">cath.keller@gmail.com</a>.</p>
		<h1><a name="gs">Greg-Seth</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <a href="http://encadrement.free.fr">http://greg.seth.free.fr</a></li>
			<li><span class="label">Date de création :</span> 1999</li>
			<li><span class="label">Version : </span>2.5</li>
		</ul>
		<p>Mon site perso, le premier. Actuellement vous y trouverez quelques photos de ma visite en spéléo des <a href="http://www.grotte-aguzou.com/">grottes de l'Aguzou</a> et de mon voyage en Islande, un bref tuto de HTML, des paroles de chansons, quelques liens marrants et un forum un peu désert...</p>
		<h1><a name="chemicals">Chemicals</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <a href="http://chemicals.free.fr">http://chemicals.free.fr</a></li>
			<li><span class="label">Date de création :</span> 2003</li>
			<li><span class="label">Version : </span>1.0</li>
		</ul>
		<p>Un résumé d'une partie de mes cours de chimie de prépa à propos de chimie organique. Le site propose également une classification périodique interactive des éléments.<br />Un peu de chimie n'a jamais fait de mal a personne ;).</p>
		<h1><a name="donoterase">DoNotErase</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <a href="http://not.any.number.free.fr">http://not.any.number.free.fr</a></li>
			<li><span class="label">Date de création :</span> 2004</li>
			<li><span class="label">Version : </span>1.5</li>
		</ul>
		<p>Projet de site en cours sur la programmation et les normes du web.</p>
		<h1><a name="fractales">Les fractales</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <a href="http://lesfractales.tpe.free.fr">http://lesfractales.tpe.free.fr</a></li>
			<li><span class="label">Date de création :</span> 2002</li>
			<li><span class="label">Version : </span>1.0</li>
		</ul>
		<p>Le site que j'ai fait quand j'étais en terminale pour mon <acronym title="Travaux Personnels Encadrés">TPE</acronym> sur les <a href="http://fr.wikipedia.org/wiki/Fractale">fractales</a> - sujet qui m'a toujours passionné.</p>
		<h1><a name="hmdb">The Home Movie Database</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <strong>privée</strong></li>
			<li><span class="label">Date de création :</span> 2006</li>
			<li><span class="label">Version : </span>1.6</li>
		</ul>
		<p>Ce site me permet de gérer la liste des films VHS / DVD / DivX dont je dispose. Il n'est pas acessible au grand public faute de système d'authentificaion (et je n'ai ni le temps, ni l'envie d'en faire un). Ce que je peux dire c'est qu'il est bourré d'<a href="http://fr.wikipedia.org/wiki/Asynchronous_JavaScript_And_XML"><acronym title="Asynchronous JavaScript And XML">Ajax</acronym></a> et que des liens directs sont créés avec <a href="http://www.allocine.com">Allociné</a> et <a href="htp://www.imdb.com">IMDb</a>.<br />Pour les plus curieux, un petite <a href="img/sites/hmdb_big.jpg">capture d'écran</a>.</p>
		<h1><a name="winmine">Winmine</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <a href="http://winmine.free.fr">http://winmine.free.fr</a></li>
			<li><span class="label">Date de création :</span> 2003</li>
			<li><span class="label">Version : </span>1.0</li>
		</ul>
		<p>Un jour que j'avais du temps à perdre j'ai fait ce site consacré au démineur. Techniques et astuces de jeu sont au rendez-vous.</p>
		<h1><a name="prepa">Prépa Monod</a></h1>
		<ul>
			<li><span class="label">Adresse :</span> <a href="http://prepa.monod.free.fr">http://prepa.monod.free.fr</a></li>
			<li><span class="label">Date de création :</span> 2003</li>
			<li><span class="label">Version : </span>1.0</li>
		</ul>
		<p>Un projet qu'on a monté avec des amis de prépa sur notre lycée... un peu avorté.<br />Je le conserve pour <a href="http://prepa.monod.free.fr/?page=photos&amp;photo=classe">les photos</a> prises pendant l'année et principalement au parc floral de Vincennes pendant le concours des <a href="http://fr.wikipedia.org/wiki/Groupe_des_%C3%A9coles_des_mines#Recrutement">petites mines</a> en 2003.</p>
		<?
				break;
		}
		?>
	</div>
	<p id="footer">
		Le contenu de <span xmlns:dc="http://purl.org/dc/elements/1.1/">ce site</span> est sous license <a href="http://www.creativecommons.org">CreativeCommons</a> <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.0/fr/"><!--<img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc-nd/2.0/fr/80x15.png" />-->BY-NC-ND</a>.<br />Pour toute info, contactez-moi : <a href="mailto:greg.seth@gmail.com">greg.seth@gmail.com</a>
	</p>
</div>
</body>
</html>
