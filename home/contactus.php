<?php
	session_start();
?>
<?php
	include_once('headerpage.php');
?>

<?php
	if(isset($_POST["message"]) && isset($_POST["email"]))
    {
	  // echo $_POST['message'];
         $from = "From: " + $_POST["email"];
         mail("webmaster@lhdiliberia.com", "Service Enquiry", $_POST["message"], $from);
	}
    
?>


<div id="contact_main" style="margin-left: 210px;">
<h1>Please make an enquiry</h1>
<div id="contactform" class="contentLeft">

<form id="contactus" name="contactus" action="contactus.php" method="post">
<!--<input type="text" name="message" style="height:200px; width:300px; margin-top: 10px; padding: 0px;" />-->
<table>
<tr>
<td><b>Email:</b></td>
<td><input type="text" name="email" id="email"/></td>
</tr>
<tr>
<td colspan="5"><textarea rows="15" cols="40" name="message" class="textwrap">Type message here</textarea></td>
<td colspan="5"></td>
</tr>
<!--<tr>
<td><input type="submit" name="submit" value="Submit" /> </td>
<td colspan="5"></td>
<td><input type="reset" name="cancel" value="Cancel"/></td>

</tr>-->
</table>
<?php include_once('../home/buttons.php') ?>
</form>
</div>

<div id="contactInfo" class="contentRight">
<table>
<tr>
<td  style="vertical-align: text-top;"><b>Address</b></td>
<td>
Stop Ebola Transmission Inc<br />
Monrovia City Hall, Sinkor<br />
Monrovia, Liberia<br />
</td>
</tr>
<tr><td><b>Mobile1</b></td>
<td>+231880974279</td>
</tr>
<tr><td><b>Mobile2</b></td>
<td>+231886311064</td>
</tr>
<tr>
<td><b>Mobile3</b></td>
<td>+231886358855</td>
</tr>
<tr>
<td><b>Mobile4</b></td>
<td>+231770188392</td>
</tr>
</table>
</div>

</div>

<?php
	include_once('footerpage.php')
?>

