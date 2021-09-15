<?php
include 'application/require.php';
require_once 'application/controller/user.php';
$user = new UserController;

Session::init();

 if (Session::isLogged()) { Util::redirect('index/'); }
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    
    $user->loginUser($_POST); 
  
}

Util::head('Login');
Util::navbar();

?>
</br>
<center>
<div id="panel">
	<form method="POST" action="">

      <br>

      <label for="username">Nazwa użytkownikaaa:</label>

      <br>

      <input type="text" id="formobject" name="username" placeholder="Login" autofocus="true"/>



      <label for="password">Hasło:</label>

      <input type="password" id="formobject" name="password" placeholder="Haslo"/></br>

      
         <input type="submit" value="Login" name="submit" class="login-button"/>
		 <br/>
		 <br/>
      
   </form>
</div>

<?php Util::footer(); ?>