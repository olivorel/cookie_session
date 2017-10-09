<?php
require 'inc/head.php';
//si ps de connexion redirection vers la page de login
if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
    exit;
}
if (!empty($_POST)) {
    if (isset($_POST['add_article1'])) {
        setcookie('cookie1', $_POST['add_article1'], time() + 365 * 24 * 3600);
    }
    if (isset($_POST['add_article2'])) {
        setcookie('cookie2', $_POST['add_article2'], time() + 365 * 24 * 3600);
    }
    if (isset($_POST['add_article3'])){
        setcookie('cookie3', $_POST['add_article3'], time() + 365 * 24 * 3600);
    }
    if (isset($_POST['add_article4'])) {
        setcookie('cookie4', $_POST['add_article4'], time() + 365 * 24 * 3600);
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpeg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <form action="" method="POST">
                        <input type="hidden" name="add_article1" value="Pecan nuts by Penny">
                        <input type="submit" class="btn btn-primary" value="Add to cart">
                        <!--<a href="?add_to_cart=46" class="btn btn-primary" name="pecan">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart-->
                        <!--</a>-->
                    </form>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpeg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <form action="" method="POST">
                        <input type="hidden" name="add_article2" value="Chocolate chips by Bernadette">
                        <input type="submit" class="btn btn-primary" value="Add to cart">
                        <!--<a  href="?add_to_cart=36" class="btn btn-primary">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>-->
                    </form>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpeg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <!-- <a  href="?add_to_cart=58" class="btn btn-primary">
                       <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart-->
                    <form action="" method="POST">
                        <input type="hidden" name="add_article3" value="Chocolate cookie by Bernadette">
                        <input type="submit" class="btn btn-primary" value="Add to cart">
                        <!--</a>-->
                    </form>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpeg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <!--<a  href="?add_to_cart=32" class="btn btn-primary">
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart-->
                    <form action="" method="POST">
                        <input type="hidden" name="add_article4" value="M&M's cookies by Penny">
                        <input type="submit" class="btn btn-primary" value="Add to cart">
                        <!--</a>-->
                    </form>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
