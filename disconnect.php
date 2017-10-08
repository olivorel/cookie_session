<?php
session_start();
session_destroy();

if(!empty($_SESSION['loginname'])){
    header('Location: login.php');
    exit();
}