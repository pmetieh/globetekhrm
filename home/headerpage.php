
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  <meta name="viewport" content="width=device-width, initial-scale=1">
     The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>BTVETC Home</title>-->

    <!-- Bootstrap -->
    <!--<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">-->
    <link href="http://localhost/globetekhrm/css/jquery-ui.css" type="text/css" rel="stylesheet">
    <link href="http://localhost/globetekhrm/css/gslhrm.css" type="text/css" rel="stylesheet">
    <script src="http://localhost/globetekhrm/js/jquery-1.11.0.js" type="application/javascript"></script>
    <script src="http://localhost/globetekhrm/js/switchImage.js" type="application/javascript"></script>
    <script src="http://localhost/globetekhrm/js/adjust_image.js" type="application/javascript"></script>

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
<?php
    $empId = @$_GET['empId'];
    if(!isset($_SESSION))
        {
            session_start();
         //   var_dump($_SESSION);
        }
?>
<div id="main_div" style="width: 1000px; color: yellow; text-align: left; margin:auto;">
    <div id="logo_div" style="float: left; position: relative; width:100%;">
        <img src="http://localhost/globetekhrm/images/logo_letters_g.png" id="logo"/>
    </div>
    <div id="header_div" style="height: 80px; float: left; width: 100%; background-color: red;">
        <ul>
            <li  class="home">
                <a href="http://localhost/globetekhrm/index.php?userId=<?php echo $empId;?>">Home</a>
            </li>
            <!--<li>
                <a href="#">Personnel Info</a>
            </li>

            <li>
                <a href="#">PayRoll</a>
            </li>

            <li>
                <a href="#">Leave</a>
            </li>

            <li>
                <a href="#">Training</a>
            </li>
            <!--<li>
                <a href="#">Scheduling</a>
            </li>
            <li>
                <a href="#">Commercial</a>
            </li>-->
            <li>
                <a href="http://localhost/globetekhrm/login.php">Logout</a>
            </li>
        </ul>
        <img style="display: inline-block; float: right" src="<?php echo 'http://localhost/GlobetekHRM/admin/viewEmpPhoto.php?employeeId='.$empId; ?>" width="100px" height="75px" alt="employee"/>
    </div>
</div>