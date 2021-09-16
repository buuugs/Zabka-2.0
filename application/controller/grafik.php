<?php
require_once 'session.php';
require_once dirname(__FILE__, 3) . '/application/models/grafikmodel.php';

class Grafik extends GrafikModel
{
    public function index()
    {
        require 'application/views/grafik/index.php';
    }
    public function Draw($shopname)
    {
        $this->drawUsers($shopname);
    }
    public function strpos_recursive($haystack, $needle, $offset = 0, &$results = array()) {               
        $offset = strpos($haystack, $needle, $offset);
        if($offset === false) {
            return $results;           
        } else {
            $results[] = $offset;
            return $this->strpos_recursive($haystack, $needle, ($offset + 1), $results);
        }
    }
    public function DrawDays()
    {
         if (isset($_POST['miesiac'])) {
        $cal = cal_days_in_month(CAL_GREGORIAN, $_POST['miesiac'] + 1, date("Y")); 
         for ($x = 1; $x <= $cal; $x++) {
            //   echo "<tr>";
            // echo '<th scope="row">' . $x . '</th>';
            
             }
         }
    }
    public function DrawInput()
    {
        $monthNum = date('m');
        $dateObj = DateTime::createFromFormat('!m', $monthNum);
        $monthName = $dateObj->format('F');
        echo ' <option value="main" id="main" selected> Wybierz </option>';
            $m_pol = array("Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien");
            $m_en = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            $workoutSlug = str_replace($m_en, $m_pol, $monthName);
      for ($m = 0; $m <=11; $m++){
            $m_pol = array("Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien");
            echo $workoutSlug;
        if ($workoutSlug == $m_pol[$m]){
                echo ' <option value="'. $m . '" id="'. $m_pol[$m] . '">' . $m_pol[$m] . '</option>';

            }
        else{   
                echo ' <option value="'. $m . '" id="'. $m_pol[$m] . '">' . $m_pol[$m] . '</option>';
            }
        }

    }
    public function DrawInfo()
    {
        $m_pol = array("Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien");
        if (isset($_POST['miesiac'])) {
            echo  $m_pol[$_POST['miesiac']]; 
            }
            else {
              echo "Wybierz miesiąc !";
              } 
    }



    public function DrawCalendar()
    {

        $con = mysqli_connect("localhost","root","","zabka");
$result = mysqli_query($con,'SELECT username FROM `users` WHERE sklepy="1"');

$m_pol = array("Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec", "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien");
if (isset($_POST['miesiac'])) {
  
    $file = 'magazyn/' . "Z8854" . '/' . 'grafik/' . $m_pol[$_POST['miesiac']] . '.txt';
 
  if(!file_exists($file))
  {
    echo "<b>Grafik na ten miesiąc nie został jeszcze ułożony !</b>";
  }
  else{
    $plik = file('magazyn/' . "Z8854" . '/' . 'grafik/' . $m_pol[$_POST['miesiac']] . '.txt');
  }

        }

  

$monthNum = date('m');
$daynum = date('t');
  
$dateObj = DateTime::createFromFormat('!m', $monthNum);

$dateObjm = DateTime::createFromFormat('!t', $daynum);



$monthName = $dateObj->format('F');
$daycount = $dateObjm;


$m_en = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

$workoutSlug = str_replace($m_en, $m_pol, $monthName);
if (isset($_POST['miesiac'])) {
 


function strpos_recursive($haystack, $needle, $offset = 0, &$results = array()) {               
  $offset = strpos($haystack, $needle, $offset);
  if($offset === false) {
      return $results;           
  } else {
      $results[] = $offset;
      return strpos_recursive($haystack, $needle, ($offset + 1), $results);
  }
}
$cal = cal_days_in_month(CAL_GREGORIAN, $_POST['miesiac'] + 1, date("Y")); 
for ($x = 1; $x <= $cal; $x++) {
 
  while($rows = mysqli_fetch_array($result)) {
    
  }
    echo "<tr>";
     echo '<th scope="row">' . $x . '</th>';
    $result = mysqli_query($con,'SELECT username FROM `users` WHERE sklepy="1"');
   
    while($rows = mysqli_fetch_array($result)) {
       

      if (isset($_POST['miesiac'])) {
        
       
$file = 'magazyn/' . "Z8854" . '/' . 'grafik/' . $m_pol[$_POST['miesiac']] . '.txt';
if(file_exists($file))
{
$plik = fopen($file, "r") or exit("Blad!");
}
else
{
    echo "<script>alert('Grafik na ten miesiąc nie został ułożony.');</script>";
    return;
}


$searchfor = $rows[0] . '_' . $x;

if (file_exists($file)) {
 
$zawartosc = "";
  while(!feof($plik))
{
   $linia = fgets($plik);
   $zawartosc .= $linia;
}

  
 
$contents = $zawartosc;

$czy = strpos($contents,  $rows[0] . '_' . $x);

  $searchfor = $rows[0] . '_' . $x;
  
  $contents = file_get_contents($file);
  
  $pattern = preg_quote($searchfor, '/');
  
  $pattern = "/^.*$pattern.*\$/m";
 
 
  $string = $contents;
  $search = $rows[0] . '_' . $x . ":";
  $found = strpos_recursive($string, $search);
  
  if($found) {
      foreach($found as $pos) {
         
          if (substr($string, $pos, (strlen($search) -1 )) == $rows[0] . '_' . $x)
          {
              $magic = substr($string, $pos, (strlen($search) +2 ));
            $position =strpos($magic , ':');
            
          echo '<td class="'. $rows[0] . '_' . $x . '">' . (substr($magic, $position +1)) . '</td>';
      }   
    }

}
else
{
    
}



fclose($plik);


}
}
  }
    echo '</tr>';
}
}




    }
}
