<form method="GET">
    <input type="text" name="name">
    <input type="submit" value="submit" name="submit">
</form>

<?php

$servername = "localhost";
$username = "nash";
$password = "password";
$myDB = "comp3134";

$connection = new mysqli($servername, $username, $password, $myDB);
$return;

if(isset($_GET['name'])) {
    $searchinput = $_GET['name']
    $sqlquery = "SELECT * FROM ‘users’ WHERE firstname='".$searchinput."' AND active='1'";
    $stmt = $connection->prepare($sqlquery);
    $stmt ->bind_param("s", $searchinput);
    $stmt ->execute();
    $return = $stmt->get_result();
}

if ($return->num_rows > 0) { ?>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Active</th>
    </tr>

<?php

while($row = $return->fetch_assoc()){?>

<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['active'];?></td>
<tr>

<?php}
}
else{
    echo "No Results Found";
}
$connection->close();
?>
