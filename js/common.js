$(function(){
	$('.fancybox').fancybox({
		padding: 0,
		openEffect: 'fade',
		closeEffect: 'fade',
		openSpeed: 400,
		closeSpeed: 400,
		'beforeClose': function(event) { 
           $('input.red_input').tooltipster('hide');
        }
	});
	//$('input[placeholder], textarea[placeholder]').placeholder();

	$('.send_button').click(function(){
     var parentClass=$(this).attr('rel');
	 var paramsFancy={
	    'scrolling':0,
	    'autoScale': true,
	    'transitionIn': 'elastic',
	    'transitionOut': 'elastic',
	    'speedIn': 500,
	    'speedOut': 300,
	    'autoDimensions': true,
	    'centerOnScroll': true,
	    'href' : '#modal_success',
	    'padding' : '0',
	    'height' : 'auto',
	    helpers: {
	            overlay: {
	              locked: false
	            }
	        }
	    };
	    validate=1;
	    validate_msg='';
	    form=$('#'+$(this).attr('rel'));
	     jQuery.each(form.find('.validate'), function(key, value) {
	        if($(this).val()==''){
	            validate_msg+=$(this).attr('title')+'\n';validate=0;
	            $(this).focus();
	            $(this).addClass('red_input');
	            $(this).tooltipster('update', $(this).attr('title'));
	            $(this).tooltipster('show');
	        }else{
	            $(this).tooltipster('hide');
	            $(this).removeClass('red_input');
	        }
	    });
		//alert(validate);
	    if(validate==1){
	        $.ajax({
	            url: 'ajax.php',
	            data: 'action=send_form&'+form.serialize(),
	            success: function(data){
	                $.fancybox.open(paramsFancy);
	            }
	        });
	        
	    }else{
	       
	    }  
	});
	$('.close_fancy').click(function(){
		$.fancybox.close();
//		document.getElementById('form2').style.display = 'block';
		document.getElementById('name').value = '';
		document.getElementById('mobile').value = '';
				
		
	});
	
	
	$('form input[type="text"]').tooltipster({
        trigger: 'custom',
        animation:'grow',
        theme: 'tooltipster-shadow',
        onlyOne: false,
        timer: 2100,
        position: 'right'
    });
    $('form input[type="phone"]').tooltipster({
        trigger: 'custom',
        animation:'grow',
        theme: 'tooltipster-shadow',
        onlyOne: false,
        timer: 2100,
        position: 'right'
    });
     $('form textarea').tooltipster({
        trigger: 'custom',
        animation:'grow',
        theme: 'tooltipster-shadow',
        onlyOne: false,
        timer: 2100,
        position: 'right'
    });

	
    
});


$(document).ready(function(){
   $('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
   return false;
});



function hide_show (obj){
    var className = obj.className;
    if( className.indexOf(' expanded') == -1 ){
        className += ' expanded';
    }
    else {
        className = className.replace(' expanded', '');
    }
    obj.className = className;
    return false;
};