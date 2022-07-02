<?php
/*require_once('main.php');*/

$connection = new PDO('mysql:host=0.0.0.0;dbname=wooddocu_db', "root", "root");

$hola='yayacambieladirexion';

// Utilizar la conexión aquí
$save_datas = $connection;
$save_datas = $save_datas->query("INSERT INTO admin_table(ip,url,title,text) VALUES ('titulo','$hola')");

// Ya se ha terminado; se cierra
/*$save_datas = null;*/
$save_datas = null;
$connection = null;

/*function connection(){
$pdo = new PDO('mysql:host=0.0.0.0;dbname = wooddocu_db', 'root' , 'root');
    return $pdo;
}*/
/*$hola="nicolas gonzalez";
$mysqli = connection();
$mysqli = $mysqli->query("INSERT INTO send_test(nombre) VALUES ('$hola')");*/

/*$mysqli = new mysqli("0.0.0.0", "root", "root", "wooddocu_db");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}*/

/* Sentencia no preparada */
/*if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
    echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
}*/
/*$hola='nicolas';
$mysqli="";

$pdo->query("INSERT INTO send_test(nombre) VALUES ('s',$hola)");*/
/* Sentencia preparada, etapa 1: preparación */
/*if (!($sentencia = $mysqli->prepare("INSERT INTO send_test(nombre) VALUES (?)"))) {
    echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
}*/

/* Sentencia preparada, etapa 2: vincular y ejecutar */
/*$nombre= "yayaya";
if (!$sentencia->bind_param($nombre)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}*/

/*if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
}*/





/*$mysqli = new mysqli("0.0.0.0", "root", "root", "wooddocu_db");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
*)
/* Sentencia no preparada */
/*if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
    echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
}*/

/* Sentencia preparada, etapa 1: preparación */
/*if (!($sentencia = $mysqli->prepare("INSERT INTO send_test(nombre,email,fecha_reg,title) VALUES (?,?,?,?)"))) {
     echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
}*/

/* Sentencia preparada, etapa 2: vinculación y ejecución */
/*$id = 1;
$nombre= $_POST['name'];
$email= $_POST['email'];
$fecha_reg= date("d/m/y");
$title= "muebles";
echo $nombre, $email, $fecha_reg, $title;
if (!$sentencia->bind_param("i", $nombre, $email, $fecha_reg, $title)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}

if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
}*/

/*$mysqli = new mysqli("ejemplo.com", "usuario", "contraseña", "basedatos");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}*/

/*if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    /*$consulta = "INSERT INTO send_test(title) VALUES ('ahora si')";
	    $resultado = mysqli_query($conex, $consulta);*/
	   /* $conex = connection();
        $conex = $conex ->query("INSERT INTO send_test(title) VALUES('yaya')");

	    if ($conex){
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}*/


/*$connection = mysqli_connect("0.0.0.0","root","root","wooddocu_db");*/

/*if ($connection) {
   echo "is connected";
    }
var_dump($connection);*/

/*$data_1=$_POST['input_send_test'];


$query= "INSERT INTO send_test(title) VALUES ($data_1)";
$result=mysqli_query($connection, $query);

echo $result;*/

/*$saving_data=connection();
    $saving_data=$saving_data->prepare("INSERT INTO admin_table(title,) VALUES(:data_1)");

    $markers=[
        ":data_1"=>$data_1];

    $saving_data->execute($markers);

    if($saving_data->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡PRODUCTO REGISTRADO!</strong><br>
                El producto se registro con exito
            </div>';
    }else{

    	/*if(is_file($img_dir.$foto)){
			chmod($img_dir.$foto, 0777);
			unlink($img_dir.$foto);
        }*/

       /* echo '<div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar el producto, por favor intente nuevamente
            </div>';
        var_dump($saving_data, $title, $text);
    }
    $saving_data=null;*/

?>