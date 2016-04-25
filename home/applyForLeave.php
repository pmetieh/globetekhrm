<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 8/18/2015
 * Time: 12:55 PM
 */
$empId = @$_GET['empId'];
/*if(isset($_SESSION))
{

    session_start();
    $empId = $_SESSION['empId'];
}*/
/*$empId = @$_SESSION['empId']; //suppress any errors
if($empId == '')
    header('Location:http://localhost/globetekhrm/login.php');*/


include_once('../admin/utils.php');
//checkSession();
include_once('../admin/connect.php');
include_once('../home/headerpage.php');



if(isset($_POST['submit']))
{

    $empId = $_POST['employeeId'];
    alert('Form submitted with empId '.$empId);
    if($empId != '')
    {
        ///Next Of kin Data Info Section
        /*$leaveType = $_POST['leaveType'];

        $loanStartDateArray = $loanStartDateArray[2].'-'.$loanStartDateArray[0].'-'.$loanStartDateArray[1];*/
        $leaveType = $_POST['leaveType'];
        $startDateArray = explode("/", $_POST['startDate']);
        $endDateArray = explode("/", $_POST['endDate']);

        $startDate = $startDateArray[2].'-'.$startDateArray[0].'-'.$startDateArray[1];
        $endDate = $endDateArray[2].'-'.$endDateArray[0].'-'.$endDateArray[1];


        $leaveAddress = $_POST['leaveAddress'];
        $replacement = $_POST['replacement'];

        alert('LeaveType '.$leaveType);

        $leavequery = 'call requestLeave(?, ?, ?, ?, ?, ?)';//'insert into leaverequest(employeeId,leaveType,startDate,endDate, leaveAddress)'.' values(?,?,?,?,?)';

        alert($leavequery);

        $mySqlConn = new Connection();
        $stmtLeave = $mySqlConn->mysql->prepare($leavequery);
        //  var_dump($stmtLeave);
        if($mySqlConn->mysql->errno)
        {
            alert('Failed to register leave request');
            // var_dump($stmtInsertNextOfKin);
            echo $mySqlConn->mysql->error;

        }
        else{
            // alert('About to insert into nextOfkin Table');
            $stmtLeave->bind_param('ssssss', $empId, $startDate, $endDate, $leaveType, $leaveAddress, $replacement);
            $stmtLeave->execute();
            if($stmtLeave->affected_rows > 0)
            {
                alert('New leave request registered');
                //insert is successful so send email notfication to both the manager and the employee
                notifyLeaveRequestEmployee($empId);
                notifyLeaveRequestManager($empId);
            }else{
                echo $stmtLeave->error;
                alert('Leave request failed..');
            }
        }
    }
}

?>
<div id="main-div" style="margin: auto; width: 1000px; color: white; text-align: left;">
    <h1>Apply For Leave</h1>
    <div id="section2" style="width: 100%; height: auto;  border: thin white solid; margin-left: 2px;">
        <form id="biodata-form"  name="biodata-form" action="" method="post" enctype="multipart/form-data">
            <!--<h3><span style="font-size:large; font-weight: bold; display: block;"></span></h3>-->
            <div id="extraInfo"">

            <table>
                <tr>
                    <td><b>Employee Id</b></td>
                    <td><input type="text" name="employeeId" id="employeeId" value="<?php echo $empId; ?>"></td>
                </tr>
                <tr>
                    <td><b>Leave Type</b></td>
                    <td>
                    <select name="leaveType" id="leaveType">
                        <option value="CasualLeave">Casual Leave</option>
                        <option value="MaternityLeave">Maternity Leave</option>
                        <option value="AnnualLeave">Annual Leave</option>
                        <option value="StudyLeave">LeaveLeave</option>
                    </select>


                    </td>
                </tr>
                <tr>
                    <td><b>Leave Start Date</b></td>
                    <td><input type="text" name="startDate" id="startDate"/> </td>
                </tr>

                <tr>
                    <td><b>Leave End Date</b></td>
                    <td><input type="text" name="endDate" id="endDate"/></td>
                </tr>
                <tr>
                    <td><b>Address On Leave</b></td>
                    <td><textarea name="leaveAddress" id="leaveAddress"></textarea>
                </tr>
                <tr>
                    <td><b>Replacement</b></td>
                    <td><input type="text" name="replacement" id="replacement"/></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <?php include_once("../admin/buttons.php"); ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
/*include_once('footerpage.php');
*/?>
<!--<div id="footer_wrapper" style="text-align: left;">

</div>-->
<script type="text/javascript" src="../jQueryUI/jquery-ui.js"></script>
<script src="../js/validationRules.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $('#footer_div').css('marginLeft', '0px');
        $('#top_header').hide();
        $('#startDate').datepicker();
        $('#endDate').datepicker();
        //$('textarea')
    })
</script>

