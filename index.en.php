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

<script type="text/javascript">

var step = 362;

$(function() {

	function atStart() {
		return $('#list:first-child').css('margin-left') == '0px';
	}
	
	function atEnd() {
		return $('#list:first-child').css('margin-left') == -step*($('#list li').size()-1)+'px';
	}

	function nextAtStart() {
		return $('#list:first-child').css('margin-left') == -step+'px';
	}
	
	function nextAtEnd() {
		return $('#list:first-child').css('margin-left') == -step*($('#list li').size()-2)+'px';
	}

	
	$('#prev').click(function() {
		if (!atStart()) {
			$('#list:first-child').animate({
				'margin-left' : '+='+step
			});
			
			$('#next img').removeClass('disabled');
			
		}
		
		if (nextAtStart()) {
			$('#prev img').addClass('disabled');
		}
	});

	$('#next').click(function() {
		if (!atEnd()) {
			$('#list:first-child').animate({
				'margin-left' : '-='+step
			});
			
			$('#prev img').removeClass('disabled');
		}
		
		if (nextAtEnd()) {
			$('#next img').addClass('disabled');
		}
	});
	
	$('#list a').click(function() {

        $('html,body').animate({
        	'scrollTop' : $('[name=' + this.hash.slice(1) +']').offset().top
        });
        
        $('[name=' + this.hash.slice(1) +']').click();

        return false;
	});
	
	$('h1 a').click(function() {
		$('.expand').fadeOut();
		
		$('#' + this.name + '_detail').css('top', $('#' + this.name).offset().top + 'px' );
		$('#' + this.name + '_detail').fadeToggle();
		
	});
	
	$("a.groupImage").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200,
		'overlayColor'	: 	'#000'
	});
	

	
});


</script>
</head>

<body>
<?
	$page = (empty($_GET['page'])) ? 'websites' : $_GET['page'];	
?>
<div id="header">
	<p><span>Greg-Seth</span> Creations</p>
	<div id="langswitcher"><!--<a href="?page=<?=$page?>&amp;l=<?=($_SESSION['l']=='fr_FR') ? 'en_US' : 'fr_FR'?>" title="<?=('View this page in english')?>"><img src="img/<?=($_SESSION['l']=='fr_FR') ? 'en_EN' : 'fr_FR'?>.png" alt="flag" /></a>--></div>
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
				<li class="visible"><a href="#icons"><img src="img/list/icons.png" alt="Icon set" /></a></li>
				<li class="visible"><a href="#anon"><img src="img/list/anon.png" alt="Anon." /></a></li>
				<li class="visible"><a href="#jason"><img src="img/list/jason.png" alt="Jason" /></a></li>
				<li class="visible"><a href="#ismans"><img src="img/list/ismans.png" alt="International ISMANS ltd." /></a></li>
				<li class="visible"><a href="#trinome"><img src="img/list/trinome.png" alt="Trinôme" /></a></li>
				<li class="visible"><a href="#tse"><img src="img/list/tse.png" alt="Logo TSE" /></a></li>
				<li class="visible"><a href="#abalone"><img src="img/list/abalone.png" alt="Abalone" /></a></li>
				<li class="visible"><a href="#ring"><img src="img/list/ring.png" alt="One ring to rule them all" /></a></li>
				
			<? elseif ($page == 'themes'): ?>
				<li class="visible"><a href="#item10"><img src="img/list/cupofcoffee.png" alt="[Cup] of coffee" /></a></li>
				<li class="visible"><a href="#item22"><img src="img/list/geoloc.png" alt="Geoloc Systems" /></a></li>
				<li class="visible"><a href="#item11"><img src="img/list/ogame.png" alt="OGame" /></a></li>
				<li class="visible"><a href="#item9" ><img src="img/list/kfet.png" alt="DotClear 2" /></a></li>

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
		<!--<li><a href="?page=widgets" class="tab <?=$page=='widgets'?'selected':'unselected'?>">Widgets</a></li>-->
		<li><a href="?page=themes" class="tab <?=$page=='themes'?'selected':'unselected'?>">Themes</a></li>
		<li><a href="?page=graphics" class="tab <?=$page=='graphics'?'selected':'unselected'?>">Graphics</a></li>
		<li><a href="?page=websites" class="tab <?=$page=='websites'?'selected':'unselected'?>">Websites</a></li>
	</ul>
</div><!--#page-->


<div id="description">

	<div id="wrapper">
		<div id="text">
		<? if ($page == 'websites'): ?>
			<div id="ckeller">
				<h1><a name="ckeller" class="anchor closed">C. Keller</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://encadrement.free.fr">http://encadrement.free.fr</a></li>
					<li><span class="label">Created in:</span> 2000</li>
					<li><span class="label">Version:</span> 2.0</li>
				</ul>
								
				<p>Art gallery of I made for my mother, Catherine Keller. If you have any question or want more informations, you can contact her by mail at: <a href="mailto:cath.keller@gmail.com">cath.keller@gmail.com</a>.</p>

			</div>
			
			<div id="ckeller_detail" class="expand">			
				<h1>C. Keller</h1>
				<ul>
					<li><a href="img/resource/encadrement.png"><img src="img/resource/encadrement.png" alt="C. Keller" /></a></li>
				</ul>			
			</div>
					
			<div id="gregseth">
				<h1><a name="gregseth" class="anchor closed">Greg-Seth</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://greg.seth.free.fr">http://greg.seth.free.fr</a></li>
					<li><span class="label">Created in:</span> 1999</li>
					<li><span class="label">Version:</span> 2.5</li>
				</ul>
								
				<p>My first personal website. Currently you can find some pictures of speleology in the <a href="http://www.grotte-aguzou.com/">Aguzou caverns</a> , of my trip in Iceland and few other things...</p>
			</div>
			
			<div id="gregseth_detail" class="expand">			
				<h1>Greg-Seth</h1>
				<ul>
					<li><a href="img/resource/gregseth.png"><img src="img/resource/gregseth.png" alt="Greg-Seth" /></a></li>
				</ul>			
			</div>
					
			<div id="chemicals">
				<h1><a name="chemicals" class="anchor closed">Chemicals</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://chemicals.free.fr">http://chemicals.free.fr</a></li>
					<li><span class="label">Created in:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>A summary of my chemistry courses. I really like the periodic table.</p>
			</div>
			
			<div id="chemicals_detail" class="expand">			
				<h1>Chemicals</h1>
				<ul>
					<li><a href="img/resource/chemicals.png"><img src="img/resource/chemicals.png" alt="Chemicals" /></a></li>
				</ul>			
			</div>
			
			<div id="donoterase">
				<h1><a name="donoterase" class="anchor closed">DoNotErase</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://not.any.number.free.fr">http://not.any.number.free.fr</a></li>
					<li><span class="label">Created in:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>Unfinished project (beta?) about how to build a site according to web standards, for beginners.</p>
			</div>
			
			<div id="donoterase_detail" class="expand">			
				<h1>DoNotErase</h1>
				<ul>
					<li><a href="img/resource/notanynumber.png"><img src="img/resource/notanynumber.png" alt="DoNotErase" /></a></li>
				</ul>			
			</div>
					
			<div id="fractals">
				<h1><a name="fractals" class="anchor closed">Fractals</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://lesfractales.tpe.free.fr">http://lesfractales.tpe.free.fr</a></li>
					<li><span class="label">Created in:</span> 2006</li>
					<li><span class="label">Version:</span> 1.6</li>
				</ul>
								
				<p>The website I mad for my the project of my last year in college, about <a href="http://en.wikipedia.org/wiki/Fractal">fractals</a>.</p>
			</div>
			
			<div id="fractals_detail" class="expand">			
				<h1>Fractals</h1>
				<ul>
					<li><a href="img/resource/lesfractalestpe.png"><img src="img/resource/lesfractalestpe.png" alt="Fractals" /></a></li>
				</ul>			
			</div>

			<div id="hmdb">
				<h1><a name="hmdb" class="anchor closed">The Home Movie Database</a></h1>
				<ul>
					<li><span class="label">URL:</span> <strong>private</strong></li>
					<li><span class="label">Created in:</span> 2002</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
								
				<p>This site allows me to manage my videotheque. It's not open to public, all that I can say is about the technologies used: few drops of PHP an tons of <a href="http://en.wikipedia.org/wiki/Asynchronous_JavaScript_And_XML"><acronym title="Asynchronous JavaScript And XML">Ajax</acronym></a>. Here's a <a href="img/sites/hmdb_big.jpg">screenshot</a>.</p>
			</div>
			
			<div id="hmdb_detail" class="expand">			
				<h1>The Home Movie Database</h1>

				<ul>
					<li></li>
				</ul>			
			</div>
					
			<div id="winmine">
				<h1><a name="winmine" class="anchor closed">Winmine</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://winmine.free.fr">http://winmine.free.fr</a></li>
					<li><span class="label">Created in:</span> 2004</li>
					<li><span class="label">Version:</span> 1.5</li>
				</ul>
								
				<p>One day that I had time to waste I built this site dedicated to the minesweeper game. You'll  find technics an a few tips about the best game ever.</p>
			</div>

			
			<div id="winmine_detail" class="expand">			
				<h1>Winmine</h1>
				<ul>
					<li><a href="img/resource/winmine.png"><img src="img/resource/winmine.png" alt="Winmine" /></a></li>
				</ul>
							
			</div>
					
			<div id="prepa">
				<h1><a name="prepa" class="anchor closed">Prepa Monod</a></h1>
				<ul>
					<li><span class="label">URL:</span> <a href="http://prepa.monod.free.fr">http://prepa.monod.free.fr</a></li>
					<li><span class="label">Created in:</span> 2003</li>
					<li><span class="label">Version:</span> 1.0</li>
				</ul>
			
				<p>A too-soon-aborted project, built with friends of mine in preparatory class.<br />I just keep it for <a href="http://prepa.monod.free.fr/?page=photos&amp;photo=classe">the pictures</a> taken during the year  and mostly for those taken in the Vincennes botanic park.</p>
			</div>
			
			<div id="prepa_detail" class="expand">			
				<h1>Prepa Monod</h1>
				<ul>
					<li><a href="img/resource/prepamonod.png"><img src="img/resource/prepamonod.png" alt="Prepa Monod" /></a></li>
				</ul>			
			</div>
			
		<? elseif ($page == 'graphics'): ?>
			<div id="icons">
				<h1><a name="icons" class="anchor closed">TV series icon set</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2010</li>
					<li><span class="label">Programs used:</span> Adobe Photoshop CS5</li>

				</ul>
								
				<p>Icons for the missing TV series, based on the template <a href="http://Crazyfool16.deviantart.com/art/Colorflow-Template-182503960">ColorFLow</a> by <a href="http://crazyfool16.deviantart.com/">crazyfool16</a>.<br />The whole set is available to <a href="img/resource/iconset.zip">download</a>.</p>
			</div>
			
			<div id="icons_detail" class="expand">			
				<h1>TV series icon set</h1>
				<ul>
					<li><a href="img/resource/Damages.png" class="groupImage" rel="icons"><img src="img/resource/Damages.png" alt="Damages" /></a></li>
					<li><a href="img/resource/Hawaii-Five-O.png" class="groupImage" rel="icons"><img src="img/resource/Hawaii-Five-O.png" alt="Hawaii Five O" /></a></li>
					<li><a href="img/resource/Nikita.png" class="groupImage" rel="icons"><img src="img/resource/Nikita.png" alt="Nikita" /></a></li>
					<li><a href="img/resource/Lie-to-me.png" class="groupImage" rel="icons"><img src="img/resource/Lie-to-me.png" alt="Lie to me" /></a></li>
					<li><a href="img/resource/NCIS.png" class="groupImage" rel="icons"><img src="img/resource/NCIS.png" alt="NCIS" /></a></li>
					<li><a href="img/resource/The-Walking-Dead.png" class="groupImage" rel="icons"><img src="img/resource/The-Walking-Dead.png" alt="The Walking Dead" /></a></li>
					<li><a href="img/resource/Mad-Men.png" class="groupImage" rel="icons"><img src="img/resource/Mad-Men.png" alt="Mad Men" /></a></li>
					<li><a href="img/resource/Little-Britain.png" class="groupImage" rel="icons"><img src="img/resource/Little-Britain.png" alt="Little Britain" /></a></li>
					<li><a href="img/resource/Hustle.png" class="groupImage" rel="icons"><img src="img/resource/Hustle.png" alt="Hustle" /></a></li>
					<li><a href="img/resource/Twin-Peaks.png" class="groupImage" rel="icons"><img src="img/resource/Twin-Peaks.png" alt="Twin Peaks" /></a></li>
				</ul>			
			</div>

			<div id="anon">
				<h1><a name="anon" class="anchor closed">Anonymous</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2010</li>
					<li><span class="label">Programs used:</span> Adobe Illustrator CS5, Adobe Photoshop CS5</li>

				</ul>
								
				<p>Never forgive, never forget.</p>
			</div>
			
			<div id="anon_detail" class="expand">			
				<h1>Anonymous</h1>
				<ul>
					<li><a href="img/resource/anon_2560x1440.jpg" class="groupImage"><img src="img/resource/anon_2560x1440.jpg" alt="Jason wallpaper" /></a></li>
				</ul>			
			</div>
			
			<div id="jason">
				<h1><a name="jason" class="anchor closed">Jason project</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2010</li>
					<li><span class="label">Programs used:</span> Adobe Illustrator CS5, Adobe Photoshop CS5</li>

				</ul>
								
				<p>Icons set and wallpaper related the the Jason project, for CEA.</p>
			</div>
			
			<div id="jason_detail" class="expand">			
				<h1>Jason project</h1>
				<ul>
					<li><img src="img/resource/sigvisu_icon.png" class="groupImage" rel="jason" alt="SigVisu" /></li>
					<li><img src="img/resource/jade_icon.png" class="groupImage" rel="jason" alt="Jade" /></li>
					<li><img src="img/resource/onyx_icon.png" class="groupImage" rel="jason" alt="Onyx" /></li>
					<li><a href="img/resource/jason_wallpaper.jpg" class="groupImage" rel="jason"><img src="img/resource/jason_wallpaper.jpg" alt="Jason wallpaper" /></a></li>
				</ul>			
			</div>
			
			<div id="ismans">
				<h1><a name="ismans" class="anchor closed" onclick="expand(16, this.parentNode.offsetTop)">International ISMANS ltd.</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2007</li>
					<li><span class="label">Programs used:</span> Adobe Illustrator CS2</li>

				</ul>
								
				<p>Logo done as project for my Master in management.</p>
			</div>
			
			<div id="ismans_detail" class="expand">			
				<h1>International ISMANS ltd.</h1>
				<ul>
					<li><a href="img/resource/ismans_1600x628.png" class="groupImage"><img src="img/resource/ismans_1600x628.png"  alt="International ISMANS ltd." /></a></li>
				</ul>			
			</div>

			<div id="trinome">
				<h1><a name="trinome" class="anchor closed">Trinôme</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 2006</li>
					<li><span class="label">Programs used:</span> Adobe Photoshop CS2</li>

				</ul>
								
				<p>Photoshopped picture of me an my two project partners (Gidoo et Vins) at <acronym title="&Eacute;cole Supérieure d'Ingénieurs en Informatique et Génie de Télécommunications">ESIGETEL</acronym>.</p>
			</div>
			
			<div id="trinome_detail" class="expand">			
				<h1>Trinôme</h1>
				<ul>
					<li><a href="img/resource/trinome_1600x1200.jpg" class="groupImage" rel="trinome"><img src="img/resource/trinome_1600x1200.jpg" alt="Trinôme" /></a></li>
					<li><a href="img/resource/trinome_original.jpg" class="groupImage" rel="trinome"><img src="img/resource/trinome_original.jpg" alt="Trinôme" /></a></li>
				</ul>			
			</div>

			<div id="tse">
				<h1><a name="tse" class="anchor closed">Logo TSE</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 2007</li>
					<li><span class="label">Programs used:</span> Adobe Illustrator CS2, Adobe Photoshop CS2</li>
				</ul>
								
				<p>Logo created fo my specialty at ESIGETEL. TSE is for Embedded Systems Technologies.</p>
			</div>
			
			<div id="tse_detail" class="expand">			
				<h1>Logo TSE</h1>
				<ul>
					<li><a href="img/resource/tse_1280x800.jpg" class="groupImage"><img src="img/resource/tse_1280x800.jpg" alt="Logo TSE" /></a></li>
				</ul>			
			</div>
			
			<div id="abalone">
				<h1><a name="abalone" class="anchor closed">Abalone</a></h1>
				<ul>
					<li><span class="label">Created in:</span> 1998</li>
					<li><span class="label">Programs used:</span> Corel Bryce 4, Adobe Photoshop 7</li>
				</ul>
								
				<p>Wallpaper about the game <a href="http://fr.abalonegames.com">abalone</a>. I won a game box in a wallpaper contest on the official website</p>
			</div>
			
			<div id="abalone_detail" class="expand">			
				<h1>Abalone</h1>
				<ul>
					<li><a href="img/resource/abalone_1024x768.jpg" class="groupImage"><img src="img/resource/abalone_1024x768.jpg" alt="Abalone" /></a></li>
				</ul>			
			</div>
			
			<div id="ring">
				<h1><a name="ring" class="anchor closed">One ring to rule them all</a></h1>				
				<ul>
					<li><span class="label">Created in:</span> 1998</li>
					<li><span class="label">Programs used:</span> Corel Bryce 4, Adobe Photoshop 7</li>
				</ul>
								
				<p>Wallpaper about The Lord Of The Rings.</p>
			</div>
			
			<div id="ring_detail" class="expand">			
				<h1>One ring to rule them all</h1>
				<ul>
					<li><a href="img/resource/ring_1600x1200.jpg" class="groupImage"><img src="img/resource/ring_1600x1200.jpg" alt="One ring to rule them all" /></a></li>
				</ul>			
			</div>
			
		<? elseif ($page == 'themes'): ?>
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

<!--
	<p id="footer">
		The content of this website is under <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/2.0/fr/">BY-NC-ND</a> <a href="http://www.creativecommons.org">CreativeCommons</a> license.<br />Any question? Contact me by mail: <a href="mailto:greg.seth@gmail.com">greg.seth@gmail.com</a>.
	</p>
-->
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
