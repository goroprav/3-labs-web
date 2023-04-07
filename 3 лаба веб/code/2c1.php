<?php
session_start();

if (!empty($_GET)) {
    $_SESSION['ar'] = $_GET;
}

?>

<form action="" method="GET">
 <label for = "name">Surname</label>
    <input name="name">
    <label for = "sername">Surname</label>
	<input name="sername">
    <label for = "age">Age</label>
    <input name="age">
    <label for = "work">Work</label>
    <input name="work">
	<input type="submit">   

</form>