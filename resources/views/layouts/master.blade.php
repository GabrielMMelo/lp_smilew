<?php
/**
 * Created by PhpStorm.
 * User: melo
 * Date: 29/07/2018
 * Time: 23:48
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smilew</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->

    <!--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="{{ asset('css/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animation.css') }}" rel="stylesheet">



</head>

<body>
@yield('content')
</body>
</html>