jQuery(document).ready(function() 
{
	document.getElementById('txtusuario').focus();
	$(document).on('click', '.btnsubmit', function(event) {
		event.preventDefault();
		if (Validar()) 
		{
			var usuario = document.getElementById('txtusuario');
			var clave 	= document.getElementById('txtclave');
			$.ajax({
				url:"controlador/CtrlLogin.php",
				type:"POST",
				data:{usuario:usuario.value,clave:clave.value},
				success:function(sms)
				{	
					console.log(sms);
					if (sms==1) 
					{
						if(window.history.replaceState)
						{
							window.history.replaceState(null, null, window.location.href);
						}
						window.location.href="Vista/";
					}
					else
					{
						if (sms==0) 
						{
							$('#error').text("Usuario o Password Incorrecto. Intente otra vez.");
							$('.mensaje').css('display','block');
							$("#frmLogin")[0].reset();
							usuario.focus();
						}
						else{
							if (sms==2) 
							{
								$('#error').text("Usuario denegado.");
								$('.mensaje').css('display','block');
								$("#frmLogin")[0].reset();
								usuario.focus();
							}
						}
					}
				}
			});
		}
	});
	function Validar()
	{
		var usuario = document.getElementById('txtusuario');
		var clave   = document.getElementById('txtclave');
		if (usuario.value == "") 
		{
			$('#error').text("Ingrese usuario");
			$('.mensaje').css('display','block');
			usuario.focus();
            console.log('ingrese usuario');
			return false;
		}
		else{
			if (clave.value=="") 
			{
				$('#error').text("Ingrese password");
				$('.mensaje').css('display','block');
				clave.focus();
				return false;
			}
		}
		return true;
	}
});