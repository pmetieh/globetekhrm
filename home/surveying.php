<?php
	session_start();
?>
<?php
	include_once('headerpage.php');
?>
<script type="text/javascript" >
<?php
    if(isset($_POST['submit']))
    {
        echo 'alert('.'\''. $_SERVER['PHP_SELF'].'\''.');';
        echo 'alert('.'\'' .  'Location: '. $_POST['location'].'\''.')';
       
    }
?>
</script>
<div id="outerDiv" style="width: 1000px;">
<div id="leftDiv" style="float: left;">
<form enctype="multipart/form-data" name="survey" action="upload.php" method="post">

<table>
<tr>
<td><b>CustomerID</b></td>
<td><input id="custId" name="custId"/></td>
</tr>

<tr>
<td><b>Land Location</b></td>
<td>
<select name="location">
<option value="Lofa">Lofa</option>
<option value="Grand Kru">Grand Kru</option>
<option value="Montserrado">Montserrado</option>
<option value="Sinoe">Sinoe</option>
<option value="Maryland">Mary Land</option>
<option value="Margibi">Margibi</option>
<option value="Grand Gedeh">Grand Gedeh</option>
<option value="River Cess">River Cess</option>
<option value="River Gee">River Gee</option>
<option value="Grand CapeMount">Grand CapeMount</option>
<option value="Gborpolu">Gborpolu</option>
<option value="Bomi">Bomi</option>
<option value="Bong">Bong</option>
<option value="Nimba">Nimba</option>
<option value=""></option>
</select>
</td>
</tr>

<tr>
<td><b>Land Size</b></td>
<td><input type="text" name="landsize" id="landsize"/></td>
</tr>

<tr>
<td><b>Name On Deed</b></td>
<td><input type="text" name="nameOnDeed" id="nameOnDeed"/></td>
</tr>

<tr>
<td><b>Original Buyer</b></td>
<td><input type="text" name="originalbuyer" id="originalbuyer"/></td>
</tr>
<tr>
<td><b>Original Seller</b></td>
<td><input type="text" name="originalSeller" id="originalSeller"/></td>
</tr>

<tr>
<td><b>Probation Date</b></td>
<td><input type="text" name="probationDate" id="probationDate"/></td>
</tr>


<tr>
<td><b>Vol Num</b></td>
<td><input type="text" name="volNum" id="volNum"/></td>
</tr>


<tr>
<td><b>Page Num</b></td>
<td><input type="text" name="pageNum" id="pageNum"/></td>
</tr>
</table>
<table id="scanDeed">
<tr>
<th><b>Scan Deed</b></th>
</tr>
<tr>
<td><input type="file" name="deedScan" id="deedScan" value="Upload Deed"/></td>
</tr>
</table>
<?php
include_once("../home/buttons.php");
 ?>
</form>
</div>
<div id="rightDiv" style="float: right;">
<h3>Not a customer?</h3>
    <p>
        <a href="../home/customer.php"><b>Register here</b></a>
    </p>
</div>
</div><!--Outer Div-->
<script type="text/javascript">
$(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    $( "#probationDate" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true //this option for allowing user to select from year range
     
    });
    
    //alert($('#ui-datepicker-div').zIndex());
  //  $zinxed = $('#"menu_wrapper').css('z-ndex', '0');
//    $('#ui-datepicker-div').
//    css('z-index', '15');
     
     
     
    
  }

);

$(function(){
    
     $( "body" ).on('mouseenter', '#ui-datepicker-div', function(event){
       $('#ui-datepicker-div').css('z-index', 20);
      //  alert('width '.$width);
      })
        //$width = 
     
    
});

</script>
<?php
	include_once('footerpage.php')
?>
