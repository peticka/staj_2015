<?php echo doctype("html5"); ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>

    <style>
        body, html {margin: 0; padding: 0;}

        body{
            background-color: blueviolet;
        }

        h1, h2, h3, h4, p, a, li, ul{
            font-family: Arial, sans-serif;
            color: #FBE6F2;
            text-decoration: dashed;
        }

        #nav{
            margin: 50px auto 0 auto;
            width: 1000px;
            background-color: #E68F8F;
            height: 15px;
            padding: 20px;
        }

        #nav ul{
            list-style: none;
            float: left;
            margin: 0 50px;
        }

        #nav a:hover{
            color: #99BC99;
        }


        #nav ul li{
            display: inline;
        }

        #content{
            width: 1000px;
            min-height: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        #contact{
            width: 170px;
            min-height: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        #footer{
            width: 400px;
            height: 15px;
            margin: 0 auto;
            padding: 20px;
        }

        #footer P{
            color: #E68F8F;
        }


    </style>

</head>