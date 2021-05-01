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


	$(".btnAdminLogin").on("click",function(){
		var email = $(".txtEmailLogin").val().trim(),
			pass = $(".txtPassLogin").val().trim();	
		//$.post(); //como post	//$.get(); //con la url
		$.ajax({
			type: "POST",
			url: root + "admin/controller/admin_actions/login.php",
			data: {
				email: email,
				pass: pass
			},
			success: function(data){
				//console.log(data);
				if(data == "true") {
					window.location.href = "http://localhost/cms_ucv/admin/";
				}else{
					$('.txtEmailLogin,.txtPassLogin').val("");
					swal("Sus credenciales no coinciden", "Por favor intente de nuevo", "info");
				}
			}
		});
	});

});



