<?php
require_once "connect-clean-track.php";

/*------cleaning inputs data and saving------*/

/*$images = clean_inputs_strings($_POST[]);*/
$title = clean_inputs_strings($_POST['title']);
$url = clean_inputs_strings($_POST['url']);
$text = clean_inputs_strings($_POST['text']);
$time = date("G:i:s A l j F Y");
echo $time;


/*----------verify required inputs-----------*/

if ($title ==""||$text =="") {
    echo "<div>Must have at least 1 character</div>";
    var_dump($title, $text);
    exit;
}

/*-------checking the character format-------*/

if (verify_character("[a-zA-Z0-9áéíóúÁÉÍÓÚ ().,$#\-\/]{1,125}", $title)) {
    echo '<div>
     We do not read that letter, accepted format (from a to z, from A to Z, from 0 to 9 and áéíóúÁÉÍÓÚ ( ) . , $ # - /)
          </div>';
    exit();
}
if (verify_character("[a-zA-Z0-9áéíóúÁÉÍÓÚ ().,$#\-\/]{1,750}", $text)) {
    echo '<div>
     We do not read that letter, accepted format (from a to z, from A to Z, from 0 to 9 and áéíóúÁÉÍÓÚ ( ) . , $ # - /)
          </div>';
    exit();
}

/*$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
echo "The user IP Address is - ". $ip;*/

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

/*---------------saving data-----------------*/
    /*$saving_data=$connection;*/
    
    $saving_data=connection();
    $saving_data=$saving_data->prepare("INSERT INTO admin_table(datetime,location,ip,url,title,text,image) VALUES(:datetime,:location,:ip,:url,:title,:text,:image)");

    $markers=[
        ":datetime"=>$time,
        ":location"=>'location',
        ":ip"=>$ipaddress,
        ":url"=>'url',
        ":title"=>$title,
        ":text"=>$text,
        ":image"=>'image'
    ];

    $saving_data->execute($markers);

    if($saving_data->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡PRODUCTO REGISTRADO!</strong><br>
                El producto se registro con exito
            </div>';
    }else{

        echo '<div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar el producto, por favor intente nuevamente
            </div>';

    }
    $saving_data=null;
    $connection=null;
//186.174.45.227
    
// IP address 
$userIP = '209.141.60.71'; 
 
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

echo $ipData;
var_dump("<pre>",$ipData,"</pre>");
echo "<pre>",print_r($ipData),"</pre>";


$datetime = "<br>"."<span id='clock'></span>

<script type='text/javascript'>

//<![CDATA[
function doClock(){setTimeout('doClock()',1e3);t=new Date;m=t.getMonth();d=t.getDay();dt=t.getDate();y=t.getFullYear();h=t.getHours();if(h<12){ap='AM'}else{ap='PM';h=h-12}mn=pad(t.getMinutes());s=pad(t.getSeconds());if(h==0){h=12}clockID.innerHTML='Ahora son las: '+h+':'+mn+':'+s+' '+ap}function pad(a){if(a<10){a='0'+a}return a};clockID=document.getElementById('clock');doClock();
window.onload=function(){
doClock();}
//]]>
</script><br>";
 echo $datetime;
 

$valor = $_POST["timedata"];
echo $valor; 
$timedata = "<br>"."<input type='text' class='timedata' id='date' name='timedata' value=''/>
<section id='date'></section>
<script>
let d = new Date();
document.getElementById('date').value =
  'Current time: ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds()</script>";
echo $timedata;
/*var_dump($timedata);*/

/*//  Método 1:
let d = new Date();
document.getElementById("date").innerHTML =
  "<h1>Current time: " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()  + "</h1>"*/

/*// Using Template Strings
  document.getElementById("date").innerHTML =
  `<h1>Current time: ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()} </h1>`*/

$fast="<br><span id='otracosa'>ya</span>
<script type='module'>
        import('./node_modules/npm i @rajesh896/broprint.js/index.js').then((module) => {
            module.getCurrentBrowserFingerPrint().then((fingerprint) => {
                console.log(fingerprint)
                document.getElementById('otracosa').innerHTML=fingerprint;
            })
        })
</script>";
echo $fast;

$printjs="<br><span id='otronoteniaqueser'>yaycomo el otro esto es incoherente</span>
<script>

document.getElementById('otronoteniaqueser').innerHTML='I have changed'

</script>";
echo $printjs;

$pruebaapurate="<br><span id='pruebaapurate'></span>
<br><span id='yapo'></span>
<script>

const fpPromise = import('https://openfpcdn.io/fingerprintjs/v3')
    .then(FingerprintJS => FingerprintJS.load());

fpPromise
    .then(fp => fp.get())
    .then(result => {
      // This is the visitor identifier:
      const visitorId = result.visitorId;
      const visitorFound = result.visitorFound;
      console.log(visitorId)
      document.getElementById('pruebaapurate').innerHTML=visitorId;
      document.getElementById('yapo').innerHTML=visitorFound;
    });
  
</script>";
echo $pruebaapurate;
?>