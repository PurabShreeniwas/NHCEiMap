function precarica( img ) {
			$( img ).each( function () {
				$( '<img/>' )[ 0 ].src = this;
			});
		}
		
				
	/*******jQuery for external title*********/
				
		jQuery(document).ready(function () {
			$('.title-o').mouseout(function(){
				$("#map").attr('src', 'o.png');
			}),
			$('.title-t').mouseover( function(){
				$("#map").attr('src', 'temple.png');
			});
			$('.title-red').mouseout(function(){
				$("#map").attr('src', 'bank.png');
			}),
			$('.title-red').mouseover( function(){
				$("#map").attr('src', 'eee.png');
			});
			$('.title-green').mouseout(function(){
				$("#map").attr('src', 'mba.png');
			}),
			$('.title-green').mouseover( function(){
				$("#map").attr('src', 'cse.png');
			});	
			$('.title-yellow').mouseout(function(){
				$("#map").attr('src', 'IS.png');
			}),
			$('.title-yellow').mouseover( function(){
				$("#map").attr('src', 'hostel.png');
			});
			$('.title-pink').mouseout(function(){
				$("#map").attr('src', 'tango.png');
			}),
			$('.title-pink').mouseover( function(){
				$("#map").attr('src', 'library.png');
                        });
                        $('.title-pink').mouseover( function(){
				$("#map").attr('src', 'temple.png');

			});	
			});	
		});			