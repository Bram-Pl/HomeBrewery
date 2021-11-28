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
        <title>Home Brewery - @yield("subtitle") </title>
        <link rel="shortcut icon" type="image/x-icon" href="/art/ico.ico" />
        <link rel="stylesheet" href="/styles.css">
        <style type="text/css">
            *{
                box-sizing: border-box;
            }
            body{
                margin: 0 auto !important;
                padding: 0;
            }
            .header{ 
                margin: 0;
                padding: 0;
                background: #1abc9c;
            }
            .header h1{
                margin-top: 0;
            }
            .header p{
                text-align: left;
                font-family: Gill Sans Ultra Bold;
                padding: 10px;
            }
            head{
                margin: 0;
                padding: 0;
            }
            .topnav {
                overflow: hidden;
                background-color: #333;
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
                color: black;
            }

            .topnav a.active {
                background-color: #089c7c;
                color: white;
            }
            .logo{
                width: 25%;
                height: auto;
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
                min-width: 30%;
            }
            .middle {
                min-width: 50%;
            }
            .right {
                min-width: 20%;
            }
        </style>
        <script type="text/javascript" src="/functies.js"></script>
    </head>
    <body>
        <div class="header" >
            <div>
                <img class="logo" src="/art/logo.png" alt="Home Brewery Logo">
                
                <div class="search-container">
                    <form action="">
                        <input type="text" placeholder="Search..." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="topnav">
                <a href="#home">Home</a>
                <a class="active" href="#beers">Beers</a>
                <a href="#breweries">Breweries</a>
                <a href="#food">Food</a>
            </div>
            <!--<p>@yield("subtitle")</p>-->
        </div>
        <div>
            @yield("content")
        </div>
    </body>
</html>


