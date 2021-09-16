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
   <div class="alert alert-warning" role="alert">
   <center><b>Panel Strat</b> </br> Zalogowano jako : <b> <?php Util::display($username); ?>  </b>
</center>
   </div>
</div>
<div class="container-fluid">
<a href="/dashboard/index"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
      <div class="row">
        <div class="col">
          <div class="card">
        
            <div class="card-body">
            <a class="noDecoration" href="zcafe/" style="text-decoration:none;">
                <center>
              <h5 class="card-title">Żabka Cafe</h5>
              <h6 class="card-subtitle mb-2 text-muted"></p>
              <img src="<?= SUB_DIR ?>/assets/img/hotdog.png" style="max-width:249px;"></img>
</center>
</a>
            </div>
          </div>
        </div>
        

        <div class="col">
          <div class="card">
            <div class="card-body">
            <a class="noDecoration" href="pieczywo/" style="text-decoration:none;">
            <center>
              <h5 class="card-title">Pieczywo</h5>
              <h6 class="card-subtitle mb-2 text-muted"></p>
              <img src="<?= SUB_DIR ?>/assets/img/bulka.png" style="max-width:249px; max-height:151px;"></img>
</center>
</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="card-body">
            <a class="noDecoration" href="wio/" style="text-decoration:none;">
            <center>
              <h5 class="card-title">Warzywa i Owoce</h5>
              <h6 class="card-subtitle mb-2 text-muted"></p>
              <img src="<?= SUB_DIR ?>/assets/img/jablko.png" style="max-width:249px; max-height:151px;"></img>
                </a>
</center>
            </div>
          </div>
        </div>
    </div>
</div>