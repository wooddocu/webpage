<?php
// database connection #
function connection(){
    $pdo = new PDO('mysql:host=0.0.0.0;dbname=wooddocu_db', "root", "root");
    return $pdo;
    }    
// verify_data #
function verify_character($filter,$string){
    if (preg_match("/^".$filter."$/", $string)) {
        return false;
    }else {
        return true;
    }
}


/*$name = "Nicolas";

if (verify_data("[a-zA-Z]{5,10}",$name)) {
    echo "characters are not allowed";
}*/
/*$str = "VisitWSchools7";
$pattern = "/^[a-zA-Z]{10,13}$/";

echo preg_match($pattern,$str);
echo "<br>"."funciona"; */


	# Limpiar cadenas de texto #
	function clean_inputs_strings($string){
		$string=trim($string);
		$string=stripslashes($string);
		$string=str_ireplace("<script>", "", $string);
		$string=str_ireplace("</script>", "", $string);
		$string=str_ireplace("<script src", "", $string);
		$string=str_ireplace("<script type=", "", $string);
		$string=str_ireplace("SELECT * FROM", "", $string);
		$string=str_ireplace("DELETE FROM", "", $string);
		$string=str_ireplace("INSERT INTO", "", $string);
		$string=str_ireplace("DROP TABLE", "", $string);
		$string=str_ireplace("DROP DATABASE", "", $string);
		$string=str_ireplace("TRUNCATE TABLE", "", $string);
		$string=str_ireplace("SHOW TABLES;", "", $string);
		$string=str_ireplace("SHOW DATABASES;", "", $string);
		$string=str_ireplace("<?php", "", $string);
		$string=str_ireplace("?>", "", $string);
		$string=str_ireplace("--", "", $string);
		$string=str_ireplace("^", "", $string);
		$string=str_ireplace("<", "", $string);
		$string=str_ireplace("[", "", $string);
		$string=str_ireplace("]", "", $string);
		$string=str_ireplace("==", "", $string);
		$string=str_ireplace(";", "", $string);
		$string=str_ireplace("::", "", $string);
		$string=trim($string);
		$string=stripslashes($string);
		return $string;
	}
/*$name= "<script>Nicolas</script>";
  
  echo limpiar_cadena($name);*/

	# Funcion renombrar fotos #
	function renombrar_fotos($name){
		$name=str_ireplace(" ", "_", $name);
		$name=str_ireplace("/", "_", $name);
		$name=str_ireplace("#", "_", $name);
		$name=str_ireplace("-", "_", $name);
		$name=str_ireplace("$", "_", $name);
		$name=str_ireplace(".", "_", $name);
		$name=str_ireplace(",", "_", $name);
		$name=$name."_".rand(0,100);
		return $name;
	}
/*-------------------usuer-------------------*/

//clock
$time = date("G:i:s A l j F Y");
$timedata = "<br><input type='text' class='timedata' id='date' name='timedata' value=''/>
<script>
const week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
let d = new Date();
document.getElementById('date').value =d.getMonth()+'-'+d.getDate()+'-'+d.getFullYear()+' '+week[d.getDay()] +' '+d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
</script>";
echo $timedata;
$d_2 = '';
$Object = new DateTime();  
$Object->setTimezone(new DateTimeZone('America/Santiago'));
$DateAndTime = $Object->format("H:i:s a");  
echo $DateAndTime."\n";

//location
//Function to get the user IP address
function getUserIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ipaddress=getUserIP();
echo "<br>"."<pre>",print_r($ipaddress),"</pre>";

$start = microtime(true);
for ($i = 0; $i < 100000; $i++) {
//186.174.45.227
   
// IP address 
$userIP = '186.11.81.169'; 
 
// API end URL 
$apiURL = 'http://ip-api.com/json/'.$userIP; 
 
// Create a new cURL resource with URL 
$ch = curl_init($apiURL); 
 
// Return response instead of outputting 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
 
// Execute API request 
$apiResponse = curl_exec($ch); 
 
// Close cURL resource 
curl_close($ch); 
 
// Retrieve IP data from API response 
$ipData = json_decode($apiResponse, true);
}
$end = microtime(true);
$time = $end-$start;
echo "<br/>execute time {$time}".$number;
var_dump($number);

echo $ipData;
var_dump("<pre>",$ipData,"</pre>");
echo "<pre>",print_r($ipData),"</pre>";

$tiempo_inicial = microtime(true);
for($i = 0;$i < 100000000; $i++) {
		//
	}
$tiempo_final = microtime(true);
$tiempo = $tiempo_final - $tiempo_inicial;
	
echo "<br/>El tiempo de ejecución del archivo ha sido de " . $tiempo . " segundos";

$end_time = microtime(true);
$duration = $end_time - $start_time;
$hours = (int)($duration/60/60);
$minutes = (int)($duration/60)-$hours*60;
$seconds = (int)$duration-$hours*60*60-$minutes*60; 
echo "<br/>Tiempo empleado para cargar esta pagina: <strong>" . $hours.' horas, '.$minutes.' minutos y '.$seconds.' segundos.</strong>';



    

    

/*$map="<button onclick='process()'>getlocation</button>
<span id='map'></span>
<script>
function process(){
navigator.geolocation.getCurrentPosition(display);}
function display(position){
var map = document.getElementById('map');
map.innerHTML = position.coords.latitude + position.coords.longitude;}
</script>";
echo $map;*/
/*echo $coma = "";
echo "<br>".$time;
$date_2="<br><span id='date_2'></span><script>
const week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
const date_2 = new Date();
document.getElementById('date_2').innerHTML=week[date_2.getDay()] + ', ' + date_2.getMonth()+'-'+date_2.getDate()+'-'+date_2.getFullYear();
</script>";
echo $date_2;*/
/*$moneyplata= "money mucha money y mucha plata";
   echo renombrar_fotos($moneyplata);*/
/*	# Funcion paginador de tablas #
	function paginador_tablas($pagina,$Npaginas,$url,$botones){
		$tabla='<nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">';

		if($pagina<=1){
			$tabla.='
			<a class="pagination-previous is-disabled" disabled >Anterior</a>
			<ul class="pagination-list">';
		}else{
			$tabla.='
			<a class="pagination-previous" href="'.$url.($pagina-1).'" >Anterior</a>
			<ul class="pagination-list">
				<li><a class="pagination-link" href="'.$url.'1">1</a></li>
				<li><span class="pagination-ellipsis">&hellip;</span></li>
			';
		}

		$ci=0;
		for($i=$pagina; $i<=$Npaginas; $i++){
			if($ci>=$botones){
				break;
			}
			if($pagina==$i){
				$tabla.='<li><a class="pagination-link is-current" href="'.$url.$i.'">'.$i.'</a></li>';
			}else{
				$tabla.='<li><a class="pagination-link" href="'.$url.$i.'">'.$i.'</a></li>';
			}
			$ci++;
		}

		if($pagina==$Npaginas){
			$tabla.='
			</ul>
			<a class="pagination-next is-disabled" disabled >Siguiente</a>
			';
		}else{
			$tabla.='
				<li><span class="pagination-ellipsis">&hellip;</span></li>
				<li><a class="pagination-link" href="'.$url.$Npaginas.'">'.$Npaginas.'</a></li>
			</ul>
			<a class="pagination-next" href="'.$url.($pagina+1).'" >Siguiente</a>
			';
		}

		$tabla.='</nav>';
		return $tabla;
	} */