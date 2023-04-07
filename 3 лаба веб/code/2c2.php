<?php

session_start();
if (!empty($_SESSION)) {


}

?>

<ul>
   
    <?php foreach ($_SESSION['ar'] as $s): ?>
        <li><?php echo $s; ?></li>
    <?php endforeach; ?>
</ul>