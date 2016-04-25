<style type="text/css">
    p  a {
        /**/
        display: block;
        text-decoration: none;
        text-align: left;
        background-image: url("../images/tn_bitmap.jpg");
        margin-top: 10px;
        color: white;
        font-weight: bold;
    }


    p{
        text-align: left;
    }
    #container{
        width: 1000px;
        margin-left: 210px;
    }
    #middleCol{
        float: left;
        width: 48%;
        height: 100%;
        text-align: left;
        /*border: solid #008000 thin;*/
    }
    #left-links{
        float: left;
        width: 25%;
        height: 100%;
        /*border: solid #0000ff thin;*/
    }
    #rightCol{
        float: left;
        width: 25%;
        height: 100%;

        /*border: solid #ff0000 thin;*/
    }
    img{
        padding-left: 15px;
    }
</style>
<?php
	include_once('../home/headerpage.php');
?>
<div class="container" id="container">

<div id="left-links">
<h3>Related Stories</h3>
    <p>
        Ebola Survivor Dr. Ada Igonoh Shares Her Story
        Although more than 2,600 victims have died in the largest Ebola outbreak in history, one woman’s story of
        survival could be a sign of hope for those that are still battling the illness.Dr. Ada Igonoh contracted Ebola in Nigeria
        after treating Patrick

    </p>
    <p>
        <a href="http://news.yahoo.com/ebola-cases-triple-20-000-november-unless-efforts-044131014.html">US warns Ebola could infect 1.4 million by 2015</a>
        <a href="http://news.yahoo.com/ebola-outbreak-pretty-much-contained-senegal-nigeria-115129751.html">Ebola outbreak contained in Senegal and Nigeria</a>
        <a href="http://www.forbes.com/sites/davidkroll/2014/09/23/nigeria-free-of-ebola-as-final-surveillance-contacts-are-released/">Nigeria Ebola Free</a>
    </p>

</div>

<div class="middleCol" id="middleCol">

    <span style="padding-left: 15px;">
            <b>Title </b> <?php $title; ?>
    </span>

    <p>
        <img src="../images/ebola_1.jpg" width="450px" />
    </p>
     <span style="padding-left: 15px;">
            <b>Written by </b> <?php $author; ?>
    </span>
</div>

<div class="rightCol" id="rightCol">
<h3>Login to Admin</h3>
<p>
  <a href="../login.php">Admin</a>
    Sheriff: Iowa man locked 5 kids in bedroom all day .An Iowa man is charged with locking his girlfriend's
    five children in a bedroom for more than 24 hours at a time without food or a bathroom, authorities said Monday.
</p>
</div>

</div><!--container div ends here-->
    <script type="text/javascript" lang="javascript">
        //$(function(){
        //    alert('jQuery on Index page');
        //})

        //popup();
        moveImage();
        //alert('Hi');
    </script>
<?php
	include_once('footerpage.php');
?>