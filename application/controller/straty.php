<?php


class Straty extends Controller
{
    public function index()
    {
        require 'application/views/straty/index.php';
    }
    public function zcafe()
    {
        require 'application/views/straty/cafe.php';
    }
    public function pieczywo()
    {
        require 'application/views/straty/pieczywo.php';
    }
    public function wio()
    {
        require 'application/views/straty/wio.php';
    }


    public function add($data, $items)
    {
        //////////////////////////////////////////////////////////////////////////////////////////////
        if ($items === "cafe")
        {
        $txt = "";
        foreach ($_POST as $key => $value) {

            if ($value == ""){
            
                 continue;
            }   
            if ($key != "sklep" && $key != "submit"){
            
                 $txt = $txt . PHP_EOL . htmlspecialchars($key).": ".htmlspecialchars($value) . PHP_EOL;
            }
        }
  $select1 = "Z8854";
  $path = "";
  switch ($select1) {
   case $select1:
       $path = ("magazyn/". $select1 . "/" . "zabka-cafe/");
       break;
   case '':
    $path = "";
       break;
}
if (!file_exists($path)) {
mkdir($path, 0777, true);
}
  
   $uchwyt = fopen($path . date('d-m-Y'). '.txt', "a");
$zawartosc = (PHP_EOL . "Dodane przez : " . $_SESSION['username'] . " o godzinie ".  date('H:i:s') . PHP_EOL . PHP_EOL . $txt . PHP_EOL . "---------------------------------------------------------------------------" . PHP_EOL . "");
$key = "%^ZABKA-ROGI-AG1245%";
// function fnEncrypt($sValue, $sSecretKey)
// {
//     return rtrim(
//         base64_encode(
//             mcrypt_encrypt(
//                 MCRYPT_RIJNDAEL_256,
//                 $sSecretKey, $sValue, 
//                 MCRYPT_MODE_ECB, 
//                 mcrypt_create_iv(
//                     mcrypt_get_iv_size(
//                         MCRYPT_RIJNDAEL_256, 
//                         MCRYPT_MODE_ECB
//                     ), 
//                     MCRYPT_RAND)
//                 )
//             ), "\0"
//         );
// }
  

// $zaw = fnEncrypt($zawartosc, $key);
$zaw = ($zawartosc);
if (fwrite($uchwyt, $zaw))
{
    echo '<script>alert("[System]: Dodano starty prawidłowo.")</script>';
}
else{
    echo '<script>alert("[System]: Wystąpił błąd. Spróbuj ponownie.")</script>';
}



        }
        //////////////////////////////////////////////////////////////////////////////////////////////
        else if ($items === "pieczywo")
        {
        $txt = "";
        foreach ($_POST as $key => $value) {

            if ($value == ""){
            
                 continue;
            }   
            if ($key != "sklep" && $key != "submit"){
            
                 $txt = $txt . PHP_EOL . htmlspecialchars($key).": ".htmlspecialchars($value) . PHP_EOL;
            }
        }
  $select1 = "Z8854";
  $path = "";
  switch ($select1) {
   case $select1:
        $path = ("magazyn/". $select1 . "/" . "pieczywo/");
       break;
   case '':
    $path = "";
       break;
}
if (!file_exists($path)) {
mkdir($path, 0777, true);
}
  
   $uchwyt = fopen($path . date('d-m-Y'). '.txt', "a");
$zawartosc = (PHP_EOL . "Dodane przez : " . $_SESSION['username'] . " o godzinie ".  date('H:i:s') . PHP_EOL . PHP_EOL . $txt . PHP_EOL . "---------------------------------------------------------------------------" . PHP_EOL . "");
$key = "%^ZABKA-ROGI-AG1245%";
// function fnEncrypt($sValue, $sSecretKey)
// {
//     return rtrim(
//         base64_encode(
//             mcrypt_encrypt(
//                 MCRYPT_RIJNDAEL_256,
//                 $sSecretKey, $sValue, 
//                 MCRYPT_MODE_ECB, 
//                 mcrypt_create_iv(
//                     mcrypt_get_iv_size(
//                         MCRYPT_RIJNDAEL_256, 
//                         MCRYPT_MODE_ECB
//                     ), 
//                     MCRYPT_RAND)
//                 )
//             ), "\0"
//         );
// }
  

// $zaw = fnEncrypt($zawartosc, $key);
$zaw = ($zawartosc);
if (fwrite($uchwyt, $zaw))
{
    echo '<script>alert("[System]: Dodano starty prawidłowo.")</script>';
}
else{
    echo '<script>alert("[System]: Wystąpił błąd. Spróbuj ponownie.")</script>';
}



        }
        //////////////////////////////////////////////////////////////////////////////////////////////
        else if ($items === "wio")
        {
        $txt = "";
        foreach ($_POST as $key => $value) {

            if ($value == ""){
            
                 continue;
            }   
            if ($key != "sklep" && $key != "submit"){
            
                 $txt = $txt . PHP_EOL . htmlspecialchars($key).": ".htmlspecialchars($value) . PHP_EOL;
            }
        }
  $select1 = "Z8854";
  $path = "";
  switch ($select1) {
   case $select1:
    $path = ("magazyn/". $select1 . "/" . "warzywa-owoce/");
       break;
   case '':
    $path = "";
       break;
}
if (!file_exists($path)) {
mkdir($path, 0777, true);
}
  
   $uchwyt = fopen($path . date('d-m-Y'). '.txt', "a");
$zawartosc = (PHP_EOL . "Dodane przez : " . $_SESSION['username'] . " o godzinie ".  date('H:i:s') . PHP_EOL . PHP_EOL . $txt . PHP_EOL . "---------------------------------------------------------------------------" . PHP_EOL . "");
$key = "%^ZABKA-ROGI-AG1245%";
// function fnEncrypt($sValue, $sSecretKey)
// {
//     return rtrim(
//         base64_encode(
//             mcrypt_encrypt(
//                 MCRYPT_RIJNDAEL_256,
//                 $sSecretKey, $sValue, 
//                 MCRYPT_MODE_ECB, 
//                 mcrypt_create_iv(
//                     mcrypt_get_iv_size(
//                         MCRYPT_RIJNDAEL_256, 
//                         MCRYPT_MODE_ECB
//                     ), 
//                     MCRYPT_RAND)
//                 )
//             ), "\0"
//         );
// }
  

// $zaw = fnEncrypt($zawartosc, $key);
$zaw = ($zawartosc);
if (fwrite($uchwyt, $zaw))
{
    echo '<script>alert("[System]: Dodano starty prawidłowo.")</script>';
}
else{
    echo '<script>alert("[System]: Wystąpił błąd. Spróbuj ponownie.")</script>';
}
        }
        else
        {
            echo '<script>alert("[System]: Wystąpił błąd. Spróbuj ponownie.")</script>';
        }
    }
}
