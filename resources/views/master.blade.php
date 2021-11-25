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
        <link rel="stylesheet" href="/css/app.css">
        <style type="text/css">
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
                text-align: center;
            }
            head{
                margin: 0;
                padding: 0;
            }
        </style>
        <script type="text/javascript" src="/functies.js"></script>
    </head>
    <body>
        <!--<h1 style="text-align: right;">Home Brewery</h1>-->
        <div class="header" >
            <h1>Home Brewery</h1>
            <p>@yield("subtitle")</p>
        </div>
        <div>
            @yield("content")
        </div>
    </body>
</html>


