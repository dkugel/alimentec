<?php          
	$name = isset($_POST['name'])? $_POST['name'] : NULL;
	$email = isset($_POST['email'])? $_POST['email'] : NULL;
    $message = isset($_POST['message'])? $_POST['message'] : NULL;
    
    

    $para = 'd.zuleta@koelnmesse.co';
    $titulo = 'Nuevo contacto Web';
    $header = 'From: ' .$email;    
    $cuerpo  = "Nombre: $name\n";
    $cuerpo .= "E-Mail: $email\n";      
    $cuerpo .= "Mensaje: $message\n";
    //$cuerpo .= "Código: $captcha\n";
	
				
    if ( ($_POST['name2'] != "")){
        // Es un SPAMbot
        echo "<script language='javascript'>
            alert('Eres un bot, intenta nuevamente.');
            window.history.back();
            </script>";

    } else {
        // Es un usuario real, proceder a enviar el formulario.
        if (mail($para, $titulo, $cuerpo, $header)) {
            echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
            window.history.back();
            </script>";
            }
        else {
            echo 'Falló el envio';
        }			
    }						

	