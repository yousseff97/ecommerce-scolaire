<?php
session_start();
include "login/logname.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>about us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="hover.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="aboutus/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default"  style="width: 80%;margin-left: 10%;" >
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="img/logo.png" style="float: left ;padding-top: 3px"  height="50px" width="60px"><a class="navbar-brand" href="index.php" style="padding-top: 17px">McDonas</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="padding-top: 3px">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="menu/combo.php">Combo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/pizza.php">Pizza</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/sandiwch.php">Sandwich</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/healthyfood.php">Healthy food</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="menu/drinks.php">Drinks</a></li>
                    </ul>
                </li>
                <li ><a href="Stores.php">Stores</a></li>
                <li class="active"><a href="aboutus.php">About us <span class="sr-only">(current)</span></a></li>
            </ul>



            <form method="post" class="navbar-form navbar-left" style="padding-top: 5px">
                <div class="form-group">
                    <input type="text" name="searchName" class="form-control" placeholder="Search">
                </div>
                <button type="submit" name="search" class="btn btn-default">Search</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="bask.php" <?php  hidebasket();   ?>><img src="img/basket.png" style="width: 30px;height: 30px" > basket</a></li>
                <li><a href="<?php affichelien();   ?>""><img src="img/login.png" style="width: 30px;height: 30px" ><?php affichenom(); ?></a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="parallax10" style="margin-top: -19px;">
    <div class="container" >

        <div class="col-md-4 center-block" style="width: 50%;padding-left: 0px;padding-right: 0px;height: 500px">
            <div class="section-box-two" style="width: 100%;height: 600px;margin-left: ">
                <figure>
                    <h3><a href="aboutus/objectif.php">Our Objectives</a></h3>
                </figure>
                <img src="img/aboutus/objectifs.png" class="img-responsive" />
            </div>
        </div>
        <div class="col-md-4 center-block" style="width: 50%;padding-left: 0px;padding-right: 0px;height: 500px">
            <div class="section-box-two" style="width: 100%;height: 600px">
                <figure>
                    <h3><a href="aboutus/leaders.php">Our Leaders</a></h3>
                </figure>
                <img src="img/aboutus/leadership.png" class="img-responsive" />
            </div>
        </div>
    </div>
</div>

    <div class="parallax3" >
        <div align="center" style="padding-top: 50px">

            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/channel/UCLinOZSQupEBIWGiKXo5_rg" class="fa fa-google"></a>

    </div>

        <!--<span style="color: white">Copyright ©2018 GL2™, All Rights Reserved.</span>-->
</div>
<?php
if(isset($_POST['search']))
{

    $recherche=$_POST['searchName'];
    //header('Location:../recherche.php?recherche='.$_POST['searchName']);
    echo("<script>location.href = 'recherche.php?recherche=$recherche';</script>"); // au lieu du header , car elle ne fonctionne pas dans notre cas puisque l'output a été modifié dans la ligne 53...
}
?>

</body>
</html>