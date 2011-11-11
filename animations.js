
var step = 356;//362;

$(function() {

	//var step = $('#list li').outerWidth();
	var originalFooterTop = $('#footer').offset().top;

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
		
		var topValue = $('#' + this.name).offset().top;
		var heightValue = $('#' + this.name + '_detail').height();
		
		$('#' + this.name + '_detail').css('top', topValue + 'px' );
		$('#' + this.name + '_detail').fadeToggle();
		
		$('#footer').css({
			'top': Math.max( originalFooterTop, topValue + heightValue + 60 )+ 'px'
		});
		
	});
	
	$("a.fancyMe").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200,
		'overlayColor'	: 	'#000'
	});
	
});

