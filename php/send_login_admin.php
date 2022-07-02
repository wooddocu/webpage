<?php
	/*== Almacenando datos ==*/
    $email=clean_inputs_strings($_POST['login_email']);
    $password=clean_inputs_strings($_POST['login_password']);


    /*== Verificando campos obligatorios ==*/
    if($email=="" || $password==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El USUARIO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verify_character("[a-zA-Z0-9$@.+-]{4,100}",$password)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                Las CLAVE no coinciden con el formato solicitado
            </div>
        ';
        exit();
    }


    $check_user=connection();
    $check_user=$check_user->query("SELECT * FROM users WHERE email ='$email'");
    if($check_user->rowCount()==1){

    	$check_user=$check_user->fetch();
    	echo "already make the fetch";

    	if($check_user['email']==$email &&  $check_user['password']==$password){

    		$_SESSION['id']=$check_user['id'];
    		/*$_SESSION['nombre']=$check_user['usuario_nombre'];
    		$_SESSION['apellido']=$check_user['usuario_apellido'];*/
    		$_SESSION['email']=$check_user['email'];

    		if(headers_sent()){
				echo "<script> window.location.href='./admin.php?view=home'; </script>";
			}else{
				header("Location: ./admin.php?view=home");
			}

    	}else{
    		echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado 1!</strong><br>
	                Usuario o clave incorrectos
	            </div>
	        ';
    	}
    }else{
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                Usuario o clave incorrectos
            </div>
        ';
    }
    $check_user=null;