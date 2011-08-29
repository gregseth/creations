<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Greg Seth Creations</title>

<link rel="stylesheet" href="default.css" />
<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />

<link rel="shortcut icon" href="img/favicon.png" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="fancybox/jquery.easing.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript" src="animations.js"></script>

</head>

<body>
<? $page = (empty($_GET['page'])) ? 'websites' : $_GET['page']; ?>
<div id="header">
	<p><span>Greg-Seth</span> Creations</p>
	<!--<div id="langswitcher"><a href="index.en.php?page=<?=$page?>" title="View this page in English"><img src="img/en_EN.png" alt="flag" /></a></div>-->
</div><!--#header-->

<div id="page">
	<img id="bglogo" src="img/logo2x.png" alt="Greg Seth Creations" />
	<div id="gallery">
		<ul id="list">
			<? if ($page == 'websites'): ?>						
				<li class="visible"><a href="#ckeller"><img src="img/list/ckeller.png" alt="C. Keller" /></a></li>
				<li class="visible"><a href="#gregseth"><img src="img/list/gregseth_v2.png" alt="Greg-Seth" /></a></li>
				<li class="visible"><a href="#chemicals"><img src="img/list/chemicals.png" alt="Chemicals" /></a></li>
				<li class="visible"><a href="#donoterase"><img src="img/list/donoterase.png" alt="DoNotErase" /></a></li>
				<li class="visible"><a href="#fractals"><img src="img/list/fractales.png" alt="Fractals" /></a></li>
				<li class="visible"><a href="#hmdb"><img src="img/list/hmdb.png" alt="The Home Movie Database" /></a></li>
				<li class="visible"><a href="#winmine"><img src="img/list/winmine.png" alt="Winmine" /></a></li>
				<li class="visible"><a href="#prepa"><img src="img/list/prepa.png" alt="Prepa Monod" /></a></li>
				
			<? elseif ($page == 'graphics'): ?>
				<li class="visible"><a href="#social_buttons"><img src="img/list/social.png" alt="Social buttons" /></a></li>
				<li class="visible"><a href="#icons"><img src="img/list/icons.png" alt="Icon set" /></a></li>
				<li class="visible"><a href="#anon"><img src="img/list/anon.png" alt="Anon." /></a></li>
				<li class="visible"><a href="#jason"><img src="img/list/jason.png" alt="Jason" /></a></li>
				<li class="visible"><a href="#ismans"><img src="img/list/ismans.png" alt="International ISMANS ltd." /></a></li>
				<li class="visible"><a href="#trinome"><img src="img/list/trinome.png" alt="Trinôme" /></a></li>
				<li class="visible"><a href="#tse"><img src="img/list/tse.png" alt="Logo TSE" /></a></li>
				<li class="visible"><a href="#abalone"><img src="img/list/abalone.png" alt="Abalone" /></a></li>
				<li class="visible"><a href="#ring"><img src="img/list/ring.png" alt="One ring to rule them all" /></a></li>
				
			<? elseif ($page == 'themes'): ?>
				<li class="visible"><a href="#unity"><img src="img/list/unity.png" alt="Unity — An ubuntu-like CSS theme" /></a></li>
				<li class="visible"><a href="#cup"><img src="img/list/cupofcoffee.png" alt="[Cup] of coffee" /></a></li>
				<li class="visible"><a href="#geoloc"><img src="img/list/geoloc.png" alt="Geoloc Systems" /></a></li>
				<li class="visible"><a href="#ogame"><img src="img/list/ogame.png" alt="OGame" /></a></li>
				<li class="visible"><a href="#dotclear" ><img src="img/list/kfet.png" alt="DotClear 2" /></a></li>

			<? elseif ($page == 'widgets'):  ?>
				<!--
				<li class="visible"><a href="#item21"><img src="img/list/21.jpg" alt="DewVibes" /></a></li>
				<li class="visible"><a href="#item20"><img src="img/list/20.jpg" alt="Light crude quote" /></a></li>
				<li class="visible"><a href="#item19"><img src="img/list/19.jpg" alt="RTL2" /></a></li>
				<li class="visible"><a href="#item18"><img src="img/list/18.jpg" alt="Torrent search" /></a></li>
				<li class="visible"><a href="#item17"><img src="img/list/17.jpg" alt="MP3 Tunes" /></a></li>
				-->
			<? endif; ?>

		</ul>
		<p id="list-nav"><a href="#" title="&lt;&lt; Previous" id="prev"><img src="img/blank.png" alt="&lt;&lt;&lt; Previous" class="disabled"/>&nbsp;</a>&nbsp;<a href="#" title="Next &gt;&gt;&gt;"id="next"><img src="img/blank.png" alt="Next &gt;&gt;"/>&nbsp;</a></p>

	</div><!--#gllery-->
	<ul id="tabs">
		<!--<li><a href="/widgets.htm" class="tab <?=$page=='widgets'?'selected':'unselected'?>">Widgets</a></li>-->
		<li><a href="/themes.htm" class="tab <?=$page=='themes'?'selected':'unselected'?>">Thèmes</a></li>
		<li><a href="/graphics.htm" class="tab <?=$page=='graphics'?'selected':'unselected'?>">Design</a></li>
		<li><a href="/websites.htm" class="tab <?=$page=='websites'?'selected':'unselected'?>">Sites</a></li>
	</ul>
</div><!--#page-->


<div id="description">

	<div id="wrapper">
		<div id="text">
		<? if ($page == 'websites'): ?>
			<div id="ckeller" class="desc">
				<h1><a name="ckeller" class="anchor closed">C. Keller</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://encadrement.free.fr">http://encadrement.free.fr</a></li>
					<li><span class="label">Année de création&nbsp;:</span> 2000</li>
					<li><span class="label">Version:</span> 2.0</li>
				</ul>
								
				<p>Galerie créée pour l'artiste Catherine Keller. Pour plus d'inforamtions ou toute question vous pouver la contacter par mail à&nbsp;: <a href="mailto:cath.keller@gmail.com">cath.keller@gmail.com</a>.</p>

			</div>
			
			<div id="ckeller_detail" class="expand">			
				<h1>C. Keller</h1>
				<ul>
					<li><a href="img/resource/encadrement.png" class="fancyMe"><img src="img/resource/encadrement.png" alt="C. Keller" /></a></li>
				</ul>			
			</div>
					
			<div id="gregseth" class="desc">
				<h1><a name="gregseth" class="anchor closed">Greg-Seth</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://greg.seth.free.fr">http://greg.seth.free.fr</a></li>
					<li><span class="label">Année de création&nbsp;:</span> 1999</li>
					<li><span class="label">Version:</span> 2.5</li>
				</ul>
								
				<p>Mon premier site perso. Actuelllement vous y trouverez une galerie de photos des <a href="http://www.grotte-aguzou.com/">grottes de l'Aguzou</a>, de mon voyage en Islande et quelques autres trucs...</p>
			</div>
			
			<div id="gregseth_detail" class="expand">			
				<h1>Greg-Seth</h1>
				<ul>
					<li><a href="img/resource/gregseth.png" class="fancyMe"><img src="img/resource/gregseth.png" alt="Greg-Seth" /></a></li>
				</ul>			
			</div>
					
			<div id="chemicals" class="desc">
				<h1><a name="chemicals" class="anchor closed">Chemicals</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://chemicals.free.fr">http://chemicals.free.fr</a></li>
					<li><span class="label">Année de création&nbsp;:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>Un résumé de mes cours de chimie de prépa, dont un classification périodique des éléments interactive.</p>
			</div>
			
			<div id="chemicals_detail" class="expand">			
				<h1>Chemicals</h1>
				<ul>
					<li><a href="img/resource/chemicals.png" class="fancyMe"><img src="img/resource/chemicals.png" alt="Chemicals" /></a></li>
				</ul>			
			</div>
			
			<div id="donoterase" class="desc">
				<h1><a name="donoterase" class="anchor closed">DoNotErase</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://not.any.number.free.fr">http://not.any.number.free.fr</a></li>
					<li><span class="label">Année de création&nbsp;:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>Projet inachevé (et assez daté) sur les bases de la création d'un site web. HTML, PHP et standards du web sont au rendez-vous.</p>
			</div>
			
			<div id="donoterase_detail" class="expand">			
				<h1>DoNotErase</h1>
				<ul>
					<li><a href="img/resource/notanynumber.png"><img src="img/resource/notanynumber.png" alt="DoNotErase" /></a></li>
				</ul>			
			</div>
					
			<div id="fractals" class="desc">
				<h1><a name="fractals" class="anchor closed" class="fancyMe">Fractals</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://lesfractales.tpe.free.fr">http://lesfractales.tpe.free.fr</a></li>
					<li><span class="label">Année de création&nbsp;:</span> 2006</li>
					<li><span class="label">Version:</span> 1.6</li>
				</ul>
								
				<p>Site sur les <a href="http://en.wikipedia.org/wiki/Fractal">fractales</a>, créé en complément de mon projet de TPE en terminale.</p>
			</div>
			
			<div id="fractals_detail" class="expand">			
				<h1>Fractals</h1>
				<ul>
					<li><a href="img/resource/lesfractalestpe.png" class="fancyMe"><img src="img/resource/lesfractalestpe.png" alt="Fractals" /></a></li>
				</ul>			
			</div>

			<div id="hmdb" class="desc">
				<h1><a name="hmdb" class="anchor closed">The Home Movie Database</a></h1>
				<ul>
					<li><span class="label">URL:</span> <strong>private</strong></li>
					<li><span class="label">Année de création&nbsp;:</span> 2002</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>Site de gestion de ma vidéothèque, fermé au public, une <a href="img/sites/hmdb_big.jpg">capture</a> d'écran est disponible.</p>
			</div>
			
			<div id="hmdb_detail" class="expand">			
				<h1>The Home Movie Database</h1>

				<ul>
					<li><a href="img/resource/hmdb.png" class="fancyMe"><img src="img/resource/hmdb.png" alt="HMDb" /></a></li>
				</ul>			
			</div>
					
			<div id="winmine" class="desc">
				<h1><a name="winmine" class="anchor closed">Winmine</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://winmine.free.fr">http://winmine.free.fr</a></li>
					<li><span class="label">Année de création&nbsp;:</span> 2004</li>
					<li><span class="label">Version:</span> 1.5</li>
				</ul>
								
				<p>Un jours que j'avais du temps devant moi j'ai monté ce petit site consacré au démineur. Au programme&nbsp;: astuces et techniques de jeu.</p>
			</div>

			
			<div id="winmine_detail" class="expand">			
				<h1>Winmine</h1>
				<ul>
					<li><a href="img/resource/winmine.png" class="fancyMe"><img src="img/resource/winmine.png" alt="Winmine" /></a></li>
				</ul>
							
			</div>
					
			<div id="prepa" class="desc">
				<h1><a name="prepa" class="anchor closed">Prepa Monod</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://prepa.monod.free.fr">http://prepa.monod.free.fr</a></li>
					<li><span class="label">Année de création&nbsp;:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
			
				<p>Site de la promo 2003 de la classe de PCSI du lycée Gustave Monod d'Enghien-les-Bains. <br />Je le garde principalement pour <a href="http://prepa.monod.free.fr/?page=photos&amp;photo=classe">les photos</a> prises pendant l'année et le concours des petites Mines au parc botanique de Vincennes.</p>
			</div>
			
			<div id="prepa_detail" class="expand">			
				<h1>Prepa Monod</h1>
				<ul>
					<li><a href="img/resource/prepamonod.png" class="fancyMe"><img src="img/resource/prepamonod.png" alt="Prepa Monod" /></a></li>
				</ul>			
			</div>
			
		<? elseif ($page == 'graphics'): ?>
			<div id="social_buttons" class="desc">
				<h1><a name="social_buttons" class="anchor closed">Boutons pour réseaux sociaux</a></h1>				
				<ul>
					<li><span class="label">Année de création&nbsp;:</span> 2011</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Adobe Photoshop CS5</li>

				</ul>
								
				<p>Boutons d'interface pour liens vers réseaux sociaux. Le fichier source PSD est <a href="img/resource/social-buttons_by_GregSeth.zip">disponible au téléchargement</a>.</p>
			</div>
			
			<div id="social_buttons_detail" class="expand">			
				<h1>Boutons pour réseaux sociaux</h1>
				<ul>
					<li><a href="img/resource/rss.png" class="fancyMe" rel="buttons"><img src="img/resource/rss.png" alt="RSS feed" /></a></li>
					<li><a href="img/resource/twitter.png" class="fancyMe" rel="buttons"><img src="img/resource/twitter.png" alt="Twitter" /></a></li>
					<li><a href="img/resource/facebook.png" class="fancyMe" rel="buttons"><img src="img/resource/facebook.png" alt="Facebook" /></a></li>
					<li><a href="img/resource/flickr.png" class="fancyMe" rel="buttons"><img src="img/resource/flickr.png" alt="Flickr" /></a></li>
					<li><a href="img/resource/deviantart.png" class="fancyMe" rel="buttons"><img src="img/resource/deviantart.png" alt="Deviant Art" /></a></li>
					
				</ul>			
			</div>

			<div id="icons" class="desc">
				<h1><a name="icons" class="anchor closed">TV series icon set</a></h1>				
				<ul>
					<li><span class="label">Année de création&nbsp;:</span> 2010</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Adobe Photoshop CS5</li>

				</ul>
								
				<p>Icônes manquantes pour le pack <a href="http://Crazyfool16.deviantart.com/art/Colorflow-Template-182503960">ColorFLow</a> by <a href="http://crazyfool16.deviantart.com/">crazyfool16</a>.<br />Une archive de toutes les icônes au format PNG est disponible au <a href="img/resource/10-TV-series-icons_by_GregSeth.zip">téléchargnment</a>.</p>
			</div>
			
			<div id="icons_detail" class="expand">			
				<h1>TV series icon set</h1>
				<ul>
					<li><a href="img/resource/Damages.png" class="fancyMe" rel="icons"><img src="img/resource/Damages.png" alt="Damages" /></a></li>
					<li><a href="img/resource/Hawaii-Five-O.png" class="fancyMe" rel="icons"><img src="img/resource/Hawaii-Five-O.png" alt="Hawaii Five O" /></a></li>
					<li><a href="img/resource/Nikita.png" class="fancyMe" rel="icons"><img src="img/resource/Nikita.png" alt="Nikita" /></a></li>
					<li><a href="img/resource/Lie-to-me.png" class="fancyMe" rel="icons"><img src="img/resource/Lie-to-me.png" alt="Lie to me" /></a></li>
					<li><a href="img/resource/NCIS.png" class="fancyMe" rel="icons"><img src="img/resource/NCIS.png" alt="NCIS" /></a></li>
					<li><a href="img/resource/The-Walking-Dead.png" class="fancyMe" rel="icons"><img src="img/resource/The-Walking-Dead.png" alt="The Walking Dead" /></a></li>
					<li><a href="img/resource/Mad-Men.png" class="fancyMe" rel="icons"><img src="img/resource/Mad-Men.png" alt="Mad Men" /></a></li>
					<li><a href="img/resource/Little-Britain.png" class="fancyMe" rel="icons"><img src="img/resource/Little-Britain.png" alt="Little Britain" /></a></li>
					<li><a href="img/resource/Hustle.png" class="fancyMe" rel="icons"><img src="img/resource/Hustle.png" alt="Hustle" /></a></li>
					<li><a href="img/resource/Twin-Peaks.png" class="fancyMe" rel="icons"><img src="img/resource/Twin-Peaks.png" alt="Twin Peaks" /></a></li>
				</ul>			
			</div>

			<div id="anon" class="desc">
				<h1><a name="anon" class="anchor closed">Anonymous</a></h1>				
				<ul>
					<li><span class="label">Année de création&nbsp;:</span> 2010</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Adobe Illustrator CS5, Adobe Photoshop CS5</li>

				</ul>
								
				<p>Never forgive, never forget.</p>
			</div>
			
			<div id="anon_detail" class="expand">			
				<h1>Anonymous</h1>
				<ul>
					<li><a href="img/resource/anon_2560x1440.jpg" class="fancyMe"><img src="img/resource/anon_2560x1440.jpg" alt="Jason wallpaper" /></a></li>
				</ul>			
			</div>
			
			<div id="jason" class="desc">
				<h1><a name="jason" class="anchor closed">Jason project</a></h1>				
				<ul>
					<li><span class="label">Année de création&nbsp;:</span> 2010</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Adobe Illustrator CS5, Adobe Photoshop CS5</li>

				</ul>
								
				<p>Jeu d'icônes et fond d'écran du projet Jason, réalisé pour le CEA.</p>
			</div>
			
			<div id="jason_detail" class="expand">			
				<h1>Jason project</h1>
				<ul>
					<li><img src="img/resource/sigvisu_icon.png" class="fancyMe" rel="jason" alt="SigVisu" /></li>
					<li><img src="img/resource/jade_icon.png" class="fancyMe" rel="jason" alt="Jade" /></li>
					<li><img src="img/resource/onyx_icon.png" class="fancyMe" rel="jason" alt="Onyx" /></li>
					<li><a href="img/resource/jason_wallpaper.jpg" class="fancyMe" rel="jason"><img src="img/resource/jason_wallpaper.jpg" alt="Jason wallpaper" /></a></li>
				</ul>			
			</div>
			
			<div id="ismans" class="desc">
				<h1><a name="ismans" class="anchor closed" onclick="expand(16, this.parentNode.offsetTop)">International ISMANS ltd.</a></h1>				
				<ul>
					<li><span class="label">Année de création&nbsp;:</span> 2007</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Adobe Illustrator CS2</li>

				</ul>
								
				<p>Logo créé dans le cadre d'un projet lors de mon Master en management.</p>
			</div>
			
			<div id="ismans_detail" class="expand">			
				<h1>International ISMANS ltd.</h1>
				<ul>
					<li><a href="img/resource/ismans_1600x628.png" class="fancyMe"><img src="img/resource/ismans_1600x628.png"  alt="International ISMANS ltd." /></a></li>
				</ul>			
			</div>

			<div id="trinome" class="desc">
				<h1><a name="trinome" class="anchor closed">Trinôme</a></h1>				
				<ul>
					<li><span class="label">Année de création&nbsp;:</span> 2006</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Adobe Photoshop CS2</li>

				</ul>
								
				<p>Photo retouchée de mes deux binômes et moi (Gidoo et Vins) à l'<acronym title="&Eacute;cole Supérieure d'Ingénieurs en Informatique et Génie de Télécommunications">ESIGETEL</acronym>.</p>
			</div>
			
			<div id="trinome_detail" class="expand">			
				<h1>Trinôme</h1>
				<ul>
					<li><a href="img/resource/trinome_1600x1200.jpg" class="fancyMe" rel="trinome"><img src="img/resource/trinome_1600x1200.jpg" alt="Trinôme" /></a></li>
					<li><a href="img/resource/trinome_original.jpg" class="fancyMe" rel="trinome"><img src="img/resource/trinome_original.jpg" alt="Trinôme" /></a></li>
				</ul>			
			</div>

			<div id="tse" class="desc">
				<h1><a name="tse" class="anchor closed">Logo TSE</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 2007</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Adobe Illustrator CS2, Adobe Photoshop CS2</li>
				</ul>
								
				<p>Logo créé pour ma voie d'approfondissement à l'ESIGETEL, Technologie des Systèmes Embarqués.</p>
			</div>
			
			<div id="tse_detail" class="expand">			
				<h1>Logo TSE</h1>
				<ul>
					<li><a href="img/resource/tse_1280x800.jpg" class="fancyMe"><img src="img/resource/tse_1280x800.jpg" alt="Logo TSE" /></a></li>
				</ul>			
			</div>
			
			<div id="abalone" class="desc">
				<h1><a name="abalone" class="anchor closed">Abalone</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 1998</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Corel Bryce 4, Adobe Photoshop 7</li>
				</ul>
								
				<p>Fond d'écran sur le thème du jeu <a href="http://fr.abalonegames.com">abalone</a>. Pour la petite histoire, j'ai gagné une boîte de jeu en le publiant sur le site officiel.</p>
			</div>
			
			<div id="abalone_detail" class="expand">			
				<h1>Abalone</h1>
				<ul>
					<li><a href="img/resource/abalone_1024x768.jpg" class="fancyMe"><img src="img/resource/abalone_1024x768.jpg" alt="Abalone" /></a></li>
				</ul>			
			</div>
			
			<div id="ring" class="desc">
				<h1><a name="ring" class="anchor closed">One ring to rule them all</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 1998</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Corel Bryce 4, Adobe Photoshop 7</li>
				</ul>
								
				<p>Fond d'écran sur le thème du Seigneur des anneaux.</p>
			</div>
			
			<div id="ring_detail" class="expand">			
				<h1>One ring to rule them all</h1>
				<ul>
					<li><a href="img/resource/ring_1600x1200.jpg" class="fancyMe"><img src="img/resource/ring_1600x1200.jpg" alt="One ring to rule them all" /></a></li>
				</ul>			
			</div>
			
		<? elseif ($page == 'themes'): ?>
			<div id="unity" class="desc">
				<h1><a name="unity" class="anchor closed">Unity</a></h1>

				<p>Éléments d'interface pour pages web en CSS3, inspirés des certains éléments d'Ubuntu</a>.</p>
			</div>
			
			<div id="unity_detail" class="expand">			
				<h1>Unity</h1>
				<ul>
					<li><a href="img/resource/unity.htm"><img src="img/resource/unity.jpg" alt="Unity" /></a></li>
				</ul>			
			</div>
			
			<div id="cup" class="desc">
				<h1><a name="cup" class="anchor closed">[Cup] of coffee</a></h1>

				<p>Thème pour <a href="http://www.dotclear.net">DotClear</a> créé pour mon ancien blog</a>.</p>
			</div>
			
			<div id="cup_detail" class="expand">			
				<h1>[Cup] of coffee</h1>
				<ul>
					<li><a href="img/resource/cupofcoffee.png"><img src="img/resource/cupofcoffee.png" alt="[Cup] of coffee" /></a></li>
				</ul>			
			</div>
			
			<div id="geoloc" class="desc">
				<h1><a name="geoloc" class="anchor closed">Geoloc Systems</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 2006</li>
					<li><span class="label">Logiciels utilisés&nbsp;:</span> Macromedia Dreamweaver 8, Adobe Photoshop CS2</li>
				</ul>
								
				<p>Proposition de maquette réalisée pendant mon stage de seconde année.</p>
			</div>
			
			<div id="geoloc_detail" class="expand">			
				<h1>Geoloc Systems</h1>
				<ul>
					<li><a href="img/resource/geoloc_v2.jpg"><img src="img/resource/geoloc_v2.jpg" alt="Geoloc Systems" /></a></li>
					<li><a href="img/resource/geoloc_v1.jpg"><img src="img/resource/geoloc_v1.jpg" alt="Geoloc Systems" /></a></li>
				</ul>			
			</div>


			<div id="ogame" class="desc">
				<h1><a name="ogame" class="anchor closed">OGame</a></h1>
				
				<p>Thème pour le <acronym title="Massive Multiplayer Online Role Playing Game">MMORPG</acronym> <a href="http://www.ogame.fr">OGame</a>, basé sur le fond d'écran <a href="http://www.webdiod.com/">Endless</a>.</p>
			</div>
			
			<div id="ogame_detail" class="expand">			
				<h1>OGame</h1>
				<ul>
					<li><a href="img/resource/ogame_1280x960.jpg"><img src="img/resource/ogame_1280x960.jpg" alt="OGame" /></a></li>
				</ul>			
			</div>
							
			<div id="dotclear" class="desc">
				<h1><a name="dotclear" class="anchor closed">DotClear 2</a></h1>
																	
				<p>Thème pour <a href="http://www.dotclear.net">DotClear</a>. Un aperçu est disponible sur <a href="http://www.esigetel.free.fr/projet">le blog</a> que j'ai créé pour mon projet de fin d'études.</p>
			</div>
			
			<div id="dotclear_detail" class="expand">			
				<h1>DotClear 2</h1>
				<ul>
					<li><a href="img/resource/kafet.png"><img src="img/resource/kafet.png" alt="Dotclear2" /></a></li>
				</ul>			
			</div>

		<? elseif ($page == 'widgets'): ?>
			<!--
			<div id="itemlist">
				<h1><a name="item21" class="anchor closed" onclick="expand(21, this.parentNode.offsetTop)">DewVibes</a></h1>
				<ul class="installfor">
					<li><a href="http://eco.netvibes.com/subscribe/200881" title="Get widget for Netvibes"><img src="img/netvibes.png" alt="Netvibes"> Netvibes</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200881?platform=igoogle" title="Get widget for iGoogle"><img src="img/igoogle.png" alt="iGoogle"> iGoogle</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200881?platform=dashboard" title="Get widget for Apple Dashboard"><img src="img/dashboard.png" alt="Apple Dashboard"> Apple Dashboard</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200881?platform=opera" title="Get widget for Opera"><img src="img/opera.png" alt="Opera"> Opera</a></li>
				</ul>
								
				<p>MP3 music player based on <a href="http://www.alsacreations.fr/mp3-dewplayer.html">Dewplayer</a> multi. Your just have to enter the address of a m3u playlist to have it played.</p>
			</div>
			
			<div id="expand21" class="expand">			
				<h1>DewVibes</h1>
				<ul>
					<li><a href="img/resource/dewvibes.jpg"><img src="img/resource/dewvibes.jpg" alt="DewVibes" /></a></li>
				</ul>			
			</div>
					
			<div id="itemlist">
				<h1><a name="item20" class="anchor closed" onclick="expand(20, this.parentNode.offsetTop)">Light crude quote</a></h1>
				<ul class="installfor">
					<li><a href="http://eco.netvibes.com/subscribe/200798" title="Get widget for Netvibes"><img src="img/netvibes.png" alt="Netvibes"> Netvibes</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200798?platform=igoogle" title="Get widget for iGoogle"><img src="img/igoogle.png" alt="iGoogle"> iGoogle</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200798?platform=dashboard" title="Get widget for Apple Dashboard"><img src="img/dashboard.png" alt="Apple Dashboard"> Apple Dashboard</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200798?platform=opera" title="Get widget for Opera"><img src="img/opera.png" alt="Opera"> Opera</a></li>
				</ul>
								
				<p>Display the quotation of oil. All data are from <a href="http://www.boursorama.com">boursorama</a>.</p>
			</div>
			
			<div id="expand20" class="expand">			
				<h1>Light crude quote</h1>
				<ul>
					<li><a href="img/resource/oil.jpg"><img src="img/resource/oil.jpg" alt="Light crude quote" /></a></li>
				</ul>			
			</div>
					
			<div id="itemlist">
				<h1><a name="item19" class="anchor closed" onclick="expand(19, this.parentNode.offsetTop)">RTL2</a></h1>
				<ul class="installfor">
					<li><a href="http://eco.netvibes.com/subscribe/200797" title="Get widget for Netvibes"><img src="img/netvibes.png" alt="Netvibes"> Netvibes</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200797?platform=igoogle" title="Get widget for iGoogle"><img src="img/igoogle.png" alt="iGoogle"> iGoogle</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200797?platform=dashboard" title="Get widget for Apple Dashboard"><img src="img/dashboard.png" alt="Apple Dashboard"> Apple Dashboard</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200797?platform=opera" title="Get widget for Opera"><img src="img/opera.png" alt="Opera"> Opera</a></li>
				</ul>
								
				<p>Display title, artist, and album of the song currently airing on RTL2. Here's the <a href="http://radio.rtl2.fr/playlist/rtl2_hq.pls">webradio</a></p>
			</div>
			
			<div id="expand19" class="expand">			
				<h1>RTL2</h1>
				<ul>
					<li><a href="img/resource/rtl2.jpg"><img src="img/resource/rtl2.jpg" alt="RTL2" /></a></li>
				</ul>			
			</div>

			<div id="itemlist">
				<h1><a name="item18" class="anchor closed" onclick="expand(18, this.parentNode.offsetTop)">Torrent search</a></h1>
				
				<ul class="installfor">
					<li><a href="http://eco.netvibes.com/subscribe/200796" title="Get widget for Netvibes"><img src="img/netvibes.png" alt="Netvibes"> Netvibes</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200796?platform=igoogle" title="Get widget for iGoogle"><img src="img/igoogle.png" alt="iGoogle"> iGoogle</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200796?platform=dashboard" title="Get widget for Apple Dashboard"><img src="img/dashboard.png" alt="Apple Dashboard"> Apple Dashboard</a></li>
					<li><a href="http://eco.netvibes.com/subscribe/200796?platform=opera" title="Get widget for Opera"><img src="img/opera.png" alt="Opera"> Opera</a></li>
				</ul>
								
				<p>Widget for torrent files search, using <a href="http://wwwtorrents.to">Torrents.to</a>.</p>
			</div>
			
			<div id="expand18" class="expand">			
				<h1>Torrent search</h1>

				<ul>
					<li><a href="img/resource/torrents.jpg"><img src="img/resource/torrents.jpg" alt="Torrent search" /></a></li>
				</ul>			
			</div>
					
			<div id="itemlist">
				<h1><a name="item17" class="anchor closed" onclick="expand(17, this.parentNode.offsetTop)">MP3 Tunes</a></h1>
				<ul class="installfor">
					<li><a href="http://eco.netvibes.com/subscribe/200799" title="Get widget for Netvibes"><img src="img/netvibes.png" alt="Netvibes"> Netvibes</a></li>
				</ul>
								
				<p>Module allowing you to use you mp3tunes locker in Netvibes.</p>
			</div>
			
			<div id="expand17" class="expand">			
				<h1>MP3 Tunes</h1>
				<ul>
					<li><a href="img/resource/mp3tunes.jpg"><img src="img/resource/mp3tunes.jpg" alt="MP3 Tunes" /></a></li>
				</ul>
			</div>
			-->
		<? endif; ?>
		</div><!--#text-->
	</div><!--#wrapper-->


	<p id="footer">
		Sauf mention contraire, les créations présentes sur ce site sont sous licence <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.fr"><img src="img/cc-by-nc-sa" alt="CreativeCommons BY-NC-SA" /></a>. <br />Pour toute autre utilisation de ces images ou si vous avez des questions, contactez-moi&nbsp;: <a href="mailto:&#103;&#114;&#101;&#103;&#046;&#115;&#101;&#116;&#104;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">greg.seth [at] gmail [dot] com</a>.
	</p>

</div><!--#description-->
</body>


<!--begin: Google Analytics-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl."&nbsp; "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3754826-3");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!--end: Google Analytics-->


</html>
