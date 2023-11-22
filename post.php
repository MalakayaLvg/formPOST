<?php

$correctUsername = "oslynx";
$correctPassword = "mdp";
$username = "";
$password = "";

$content = "Entrer the right username and password to unlock the secret of life";


$username = $_POST["username"];

$password = $_POST["password"];


if($username == $correctUsername & $password == $correctPassword){
    $content = "le sens de la vie c'est ver de terre";
} elseif ($username == $correctUsername & $password != $correctPassword){
    $content = "incorrect password";
} elseif ($username != $correctUsername & $password == $correctPassword){
    $content = "incorrect username";
}








