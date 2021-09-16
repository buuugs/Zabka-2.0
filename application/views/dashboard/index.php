<?php
   require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   $user = new UserController;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   
   $username = Session::get("username");
   
   Util::head($username);
   Util::navbar();
   
   ?>
<div class="col-12 mt-3 mb-2">
   <div class="alert alert-primary" role="alert">
      <center>Witaj ponownie, <a href="/profile.php"><b><?php Util::display($username)?></b></a><?php if(Session::isAdmin()) {echo "<br />*Zalogowałeś/aś się z uprawnieniami kierownika*";} ?>.
</center>
   </div>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col">
         <div class="card">
            <div class="card-body">
               <center>
                  <a href="grafik.php">
                     <h5 class="card-title">Grafik</h5>
                     <h6 class="card-subtitle mb-2 text-muted">
                     </p>
                     <img src="<?= SUB_DIR ?>/assets/img/calendar.png" style="max-width:249px; max-height:151px;"></img></br></br>
                  <a href="grafik.php" class="card-link">Sprawdź grafik pracowników <br></a></a>
               </center>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card">
            <div class="card-body">
               <center>
                  <a href="/straty/index">
                     <h5 class="card-title">Straty</h5>
                     <h6 class="card-subtitle mb-2 text-muted">
                     </p>
                     <img src="<?= SUB_DIR ?>/assets/img/trash.png" style="max-width:249px; max-height:151px;"></img></br></br>
                  Dodaj starty do systemu</a>
               </center>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="card">
            <div class="card-body">
               <center>
                  <?php
                     //   $searchfor = "";
                     //   $contents = $_SESSION['sklepy'];
                       
                     //   $pattern = preg_quote($searchfor, '/');
                       
                     //   $pattern = "/^.*$pattern.*\$/m";
                     //   $sklepinfo = "";
                     //   if (preg_match_all($pattern, $contents, $matches))
                     //   {
                       
                     //       $variable = implode("\n", $matches[0]);
                     //       $position = strpos($variable, ' - Z');
                       
                     //       $sklepinfo = substr($variable, $position + 4);
                     //   }
                     //   $sklepinfo = "8854";
                     //   echo '<h5 class="card-title" style="height:20px;">Sklep: Z' . $sklepinfo . '</h5>';
                     //   echo '</br>';
                       
                     //   $html = file_get_html("https://www.zabka.pl/znajdz-sklep/sklep/ID0" . $sklepinfo);
                     //   $classname = 'locator-details__title';
                     //   echo $html->find("address[class=text -lead]", 0);
                     //   echo $html->find("p[class=text]", 0);
                       ?>
               </center>
            </div>
         </div>
      </div>
   </div>
</div>
<?php Util::footer(); ?>