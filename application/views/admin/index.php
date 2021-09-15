<?php
   require_once 'application/require.php';
   require_once 'application/controller/user.php';
   include_once 'application/simple_html_dom.php';
   $user = new UserController;
   Session::init();
   
   if (!Session::isLogged()) { Util::redirect('/dashboard/login'); }
   if (!Session::isAdmin()) { Util::redirect('/dashboard/index'); }
   
   $username = Session::get("username");
   
   Util::head($username);
   Util::navbar();
   
   ?>
   <div class="col-12 mt-3 mb-2">
   <div class="alert alert-success" role="alert">
  
      <center><b>Panel Kierownika</b> </br> Zalogowano jako : <b> <?php Util::display($username); ?>  </b>
</center>
   </div>
</div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <a href="grafik_m.php">
            <center>
              <h5 class="card-title">Ustal Grafik</h5>
              <img src="<?= SUB_DIR ?>/assets/img/calendar.png" style="max-width:249px; max-height:151px;"></img>
</center>
</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <center>
                <a href="straty.php">
              <h5 class="card-title">Sprawdź straty</h5>
              <img src="<?= SUB_DIR ?>/assets/img/trash.png" style="max-width:249px; max-height:151px;"></img>
</a>
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
                <a href="bazy.php">
              <h5 class="card-title">Zarządzanie systemem strat</h5>
              <img src="<?= SUB_DIR ?>/assets/img/sett.png" style="max-width:249px; max-height:151px;"></img>
</a>
</center>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <center>
                <a href="dodaj_p.php">
              <h5 class="card-title">Pracownicy</h5>
              <img src="<?= SUB_DIR ?>/assets/img/sett.png" style="max-width:249px; max-height:151px;"></img>
</a>
</center>
            </div>
          </div>
        </div>
      </div>
    </div>
