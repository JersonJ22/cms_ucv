//$('.ui.modal').modal('attach events', '.button.test', 'show');
//Menu Responsive
$(document).ready(menu);

var contador = 1;
function menu(){
	$(".sub-menu").on("click",function(){
		if (contador ==1) {
			$('.responsive').animate({
				left: '0'
			});	
			$('.sub-menu > i').removeClass('icon-bar');
			$('.sub-menu > i').addClass('icon-close');
			contador = 0;
		}else{
			contador = 1;
			$('.responsive').animate({
				left: '-100%'
			});	
			$('.sub-menu > i').removeClass('icon-close');
			$('.sub-menu > i').addClass('icon-bar');
		}
	});	
}

$(document).ready(function(){	

	var root = "http://localhost/cms_ucv/";

	//Hacer funcionar menu dropwdown
	$('.ui.dropdown').dropdown();

	$(".btnUserLogin").on("click",function(){
		var email = $(".txtEmailLoginUser").val().trim(),
			pass = $(".txtPassLoginUser").val().trim();	
		//$.post(); //como post	//$.get(); //con la url
		$.ajax({
			type: "POST",
			url: root + "user/controller/user_actions/login.php",
			data: {
				email: email,
				pass: pass
			},
			beforeSend: function(data){
				$(self).addClass("loading");
			},
			success: function(data){
				console.log(data);
				if(data == "true") {
					window.location.href = "http://localhost/cms_ucv/";
				}else{
					swal("Sus credenciales no coinciden", "Por favor intente de nuevo", "info");
				}
			}
		});
	});

	$('.btnRegisterUser').on("click",function(){
		var name = $('.txtNameRegister').val().trim(),
			last_name = $('.txtLastNameRegister').val().trim(),
			user_name = $('.txtUserNameRegister').val().trim(),
			email    = $('.txtEmailRegister').val().trim(),
			pass    = $('.txtPassRegister').val().trim(),
			self	= this; //this hace referencia al boton

		if (name !== "" && last_name !== "" && user_name !== ""  && email !== "" && pass !== "") {
			$.ajax({
				type: "POST",
				url: root + "user/controller/user_actions/register.php",
				data: {
					name: name,
					lastname: last_name,
					username: user_name,
					email: email,
					password: pass
				},
				beforeSend: function(){
					$(self).addClass("loading");
				},
				success: function(data){
					$(self).removeClass("loading");
					if (data > 0) {
						$('.txtNameRegister, .txtLastNameRegister ,.txtUserNameRegister ,.txtEmailRegister ,.txtPassRegister').val("");
						swal("Registrado","Ahora puede iniciar sesion","success");

					}else{
						alert("Error no se puede registrar");
					}
				},
				error: function(){
					$(self).removeClass("loading");
					alert("Error");
				}
			});
		}else{
			swal("Error"," todos los campos deben llenarse", "info");
		}
	});

});
