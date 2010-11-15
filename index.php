<?
	require_once('../l10n/l10n.lib.php');
	$page = (empty($_GET['page'])) ? 1 : $_GET['page'];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Greg Seth Creations</title>
<link rel="stylesheet" href="default.css" />
<link rel="shortcut icon" href="img/favicon.png" />
<script type="text/javascript" src="global.js"></script>
</head>

<body>

<div id="header">
	<p><span>Greg-Seth</span> Creations</p>
	<img id="bglogo" src="img/logo2x.png" alt="Greg Seth Creations" />
	<div id="langswitcher"><!--<a href="?page=<?=$page?>&amp;l=<?=($_SESSION['l']=='fr_FR') ? 'en_US' : 'fr_FR'?>" title="<?=l10n('View this page in english')?>"><img src="img/<?=($_SESSION['l']=='fr_FR') ? 'en_EN' : 'fr_FR'?>.png" alt="flag" /></a>--></div>
</div><!--#header-->

<div id="page">
	<div id="gallery">
		<ul id="list">
			<? if ($page == 1): // websites ?>						
				<li class="visible"><a href="#item1" onclick="expand(1, null, true)";><img src="img/list/1.jpg" alt="C. Keller" /></a></li>
				<li class="visible"><a href="#item2" onclick="expand(2, null, true)";><img src="img/list/2.jpg" alt="Greg-Seth" /></a></li>
				<li class="hidden"><a href="#item3" onclick="expand(3, null, true)";><img src="img/list/3.jpg" alt="Chemicals" /></a></li>
				<li class="hidden"><a href="#item4" onclick="expand(4, null, true)";><img src="img/list/4.jpg" alt="DoNotErase" /></a></li>
				<li class="hidden"><a href="#item5" onclick="expand(5, null, true)";><img src="img/list/5.jpg" alt="Fractals" /></a></li>
				<li class="hidden"><a href="#item6" onclick="expand(6, null, true)";><img src="img/list/6.jpg" alt="The Home Movie Database" /></a></li>
				<li class="hidden"><a href="#item7" onclick="expand(7, null, true)";><img src="img/list/7.jpg" alt="Winmine" /></a></li>
				<li class="hidden"><a href="#item8" onclick="expand(8, null, true)";><img src="img/list/8.jpg" alt="Prepa Monod" /></a></li>
				
			<? elseif ($page == 2): // graphics ?>
				<li class="visible"><a href="#item23" onclick="expand(23, null, true)";><img src="img/graphisme/jason.png" alt="Jason" /></a></li>
				<li class="visible"><a href="#item16" onclick="expand(16, null, true)";><img src="img/list/16.jpg" alt="International ISMANS ltd." /></a></li>
				<li class="hidden"><a href="#item15" onclick="expand(15, null, true)";><img src="img/list/15.jpg" alt="Trinôme" /></a></li>
				<li class="hidden"><a href="#item14" onclick="expand(14, null, true)";><img src="img/list/14.jpg" alt="Logo TSE" /></a></li>
				<li class="hidden"><a href="#item22" onclick="expand(22, null, true)";><img src="img/list/22.jpg" alt="Geoloc Systems" /></a></li>
				<li class="hidden"><a href="#item13" onclick="expand(13, null, true)";><img src="img/list/13.jpg" alt="Abalone" /></a></li>
				<li class="hidden"><a href="#item12" onclick="expand(12, null, true)";><img src="img/list/12.jpg" alt="One ring to rule them all" /></a></li>
				
			<? elseif ($page == 3): // themes ?>
				<li class="visible"><a href="#item10" onclick="expand(10, null, true)";><img src="img/list/10.jpg" alt="[Cup] of coffee" /></a></li>
				<li class="visible"><a href="#item11" onclick="expand(11, null, true)";><img src="img/list/11.jpg" alt="OGame" /></a></li>
				<li class="hidden"><a href="#item9" onclick="expand(9, null, true)";><img src="img/list/9.jpg" alt="DotClear 2" /></a></li>

			<? elseif ($page == 4): // widgets ?>
				<li class="visible"><a href="#item21" onclick="expand(21, null, true)";><img src="img/list/21.jpg" alt="DewVibes" /></a></li>
				<li class="visible"><a href="#item20" onclick="expand(20, null, true)";><img src="img/list/20.jpg" alt="Light crude quote" /></a></li>
				<li class="hidden"><a href="#item19" onclick="expand(19, null, true)";><img src="img/list/19.jpg" alt="RTL2" /></a></li>
				<li class="hidden"><a href="#item18" onclick="expand(18, null, true)";><img src="img/list/18.jpg" alt="Torrent search" /></a></li>
				<li class="hidden"><a href="#item17" onclick="expand(17, null, true)";><img src="img/list/17.jpg" alt="MP3 Tunes" /></a></li>

			<? endif; ?>

		</ul>
		<p id="list-nav"><a href="javascript:goPrevious()" title="&lt;&lt; Previous" id="prev"><img src="img/blank.png" alt="&lt;&lt;&lt; Previous" class="disabled"/>&nbsp;</a>&nbsp;<a href="javascript:goNext()" title="Next &gt;&gt;&gt;"id="next"><img src="img/blank.png" alt="Next &gt;&gt;"/>&nbsp;</a></p>

	</div><!--#gllery-->
	<ul id="tabs">
		<li><a href="?page=4" class="tab unselected">Widgets</a></li>
		<li><a href="?page=3" class="tab unselected">Themes</a></li>
		<li><a href="?page=2" class="tab unselected">Graphics</a></li>
		<li><a href="?page=1" class="tab selected">Websites</a></li>
	</ul>
</div><!--#page-->


<div id="description">

	<div id="wrapper">
		<div id="text">
		<? if ($page == 1): // websites ?>
			<div id="itemlist">
				<h1><a name="item1" class="anchor closed" onclick="expand(1, this.parentNode.offsetTop)">C. Keller</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://encadrement.free.fr">http://encadrement.free.fr</a></li>
					<li><span class="label">Created in:</span> 2000</li>
					<li><span class="label">Version:</span> 2.0</li>
				</ul>
								
				<p>Art gallery of I made for my mother, Catherine Keller. If you have any question or want more informations, you can contact her by mail at: <a href="mailto:cath.keller@gmail.com">cath.keller@gmail.com</a>.</p>

			</div>
			
			<div id="expand1" class="expand">			
				<h1>C. Keller</h1>
				<ul>
					<li><a href="img/resource/encadrement.png"><img src="img/resource/encadrement.png" alt="C. Keller" /></a></li>
				</ul>			
			</div>
					
			<div id="itemlist">
				<h1><a name="item2" class="anchor closed" onclick="expand(2, this.parentNode.offsetTop)">Greg-Seth</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://greg.seth.free.fr">http://greg.seth.free.fr</a></li>
					<li><span class="label">Created in:</span> 1999</li>
					<li><span class="label">Version:</span> 2.5</li>
				</ul>
								
				<p>My first personal website. Currently you can find some pictures of speleology in the <a href="http://www.grotte-aguzou.com/">Aguzou caverns</a> , of my trip in Iceland and few other things...</p>
			</div>
			
			<div id="expand2" class="expand">			
				<h1>Greg-Seth</h1>
				<ul>
					<li><a href="img/resource/gregseth.png"><img src="img/resource/gregseth.png" alt="Greg-Seth" /></a></li>
				</ul>			
			</div>
					
			<div id="itemlist">
				<h1><a name="item3" class="anchor closed" onclick="expand(3, this.parentNode.offsetTop)">Chemicals</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://chemicals.free.fr">http://chemicals.free.fr</a></li>
					<li><span class="label">Created in:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>A summary of my chemistry courses. I really like the periodic table.</p>
			</div>
			
			<div id="expand3" class="expand">			
				<h1>Chemicals</h1>
				<ul>
					<li><a href="img/resource/chemicals.png"><img src="img/resource/chemicals.png" alt="Chemicals" /></a></li>
				</ul>			
			</div>
			
			<div id="itemlist">
				<h1><a name="item4" class="anchor closed" onclick="expand(4, this.parentNode.offsetTop)">DoNotErase</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://not.any.number.free.fr">http://not.any.number.free.fr</a></li>
					<li><span class="label">Created in:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>Unfinished project (beta?) about how to build a site according to web standards, for beginners.</p>
			</div>
			
			<div id="expand4" class="expand">			
				<h1>DoNotErase</h1>
				<ul>
					<li><a href="img/resource/notanynumber.png"><img src="img/resource/notanynumber.png" alt="DoNotErase" /></a></li>
				</ul>			
			</div>
					
			<div id="itemlist">
				<h1><a name="item5" class="anchor closed" onclick="expand(5, this.parentNode.offsetTop)">Fractals</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://lesfractales.tpe.free.fr">http://lesfractales.tpe.free.fr</a></li>
					<li><span class="label">Created in:</span> 2006</li>
					<li><span class="label">Version:</span> 1.6</li>
				</ul>
								
				<p>The website I mad for my the project of my last year in college, about <a href="http://en.wikipedia.org/wiki/Fractal">fractals</a>.</p>
			</div>
			
			<div id="expand5" class="expand">			
				<h1>Fractals</h1>
				<ul>
					<li><a href="img/resource/lesfractalestpe.png"><img src="img/resource/lesfractalestpe.png" alt="Fractals" /></a></li>
				</ul>			
			</div>

			<div id="itemlist">
				<h1><a name="item6" class="anchor closed" onclick="expand(6, this.parentNode.offsetTop)">The Home Movie Database</a></h1>
				<ul>
					<li><span class="label">URL:</span> <strong>private</strong></li>
					<li><span class="label">Created in:</span> 2002</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>This site allows me to manage my videotheque. It's not open to public, all that I can say is about the technologies used: few drops of PHP an tons of <a href="http://en.wikipedia.org/wiki/Asynchronous_JavaScript_And_XML"><acronym title="Asynchronous JavaScript And XML">Ajax</acronym></a>. Here's a <a href="img/sites/hmdb_big.jpg">screenshot</a>.</p>
			</div>
			
			<div id="expand6" class="expand">			
				<h1>The Home Movie Database</h1>

				<ul>
					<li></li>
				</ul>			
			</div>
					
			<div id="itemlist">
				<h1><a name="item7" class="anchor closed" onclick="expand(7, this.parentNode.offsetTop)">Winmine</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://winmine.free.fr">http://winmine.free.fr</a></li>
					<li><span class="label">Created in:</span> 2004</li>
					<li><span class="label">Version:</span> 1.5</li>
				</ul>
								
				<p>One day that I had time to waste I built this site dedicated to the minesweeper game. You'll  find technics an a few tips about the best game ever.</p>
			</div>

			
			<div id="expand7" class="expand">			
				<h1>Winmine</h1>
				<ul>
					<li><a href="img/resource/winmine.png"><img src="img/resource/winmine.png" alt="Winmine" /></a></li>
				</ul>
							
			</div>
					
			<div id="itemlist">
				<h1><a name="item8" class="anchor closed" onclick="expand(8, this.parentNode.offsetTop)">Prepa Monod</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://prepa.monod.free.fr">http://prepa.monod.free.fr</a></li>
					<li><span class="label">Created in:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
			
				<p>A too-soon-aborted project, built with friends of mine in preparatory class.<br />I just keep it for <a href="http://prepa.monod.free.fr/?page=photos&amp;photo=classe">the pictures</a> taken during the year  and mostly for those taken in the Vincennes botanic park.</p>
			</div>
			
			<div id="expand8" class="expand">			
				<h1>Prepa Monod</h1>
				<ul>
					<li><a href="img/resource/prepamonod.png"><img src="img/resource/prepamonod.png" alt="Prepa Monod" /></a></li>
				</ul>			
			</div>
			
		<? elseif ($page == 2): // graphics ?>
			<div id="itemlist">
				<h1><a name="item23" class="anchor closed" onclick="expand(23, this.parentNode.offsetTop)">Jason project</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2010</li>
					<li><span class="label">Programs used:</span> Adobe Illustrator CS5, Adobe Photoshop CS5</li>

				</ul>
								
				<p>Icons set and wallpaper related the the Jason project, for CEA.</p>
			</div>
			
			<div id="expand23" class="expand">			
				<h1>International ISMANS ltd.</h1>
				<ul>
					<li><img src="img/resource/sigvisu_icon.png" alt="SigVisu" /></li>
					<li><img src="img/resource/jade_icon.png" alt="Jade" /></li>
					<li><img src="img/resource/onyx_icon.png" alt="Onyx" /></li>
					<li><a href="img/resource/jason_wallpaper.jpg"><img src="img/resource/jason_wallpaper.jpg" alt="Jason wallpaper" /></a></li>
				</ul>			
			</div>
			
			<div id="itemlist">
				<h1><a name="item16" class="anchor closed" onclick="expand(16, this.parentNode.offsetTop)">International ISMANS ltd.</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2007</li>
					<li><span class="label">Programs used:</span> Adobe Illustrator CS2</li>

				</ul>
								
				<p>Logo done as project for my Master in management.</p>
			</div>
			
			<div id="expand16" class="expand">			
				<h1>International ISMANS ltd.</h1>
				<ul>
					<li><a href="img/resource/ismans_1600x628.png"><img src="img/resource/ismans_1600x628.png"  alt="International ISMANS ltd." /></a></li>
				</ul>			
			</div>

			<div id="itemlist">
				<h1><a name="item15" class="anchor closed" onclick="expand(15, this.parentNode.offsetTop)">Trinôme</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2006</li>
					<li><span class="label">Programs used:</span> Adobe Photoshop CS2</li>

				</ul>
								
				<p>Photoshopped picture of me an my two project partners (Gidoo et Vins) at <acronym title="&Eacute;cole Supérieure d'Ingénieurs en Informatique et Génie de Télécommunications">ESIGETEL</acronym>.</p>
			</div>
			
			<div id="expand15" class="expand">			
				<h1>Trinôme</h1>
				<ul>
					<li><a href="img/resource/trinome_1600x1200.jpg"><img src="img/resource/trinome_1600x1200.jpg" alt="Trinôme" /></a></li>
					<li><a href="img/resource/trinome_original.jpg"><img src="img/resource/trinome_original.jpg" alt="Trinôme" /></a></li>
				</ul>			
			</div>

			<div id="itemlist">
				<h1><a name="item14" class="anchor closed" onclick="expand(14, this.parentNode.offsetTop)">Logo TSE</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 2007</li>
					<li><span class="label">Programs used:</span> Adobe Illustrator CS2, Adobe Photoshop CS2</li>
				</ul>
								
				<p>Logo created fo my specialty at ESIGETEL. TSE is for Embedded Systems Technologies.</p>
			</div>
			
			<div id="expand14" class="expand">			
				<h1>Logo TSE</h1>
				<ul>
					<li><a href="img/resource/tse_1280x800.jpg"><img src="img/resource/tse_1280x800.jpg" alt="Logo TSE" /></a></li>
				</ul>			
			</div>

			<div id="itemlist">
				<h1><a name="item22" class="anchor closed" onclick="expand(22, this.parentNode.offsetTop)">Geoloc Systems</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 2006</li>
					<li><span class="label">Programs used:</span> Macromedia Dreamweaver 8, Adobe Photoshop CS2</li>
				</ul>
								
				<p>Design proposal, made during my second year internship.</p>
			</div>
			
			<div id="expand22" class="expand">			
				<h1>Geoloc Systems</h1>
				<ul>
					<li><a href="img/resource/geoloc_v2.jpg"><img src="img/resource/geoloc_v2.jpg" alt="Geoloc Systems" /></a></li>
					<li><a href="img/resource/geoloc_v1.jpg"><img src="img/resource/geoloc_v1.jpg" alt="Geoloc Systems" /></a></li>
				</ul>			
			</div>
			
			<div id="itemlist">
				<h1><a name="item13" class="anchor closed" onclick="expand(13, this.parentNode.offsetTop)">Abalone</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 1998</li>
					<li><span class="label">Programs used:</span> Corel Bryce 4, Adobe Photoshop 7</li>
				</ul>
								
				<p>Wallpaper about the game <a href="http://fr.abalonegames.com">abalone</a>. I won a game box in a wallpaper contest on the official website</p>
			</div>
			
			<div id="expand13" class="expand">			
				<h1>Abalone</h1>
				<ul>
					<li><a href="img/resource/abalone_1024x768.jpg"><img src="img/resource/abalone_1024x768.jpg" alt="Abalone" /></a></li>
				</ul>			
			</div>
			
			<div id="itemlist">
				<h1><a name="item12" class="anchor closed" onclick="expand(12, this.parentNode.offsetTop)">One ring to rule them all</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 1998</li>
					<li><span class="label">Programs used:</span> Corel Bryce 4, Adobe Photoshop 7</li>
				</ul>
								
				<p>Wallpaper about The Lord Of The Rings.</p>
			</div>
			
			<div id="expand12" class="expand">			
				<h1>One ring to rule them all</h1>
				<ul>
					<li><a href="img/resource/ring_1600x1200.jpg"><img src="img/resource/ring_1600x1200.jpg" alt="One ring to rule them all" /></a></li>
				</ul>			
			</div>
			
		<? elseif ($page == 3): // themes ?>
			<div id="itemlist">
				<h1><a name="item10" class="anchor closed" onclick="expand(10, this.parentNode.offsetTop)">[Cup] of coffee</a></h1>

				<p>Theme for <a href="http://www.dotclear.net">DotClear</a> created for <a href="http://gregseth.free.fr/blog">my old blog</a>.</p>
			</div>
			
			<div id="expand10" class="expand">			
				<h1>[Cup] of coffee</h1>
				<ul>
					<li></li>
				</ul>			
			</div>

			<div id="itemlist">
				<h1><a name="item11" class="anchor closed" onclick="expand(11, this.parentNode.offsetTop)">OGame</a></h1>
				
				<p>Theme or the <acronym title="Massive Multiplayer Online Role Playing Game">MMORPG</acronym> <a href="http://www.ogame.fr">OGame</a>, based on the <a href="http://www.webdiod.com/">Endless</a> wallpapaer. To use it in he game, use this address: <a href="http://11010101110.free.fr/OGame/revolution/">http://11010101110.free.fr/OGame/revolution/</a>.</p>
			</div>
			
			<div id="expand11" class="expand">			
				<h1>OGame</h1>
				<ul>
					<li></li>
				</ul>			
			</div>
				
			<div id="itemlist">
				<h1><a name="item9" class="anchor closed" onclick="expand(9, this.parentNode.offsetTop)">DotClear 2</a></h1>
																	
				<p>Theme for <a href="http://www.dotclear.net">DotClear</a>. You can have preview of it on <a href="http://www.esigetel.free.fr/projet">the blog</a> I created for my 3rd year engineering school<br />Send me a mail if you're interested.</p>
			</div>
			
			<div id="expand9" class="expand">			
				<h1>DotClear 2</h1>
				<ul>
					<li></li>
				</ul>			
			</div>

		<? elseif ($page == 4): // widgets ?>
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
			
		<? endif; ?>
		</div><!--#text-->
	</div><!--#wrapper-->


	<p id="footer">
		The content of this website is under <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.0/fr/">BY-NC-ND</a> <a href="http://www.creativecommons.org">CreativeCommons</a> license.<br />Any question? Contact me by mail: <a href="mailto:greg.seth@gmail.com">greg.seth@gmail.com</a>.
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
