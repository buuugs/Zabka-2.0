<?php
   require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   $user = new UserController;
   $grafik = New Grafik;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    
    $grafik->DrawInfo();  
    $grafik->DrawDays();
    
  
}
   $username = Session::get("username");
   
   Util::head($username);
   Util::navbar();
   
   ?>
<div class="container-fluid">
   <div class="row">
      <div class="col">
         <div class="card">
            <form method="POST" id="grafikmies" action="">
</br>
               <select onchange="SubmitForm('grafikmies');" name="miesiac" id="formobject">
               <?php
                  $grafik->DrawInput();
                  ?>
               </select>
               <!-- <input type="submit" style="display: none;" value="Zatwierdź" name="submit" class="login-button"/> -->
            </form>
            <h5 class="card-title">&nbsp;Grafik pracowników na miesiąc : <b>
               <?php 
                  $grafik->DrawInfo();  
                ?>
                </b>
            </h5>
            <div class="card-body" style="overflow-y: scroll; max-height:320px;">
               <table class="table" >
                  <thead>
                     <tr>
                        <th scope="col">Dzień</th>
                        <?php
                           $grafik->Draw("Z8854");
                           
                           $grafik->DrawDays();
                           
                        ?>
                     </tr>
                  </thead>
                  <tbody >
                      <?php
                      $grafik->DrawCalendar();
                      ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>