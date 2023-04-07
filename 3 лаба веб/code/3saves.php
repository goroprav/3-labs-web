<?php


function redirectToHome():void{
    header('Location: three.php');

    exit();
}

if (false === isset($_POST['email'], $_POST['title'], $_POST['description'])){
  
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];
$em = $_POST['email'];


$dir = "categories/{$category}/{$em}";
if (is_dir($dir)){
    $filePath = "categories/{$category}/{$em}/{$title}.txt";
} else{
    $folder = "categories/{$category}/{$em}";
    $result = mkdir($folder); 
    
    $filePath = "categories/{$category}/{$em}/{$title}.txt";
}


if (false ===  file_put_contents($filePath, $desc)){
    throw new Exception('Something went wrong');
}
chmod($filePath, 0777);
redirectToHome();