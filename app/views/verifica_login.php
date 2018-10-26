<?php

session_start();
 if(!$_SESSION['usuario']) {

    header('Location: loginT.php');

    exit();
}