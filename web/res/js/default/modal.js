$(function(){

	let fadeInModal = function (){
		console.log('Fading in modal');
		$('.modal').fadeIn();
		$('.modal-content').show();
	
	}

	let fadeOutModal = function(){
		console.log('Fading out modal');
		$('.modal-content').hide();
		$('.modal').fadeOut();
	}

	$('.close').on('click', function(){
		fadeOutModal();
	});
	$('.m-btn').on('click', function(){
		
		fadeInModal();
	});

});
