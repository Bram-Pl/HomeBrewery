<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Brewery - <?php echo $__env->yieldContent("subtitle"); ?> </title>
        <link rel="shortcut icon" type="image/x-icon" href="/art/ico.ico" />
        <link rel="stylesheet" href="/styles.css">
        <style type="text/css">
            *{
                box-sizing: border-box;
                font-family: arial;
            }
            body{
                margin: 0 auto !important;
                padding: 0;
                background-image: url('/art/background.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            .header{ 
                width: 100%;
                margin: 0;
                padding: 0;
                background: #1abc9c;
                min-height: 60px;
                background-image: url( '/art/header.svg' );
                background-repeat: no-repeat;
                background-position-y: 50%;
            }
            .header h1{
                margin-top: 0;
            }
            .header p{
                text-align: left;
                padding: 10px;
            }
            .topnav {
                overflow: hidden;
                background-color: #333;
                height: 50px;
              }
            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            .topnav a:hover {
                background-color: #ddd;
                height: 50px;
                color: black;
            }
            .topnav a.active {
                background-color: #1abc9c;
                color: white;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
                height: 50px;
            }
            .topnav a.ifLoggedIn{
                float: right;
                color: #f2f2f2;
                text-align: center;
                padding: 15px 15px;
                text-decoration: none;
                font-size: 17px;
            }
            .logo{
                display: inline-block;
                width: 300px;
            }
            .column{
                float: left;
                padding: 5px;
            }
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            /* Set width length for the left, right and middle columns */
            .left {
                width: 30%;
            }
            .middle {
                min-width: 40%;
                text-align: center;
                justify-content: center;
            }
            .right {
                min-width: 10%;
                float: right;
            }
            .user{
                font-size: 30px;
                margin: 1px;
                color: #FFFFFF;
            }
            label, input, form, button{
                margin: 5px;
                font-size: 17px;
                text-align: left;
            }
            .buttonAuth{
                font-size: 18pt;
                color: white;
                border: 2px;
                border-color: #333;
                text-decoration: none;
            }
            .buttonAuth:visited{
                color: white;
            }
            .searchbar {
                width: 80%;
                margin-right: 0px;
                border-radius: 20px;
                text-align: center;
                border-color: #1abc9c;
            }
            .searchbutton {
                border-color: #1abc9c;
                background-color: white;
                color: #1a4d44;
                border-radius: 5px;
            }
        </style>
        <script type="text/javascript" src="/functies.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script type="text/javascript">
            function changeActive(object){
                //window.alert(object.location.pathname);
                //window.alert(object.location.pathname === '/beers');
                if(object.location.pathname === '/index'){
                    document.getElementById('Home').classList.add("active");
                } else if(object.location.pathname === '/all') {
                    document.getElementById('Beers').classList.add("active");
                } else if(object.location.pathname === '/upload') {
                    document.getElementById('upload').classList.add("active");
                } else if(object.location.pathname === '/recipes') {
                    document.getElementById('Recipes').classList.add("active");
                } else if(object.location.pathname === '/breweries') {
                    document.getElementById('Breweries').classList.add("active");
                } else if(object.location.pathname === '/soap') {
                    document.getElementById('SOAP').classList.add("active");
                }
            }
        </script>
    </head>
    <body onload="changeActive(this)">
        <div class="header" >
            <!--<img class="logo" style="display:inline-block" src="/art/logo.png" alt="Home Brewery Logo">-->
            <div class="row">
                <div class="column left">
                    <a href="index">
                        <img class="logo", src="/art/logo.png" alt="Home Brewery Logo">
                    </a>
                </div>
                
                <form class="column middle" action="">
                    <input type="text", id="search", name="search", class="searchbar">
                    <input type="submit" value="SEARCH", class="searchbutton">
                </form>
                <div class="column right", style="text-align: left;">
                    <!--echo $user->id;

                    echo $user->name;

                    echo $user->email;-->
                    <?php if(auth()->guard()->check()): ?>
                    <p class="user"><?php echo e($user->name); ?></p>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="nav-item">
                            <a class="nav-link buttonAuth" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                <i class="fas fa-sign-out-alt"></i>

                                <?php echo e(__('Log Out')); ?>

                            </a>
                        </div>
                    </form>
                    <?php else: ?>
                    <form method="GET" action="<?php echo e(route('login')); ?>">
                        <a class="btn btn-primary buttonAuth" style="color: #f2f2f2;" href="<?php echo e(route('login')); ?>">Login</a><br>
                    </form>
                    <form method="GET" action="<?php echo e(route('register')); ?>">
                        <a class="btn btn-primary buttonAuth" style="color: #f2f2f2" href="<?php echo e(route('register')); ?>">Register</a><br>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
                       
            <div class="topnav">
                <a id="Home" href="/index">Home</a>
                <a id="Beers" href="/all">Beers</a>
                <a id="Breweries" href="/breweries">Breweries</a>
                <a id="Recipes" href="/recipes">Recipes</a>
                <a id="SOAP" href="/soap">SOAP</a>
                <!--<a id="upload" href="upload">upload</a>-->
                
                
                <?php if(auth()->guard()->check()): ?>
                <a class="ifLoggedIn" id="myRecipes" href="#recipes">My Recipes</a>
                <a class="ifLoggedIn" id="myActiveBrews" href="#activeBrews">My Active Brews</a>
                <a class="ifLoggedIn" id="upload" href="/upload">
                    <i class="material-icons">upload</i>
                </a>
                <?php else: ?>
                <?php endif; ?>
            </div>
            <!--<p><?php echo $__env->yieldContent("subtitle"); ?></p>-->
        </div>
        <div>
            <?php echo $__env->yieldContent("content"); ?>
        </div>
    </body>
</html>


<?php /**PATH C:\development\HomeBrewery\resources\views/master.blade.php ENDPATH**/ ?>