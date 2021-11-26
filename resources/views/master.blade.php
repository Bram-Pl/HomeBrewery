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
            body{
                margin: 0 auto !important;
                padding: 0;
            }
            .header{ 
                margin: 0;
                padding: 0;
                background: #1abc9c;
                align-content: center;
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
            .Logo{
                width: 20%;
                height: auto;
                margin: 10px;
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
        </style>
        <script type="text/javascript" src="/functies.js"></script>
    </head>
    <body>
        <!--<h1 style="text-align: right;">Home Brewery</h1>-->
        <div class="header" >
            <img class="Logo" src="/art/logo.png" alt="Home Brewery Logo">
            <div class="topnav">
                <a href="#home">Home</a>
                <a class="active" href="#listofbeers">List Of Beers</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
            <!--<p>@yield("subtitle")</p>-->
        </div>
        <div>
            @yield("content")
        </div>
    </body>
</html>


