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
        for ($x = 1; $x <= date('t'); $x++) {
              echo "<tr>";
              echo '<th scope="row">' . $x . '</th>';
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
                echo ' <option value="'. $m_pol[$m] . '" id="'. $m_pol[$m] . '">' . $m_pol[$m] . '</option>';

            }
        else{   
                echo ' <option value="'. $m_pol[$m] . '" id="'. $m_pol[$m] . '">' . $m_pol[$m] . '</option>';
            }
        }

    }
}
