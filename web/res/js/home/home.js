$(function(){


	let populateModal = function(obj){
		$('#img1 img').attr('src', obj.img1);
		$('#img2 img').attr('src', obj.img2);	
	}	


	$('#pv-roof').on('click',function(){
		let obj = {	
			img1: '../web/res/img/pv/roof/roof1.jpg',
			img2: '../web/res/img/pv/roof/roof2.jpg'
		};
		populateModal(obj);
		fadeInModal();
	});
	
	$('#pv-wall').on('click',function(){
		let obj = {	
			img1: '../web/res/img/pv/wall/wall1.jpg',
			img2: '../web/res/img/pv/wall/wall2.jpg'
		};
		populateModal(obj);
		fadeInModal();
	});
	
	$('#pv-dw').on('click',function(){
		let obj = {	
			img1: '../web/res/img/pv/dw/dw1.jpg',
			img2: '../web/res/img/pv/dw/dw2.jpg'
		};
		populateModal(obj);
		fadeInModal();
	});
});
