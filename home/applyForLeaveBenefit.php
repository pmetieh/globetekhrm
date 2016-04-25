<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 1/6/2016
 * Time: 9:49 PM
 */
if(!isset($_SESSION))
{

    session_start();
    $empId = $_SESSION['empId'];
}
$empId = @$_SESSION['empId']; //suppress any errors
if($empId == '')
    header('Location:http://localhost/globetekhrm/login.php');
