// Two elements jQuery carousel
// Author: Przemysław Winiarski
// https://bluegaming.pl
// Init carousel
$(document).ready(function(){
	if($('.bg-carousel-container').length){
	$('.bg-carousel-container').each(function(){
		var i = 0;
		$(this).children().clone().appendTo($(this));	// Clone container elements
		$(this).children('.bg-carousel-item').each(function(){
			$(this).attr('data-carousel-item', i).css({'left': '+=50%', 'display': 'none', 'opacity': '0'});	// Hide container elements and set offset for animation
			i++;
		});
	});
	}
	rideCarousel();
});
// Change currently displayed item
function rideCarousel(){
	var isMobile = false; //initiate as false
	// device detection
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
		|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
		isMobile = true;
	}
	$('.bg-carousel-container').each(function(){
		if( $(this).find('.bg-carousel-item:visible').length !== 0 ){
			firstIteration = $(this).find('.bg-carousel-item:visible').first().data('carousel-item');	// Get data-arousel-item number of left element
			secondIteration = firstIteration + 1;														// Get data-arousel-item number of right element
			thirdIteration = secondIteration + 1;														// Get data-arousel-item number of off screen element
			if( thirdIteration === $(this).children().length ){											// If last element, start from 0
				thirdIteration = 0;
			}
			else if( thirdIteration > $(this).children().length ){										// If right element is data-arousel-item-0, get data-arousel-item-1
				thirdIteration = 1
			}
			if(isMobile == false){
				fadeToLeft = $(this).find('.bg-carousel-item:visible').first().offset().left - $(this).find('.bg-carousel-item:visible').last().offset().left;	// First element left offset for animation
				$(this).find('[data-carousel-item=' + firstIteration + ']').animate({left: '-=50%', opacity: '0'},1000,function(){$(this).css({'display': 'none', 'left': '50%'}).appendTo($(this).parent())});
				$(this).find('[data-carousel-item=' + secondIteration + ']').animate({left:fadeToLeft},1000,function(){$(this).css('left', '0')});
				$(this).find('[data-carousel-item=' + thirdIteration + ']').css({'display': 'block', 'position': 'absolute', 'left': '+=50%'}).animate({left: '-=50%', opacity: '1'},1000,function(){$(this).css({'position': 'relative', 'left': '0'})});
			}
			else{
				$(this).find('[data-carousel-item=' + firstIteration + ']').animate({left: '-=50%', opacity: '0'},1000,function(){$(this).css({'display': 'none', 'left': '50%'}).appendTo($(this).parent())});
				$(this).find('[data-carousel-item=' + secondIteration + ']').css({'display': 'block', 'position': 'absolute', 'left': '+=50%'}).animate({left: '-=50%', opacity: '1'},1000,function(){$(this).css({'position': 'relative', 'left': '0'})});
			}
		}
		else{
			if(isMobile == false){
				$(this).find('[data-carousel-item=0], [data-carousel-item=1]').css('display', 'block').animate({left: '-=50%', opacity: '1'}, 1000);	// Bring first two elements on screen
			}
			else{
				$(this).find('[data-carousel-item=0]').css('display', 'block').animate({left: '-=50%', opacity: '1'}, 1000);	// Bring first two elements on screen
			}
		}
	});
}
$(document).ready(function(){
	var minH = 0;
	$(".reviews").each(function(){
	 if ($(this).height() > minH ) {
	   minH = $(this).height();
	$(".bg-carousel-container").height(minH);
	}
	});
});
// Ifinite loop trough carousel-items
function loopCarousel(){
    setTimeout(function () {
        rideCarousel();
        loopCarousel();
    }, 10000);
}
// Self call loopCarousel function
(function(){
    loopCarousel();
})();
//
//
//Toggle acccordion
//
//
$(document).ready(function(){
	$('.accordion-switch').click(function(){
		if($(this).find('.accordion-content:visible').length !== 0){
			$(this).find('.accordion-content').slideToggle();
		}
		else{
			$('.accordion-content:visible').slideUp();
			$(this).find('.accordion-content').slideToggle();
		}
	});
});
//
//
//Scroll with animations to id
//
//
$(document).ready(function(){
	$('a[href^="#"]').click(function(e){
		var offset = 0;
		e.preventDefault();
		if($(this).attr('href') === '#start'){
			$('html, body').stop().animate({scrollTop: offset},1000);
		}
		else{
			offset = $(document).find($(this).attr('href')).offset().top - $('#nav').height();
			$('html, body').stop().animate({scrollTop: offset},1000);
		}
	});
});
$(document).ready(function(){
	$(window).scroll(function(){
		$('a[href^="#"]').each(function(){
			var el = $($(this).attr('href'));
			var bottom = el.height() + el.position().top;
			if($(window).scrollTop() >= 0 && $(window).scrollTop() < $('#start').offset().top){
				$('a[href="#start"]').addClass('active');
			}
			else if($(window).scrollTop() >= el.offset().top - $('#nav').height() && $(window).scrollTop() < bottom){
				$(this).addClass('active');
			}
			else{
				$(this).removeClass('active');
			}
		});
	});
});
//
//
//Switch
//
//
$(document).ready(function(){
	$('.switch input').change(function(){
			$('.schedule').toggle();
			$('.price').each(function(){
			if($(this).text() == '$39' || $(this).text() == '$351'){
				$(this).fadeOut(500, function() {
					$(this).text($(this).text() == '$39' ? '$351' : '$39').fadeIn(500);
					$('.price').toggleClass('month year');
				});	
			}
			else if($(this).text() == '$99' || $(this).text() == '$772'){
				$(this).fadeOut(500, function() {
					$(this).text($(this).text() == '$99' ? '$772' : '$99').fadeIn(500);
				});
			}
			else{
				$(this).fadeOut(500, function() {
					$(this).text('$0').fadeIn(500);
				});
			}
		});
	});
});
//
//
// Display options in modal depending on button clicked
//
//
$('#contactFormModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget)
	var data = button.data('plan');
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	var modal = $(this)
	modal.find('.modal-body input[name="plan"]').val(data);
  });
//
//
//Hide alert message
//
//
$(document).ready(function(){
	if($('.alert-success').length !== 0){
		setTimeout(function() {
			$('.alert-success').slideUp();
		}, 2000);
	}
});
