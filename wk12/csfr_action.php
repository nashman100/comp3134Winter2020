
<form method='post'>
<label>Username</label><br>
<input type='text' name='user'><br>
<label>Password</label><br>
<input type='password' name='pass'><br>
<input type='submit'>
</form>

<?php
session_start();

if(isset($_SESSION['confirmation']) and isset($_POST['confirmation']) and $_SESSION["confirmation"] ==$
if(isset($_POST['user'])) {
if($_POST['user']=='host' && $_POST['pass']=='pass') { ?>
                <div>Login Successful :)</div><br>
<?php } elseif ($_POST['user']!='host' && $_POST['pass']!='pass') { ?>
                <div>Login Unsuccessful :(</div><br>
<?php }}}
?>

