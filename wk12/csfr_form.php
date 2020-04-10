<?php
session_start();
$_SESSION["confirmation"] = rand(0,1000);
?>

<html>
<body>
<form method="POST" action="csfr_action.php">
<input type="text" name= "user" value="host"/>
<input type="password" name="pass" value="pass"/>
<input type="submit" name="submit" id="submit"/>
<input type=hidden name=confirmation value=<?php echo $_SESSION['confirmation']?>>

</body>
</html>
