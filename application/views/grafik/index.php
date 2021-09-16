<?php
     require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   $user = new UserController;
   $grafik = New Grafik;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   
   $username = Session::get("username");
   
   Util::head($username);
   Util::navbar();
   
   ?>
<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">




          <form method="get" id="grafikmies" action="">

<select onchange="SubmitForm('grafikmies');" name="miesiac" id="month" class="hbulki" id="hbulki">
<?php
     $grafik->DrawInput();
?>
</select>
<input type="submit" style="display: none;" value="Zatwierdź" name="submit" class="login-button"/>

</form>



          <h5 class="card-title">&nbsp;Grafik pracowników na miesiąc : <b>
            <?php if (isset($_GET['miesiac'])) {
            echo $_GET['miesiac']; 
          }
            else {
              echo "Wybierz miesiąc !";
              } 
              
              ?></b></h5>
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


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>