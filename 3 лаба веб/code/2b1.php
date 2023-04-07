<?php
session_start();

if (!empty($_GET)) {
$_SESSION['name'] = $_GET['name'];
$_SESSION['sername'] = $_GET['sername'];
$_SESSION['age'] = $_GET['age'];
}

?>

<form action="" method="GET">
<label for = "name">Name</label>
    <input name="name" required>
    <label for = "sername">Surname</label>
	<input name="sername" required>
    <label for = "age">Age</label>
    <input name="age" required>
	<input type="submit">
  

</form>