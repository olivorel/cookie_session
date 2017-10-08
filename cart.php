<?php
session_start();

if (empty($_SESSION['loginname'])) {
    header('Location: http://127.0.0.1:8000/login.php');
    exit;
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <?php
            $addarticlecart = false;

            if ($_COOKIE['cookie1']) {
                echo $_COOKIE['cookie1'] . '<br/><br/>';
                $addarticlecart = true;
            }
            if ($_COOKIE['cookie2']) {
                echo $_COOKIE['cookie2'] . '<br/><br/>';
                $addarticlecart = true;
            }
            if ($_COOKIE['cookie3']) {
                echo $_COOKIE['cookie3'] . '<br/><br/>';
                $addarticlecart = true;
            }
            if ($_COOKIE['cookie4']) {
                echo $_COOKIE['cookie4'] . '<br/><br/>';
                $addarticlecart = true;
            }
            ?>
            <?php

            require 'inc/head.php';

            ?>

            <?php
            if ($addarticlecart == true) {
                ?>

                <form method="POST" action="clear_basket.php">
                    <input type="submit" value="Vider le panier" class="btn btn-danger">

            <?php } ?>
            <form method="POST" action="index.php">
                <input type="submit" value="Retour page d'accueil" class="btn btn-info">
            </form>
        </div>
    </div>
</section>


<?php require 'inc/foot.php'; ?>
