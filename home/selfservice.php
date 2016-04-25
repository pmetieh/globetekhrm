<style>
    #details{
        display: none;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 12/28/2014
 * Time: 6:05 AM
 * This script is called by get_employeedetails.php
 */
//include_once('../admin/headrepage_admin.php');
//get the logged in user
//include_once('../admin/utils.php');
//$empId = '';
session_start();
$empId =  @$_GET['empId'];//$_SESSION['userId'];@$_SESSION['empId'];

if(isset($_SESSION))
{
   // alert('session is set');
  //  var_dump($_SESSION);
    //session_start();
    //$empId = $_SESSION['empId']; //$_SESSION['userId'];
   // alert('empId '.$empId);

}else{
   // if($_SESSION['empId'] == '')
   //     alert('Exiting to login page ...');
    //    header('Location:http://localhost/globetekhrm/login.php');
}
include_once('headerpage.php');
include_once('../admin/connect.php');
include_once('../admin/utils.php');

alert('Selfservice page empId '.$empId);

/*if(isset($_GET['employeeId']))
{

    // update_employee($_POST);
    $empId = $_GET['employeeId'];
    alert('empId from GET : '.$empId);

}*/

?>
<?php
if(isset($_POST['submit']))
{
    //alert('Form submitted');

    update_employee_selservice();

   // update_employee_pic();




}
?>


<!--<div id="heading" style="margin-left: 210px;">
    <?php /*echo '<h1>Employee BioData</h1>'; */?>
</div>-->

<div id="main-div" style="width: 300px; display: none; margin-left:210px;margin-top: margin-bottom: 30px;  padding: 15px;
border: thin solid blue; background-color: yellow;">

    <?php

    //echo '<br/>'.'<br/>'.'<br />';
    $result = get_employee($empId);
    //var_dump($result);
    //alert($result["email"]);
    $sal = $result['salary'];
    $email = $result['email'];
    $socialMediaId = $result['socialMediaId'];
    $hireDate = $result['hireDate'];
    $emPId = $result['employeeId'];
    $gender = $result['gender'];
    // alert('EmployeeId '.$result['employeeId']);

    ?>

</div>

<div id="main-div" style="margin: auto; width: 1000px; color: white; text-align: left;">
<h1><?php echo getEmpName($empId); ?> Bio Data Edit Form</h1>
<div id="form_div"   >
<form id="biodata-form"  name="biodata-form" action="" method="post" enctype="multipart/form-data">
<div id="mainform" style="">
<div id="section1" style="float: left; width: 497px; height: auto;  border: thin white solid;">
    <!--    <h3>></h3>-->
    <div id="staffinfo">
        <table style="color: #ffffff;">
            <tr><th><span style="font-size:large; font-weight: bold">Personnel Information Form</span</th></tr>
            <tr>
                <td><input type="hidden"  name="employeeId" id="employeeId" value="<?php echo $empId; ?>"/></td>
            </tr>

            <td><b>First Name</b></td>
            <td><input type="text" id="fName" name="fName" value="<?php echo $result['firstName']; ?>" readonly="true"/></td>
            </tr>
            <tr>
                <td><b>Other Name</b></td>
                <td><input type="text" name="oName" id="oName" value="<?php echo $result['otherName'] ;?>" readonly="true"/></td>
            </tr>
            <tr>
                <td><b>SurName</b></td>
                <td><input type="text" name="sName" id="sName" value="<?php echo $result['surName'] ;?>" readonly="true"/></td>
            </tr>
            <tr>
                <td><b>Gender</b></td>
                <td><input type="text" name="gender" id="gender" value="<?php echo $gender; ?>"  readonly="true"/>
                    <!--<select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>-->
                </td>
            </tr>
            <tr>
                <td><b>Date Of Birth</b></td>
                <td><input type="text" class="datepick" name="dateOfBirth" id="dateOfBirth" value="<?php echo $result['dateOfBirth']; ?>"  readonly="true"/></td>
            </tr>
            <tr>
                <td><b>Place Of Birth</b></td>
                <td><input type="text" name="placeOfBirth" id="placeOfBirth" value="<?php echo $result['placeOfBirth'];?>" readonly="true"/></td>
            </tr>
            <tr>
                <td><b>Mobile Number1</b></td>
                <td><input type="text" name="mobileNo1" id="mobileNo1" value="<?php echo $result['mobileNo1']; ?>"></td>
            </tr>
            <tr>
                <td><b>Mobile Number2</b></td>
                <td><input type="text" name="mobileNo2" id="mobileNo2" value="<?php echo $result['mobileNo2']; ?>"/></td>
            </tr>
            <tr>
                <td><b>House No</b></td>
                <td><input type="text" name="houseNo" id="houseNo" value="<?php echo $result['houseNo']; ?>"></td>
            </tr>
            <tr>
                <td><b>Street1</b></td>
                <td><input type="text" name="street1" id="street1" value="<?php echo $result['street1']; ?>"/></td>
            </tr>
            <tr>
                <td><b>Street2</b></td>
                <td><input type="text" name="street2" id="street2" value="<?php echo $result['street2']; ?>"/></td>
            </tr>
            <tr>
                <td><b>City</b></td>
                <td><select name="city" id="city">
                        <?php
                        $mysqlCon = new Connection();
                        $query_str = 'select * from cities';
                        $stmt = $mysqlCon->mysql->query($query_str);

                        while($result = $stmt->fetch_assoc())
                        {
                            echo '<option value="'.$result['cityId'].'">'.$result['cityName'].'</option>';
                        }
                        ?>
                    </select> </td>
            </tr>
            <!--<tr>
                  <td><b>State/Province</b></td>
                  <td>
                      <select name="state_province" id="state_province">
                          <?php
            /*                          $mysqlCon = new Connection();
                                      $query_str = 'select * from cities';
                                      $stmt = $mysqlCon->mysql->query($query_str);

                                      while($result = $stmt->fetch_assoc())
                                      {
                                          echo '<option value="'.$result['cityId'].'">'.$result['cityName'].'</option>';
                                      }
                                      */?>
                      </select>
                  </td>
              </tr>-->


            <tr>
                <td><b>Country</b></td>
                <td><select name="country" id="country">
                        <?php
                        $mysqlCon = new Connection();
                        $query_str = 'select * from country';
                        $stmt = $mysqlCon->mysql->query($query_str);

                        while($result = $stmt->fetch_assoc())
                        {
                            echo '<option value="'.$result['countryId'].'">'.$result['countryName'].'</option>';
                        }
                        ?>
                    </select> </td>
            </tr>
            <tr>
                <td><b>SocialMediaId</b></td>
                <td><input type="text" name="socialMediaId" id="socialMediaId" value="<?php echo $socialMediaId; ?>"/></td>
            </tr>


            <tr>
                <td><b>Email</b></td>
                <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"/></td>
            </tr>
           <!-- <tr>
                <td><b>Hire Date</b></td>
                <td><input type="text" class="datepick" name="hireDate" id="hireDate" value="<?php /*echo $hireDate; */?>"/></td>
            </tr>
            <tr>
                <td><b>JobId</b></td>
                <td><select name="jobId" id="jobId">
                        <?php
/*                        $mysqlCon = new Connection();
                        $query_str = 'select * from jobs';
                        $stmt = $mysqlCon->mysql->query($query_str);

                        while($result = $stmt->fetch_assoc())
                        {
                            echo '<option value="'.$result['jobId'].'">'.$result['jobTitle'].'</option>';
                        }
                        */?>
                    </select> </td>
            </tr>


            <tr>
                <td><b>DepartmentId</b></td>
                <td>
                    <select name="departmentId" id="departmentId">
                        <?php
/*                        $mysqlConDpt = new Connection();
                        $query_str = 'select * from departments';
                        $stmt = $mysqlConDpt->mysql->query($query_str);

                        while($result = $stmt->fetch_assoc())
                        {
                            echo '<option value="'.$result['deptId'].'">'.$result['deptName'].'</option>';
                        }
                        */?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><b>ManagerId</b></td>
                <td>
                    <select name="managerId" id="managerId">
                        <?php
/*                        $mysqlCon = new Connection();
                        $query_str = 'select * from departments';
                        $stmt = $mysqlCon->mysql->query($query_str);

                        while($result = $stmt->fetch_assoc())
                        {
                            echo '<option value="'.$result['managerId'].'">'.getEmpName($result['managerId']).'</option>';
                        }
                        */?>
                    </select>
                </td>
            </tr>
-->
            <tr>
                <td><b>Basic Salary</b></td>
                <td><input type="text" name="salary" id="salary" value="<?php echo $sal;?>" readonly="true"></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td>  </td>
            </tr>
           <!-- <tr>
                <td><b>Upload Pic</b></td>
                <td><input type="file" name="employee_pic" id="employee_pic"/></td>

            </tr>-->
            <tr id="pic_row">
                <td><b>Change Picture</b></td>
                <td><input type="checkbox" name="changePic" id="changePic"/></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <?php include_once("../admin/buttons.php"); ?>
                </td>
            </tr>
        </table>
    </div>
</div><!--End Section-->
<div id="section2" style="float: left; width: 497px; height: auto;  border: thin yellow solid; margin-left: 2px;">

    <div id="extraInfo" style="text-align: center;"">
    <table>
        <tr><th><h3><span style="font-size:large; font-weight: bold">Employee Photo</span></h3></th></tr>
        <tr>
            <td><!--try to center the image-->
                <?php /*$imgData = 'http://localhost/globetekhrm/admin/viewEmpPhoto.php?employeeId='.$emPId; alert($imgData);*/?>
                <img src="<?php echo 'http://localhost/GlobetekHRM/admin/viewEmpPhoto.php?employeeId='.$emPId; ?>"  width="200px" height="200px" alt="Pic" style="margin: 0px 100px 20px 150px;" />
            </td>
        </tr>
        <!-- <tr>
             <td><b>First Name</b></td>
         </tr>
      <tr>
             <td><b>Sur Name</b></td>
             <td><input type="text" name="nextOfkinSName" id="nextOfkinSName"/> </td>
         </tr>-->


    </table>

</div>
<!--<div>
    <button id="details" style="margin-left: 210px; background-color: #2C009F; color: white;"><b>Hide Details</b></button>
</div>-->
</div><!--End main-form-->
<!--<div id="footer_container" style="clear: both;">
    <?php /*include_once('../admin/footerpage_admin.php');*/?>
</div>-->
<script src="../js/validationRules.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){

      //  alert('Read only '+ $('input[type="text"]').attr('readonly'));
        $('#pic_row').hide();
        if($('input[type="text"]').attr('readonly') === 'readonly')
            $(this).addClass('readonly');
        /* $('#changePic').change(function(){
         if($('').attr('display') == 'none')
         {
         alert('Showing the Picture');
         $('#pic_row').show();
         }
         else{
         $('#pic_row').hide();
         }

         });
         */
        $('#main-div').click(function(){
            $('#role').show();
            $('#mobile').show();
            $('#details').show();
        });

    });

    $(function(){
        $('#details').click(function(){
            $('#role').hide();
            $('#mobile').hide();
            $(this).hide();
        })
    })
</script>
</form>
</div><!--End form_div-->