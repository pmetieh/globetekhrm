<?php
/*
 * Created by PhpStorm.
 * User: Paul
 * Date: 6/17/2015
 * Time: 7:25 AM
 */
        //start a new session a
    //    session_start();
        //create a new session variable to hold the user Id passed to the index.php page
        //via a query string
    //    $_SESSION['userId'] = @$_GET['userId'];
   //checkSession();

   //if(isset($_SESSION))
   //{
       session_start();
       $empId = $_GET['userId'];//$_SESSION['empId']; //$_SESSION['userId'];
      // $empId = '';
       include_once('admin/utils.php');
       alert('empId from index page  '.$empId);
   //}/*else{
      /* if($empId == '')
           header('Location:http://localhost/globetekhrm/login.php');
   }*/
   //$empId = @$_SESSION['empId']; //suppress any errors userId

   /**/



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GlobetekHRM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>BTVETC Home</title>-->

    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/globetekhrm.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/switchImage.js"></script>
    <script src="js/adjust_image.js"></script>
</head>
<body>


<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '',
            xfbml      : true,
            version    : 'v2.0'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

    <?php //include_once('admin/utils.php'); ?>
    <?php include_once('admin/menu.php') ?>
    <?php include_once('admin/content.php');?>
    <?php include_once('admin/footer.php');?>
<!----><!--button_div end-->


