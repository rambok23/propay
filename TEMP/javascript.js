/*// LOGIN SCRIPT

	$(document).ready(function(){

		var form = $('#myform');

		$('#submit').click(function(){

			$.ajax({

				url: 'recharge.php',
				type: 'post',
				data: $("#myform input").serialize(),

				success: function(data){
					console.log(data);
				}


			});
		});
	}); */



// SIGNUP SCRIPT
	
	$(document).ready(function(){

		var signup = $('#signupform');

		$('#submit1').click(function(){

			$.ajax({

				url: 'recharge.php',
				type: 'post',
				data: $("#signupform input").serialize(),

				success: function(data){
					console.log(data);
				}


			});
		});
	});


// Mobile Script

		$(document).ready(function(){

		var mobile = $('#mobileform');

		$('#mobsub').click(function(){

			$.ajax({

				url: 'mobile.php',
				type: 'post',
				data: $("#mobsub input select button").serialize(),

				success: function(data){
					console.log(data);
				}


			});
		});
	});
