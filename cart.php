<?php


require 'inc/head.php';

if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
    exit;
}
?>


<section class="cookies container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <?php
            $addarticlecart = false;

            if ($_COOKIE['cookie1']) {

                $addarticlecart = true;
                echo $_COOKIE['cookie1'] . '<br/><br/>';
            }
            if ($_COOKIE['cookie2']) {

                $addarticlecart = true;
                echo $_COOKIE['cookie2'] . '<br/><br/>';
            }
            if ($_COOKIE['cookie3']) {

                $addarticlecart = true;
                echo $_COOKIE['cookie3'] . '<br/><br/>';
            }
            if ($_COOKIE['cookie4']) {

                $addarticlecart = true;
                echo $_COOKIE['cookie4'] . '<br/><br/>';
            }
            ?>


           <?php
            if ($addarticlecart == true) {

                if ($_COOKIE['cookie1']) {
                setcookie("cookie1", "", time() - 1);
                }
                if ($_COOKIE['cookie2']) {
                setcookie("cookie2", "", time() - 1);
                }
                if ($_COOKIE['cookie3']) {
                setcookie("cookie3", "", time() - 1);
                }
                if ($_COOKIE['cookie4']) {
                setcookie("cookie4", "", time() - 1);
                }
            ?>

            <form method="POST" action="#">
                <input type="submit" value="Vider le panier" class="btn btn-danger">

                <?php } ?>
                <form method="POST" action="index.php">
                    <input type="submit" value="Retour page d'accueil" class="btn btn-info">
                </form>
        </div>
    </div>
</section>


<?php require 'inc/foot.php'; ?>
