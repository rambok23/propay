// LOGIN SCRIPT

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
	});



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

// CREDIT CARD INFO

	$(document).ready(function(){

		var signup = $('#credit');

		$('#sub').click(function(){

			$.ajax({

				url: 'pay.php',
				type: 'post',
				data: $("#credit input").serialize(),

				success: function(data){
					console.log(data);
				}


			});
		});
	});