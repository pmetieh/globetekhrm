<div id="main-div" style="margin-left: 210px; text-align: left;">
    <form id="biodata-form" name="biodata-form" action="" method="post">
        <table>
            <tr><th><b><span style="font-size:large; font-weight: bold">Bio Data Form</span></th></tr>
            <tr>
                <td><b>House No.</b></td>
                <td><input type="text"  name="houseNo" id="houseNo"/></td>
            </tr>
            <td><b>Community</b></td>
            <td><input type="text"  name="community" id="community"/></td>
            </tr>
            <td><b>Block</b></td>
            <td><input type="text"  name="block" id="block"/></td>
            </tr>
            <tr>
                <td><input type="hidden" name="pId" id="pId"/></td>
            </tr>
            <!--<tr>
            <td><b>Report No.</b></td>
            <td><input type="text" id="report-no" name="report-no"/></td>
            </tr>
            <tr>-->
            <td><b>First Name</b></td>
            <td><input type="text" id="fName" name="fName"/></td>
            </tr>
            <tr>
                <td><b>Other Name</b></td>
                <td><input type="text" name="oName" id="oName"/></td>
            </tr>
            <tr>
                <td><b>SurName</b></td>
                <td><input type="text" name="sName" id="sName"/></td>
            </tr>
            <tr>
                <td><b>Gender</b></td>
                <td>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Date Of Birth</b></td>
                <td><input type="text" name="dob" id="dob"/></td>
            </tr>
            <tr>
                <td><b>Mobile Number</b></td>
                <td><input type="text" name="mobileNo" id="mobileNo"/></td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td><input type="text" name="email" id="email"/></td>
            </tr>
            <tr>
                <td><b>Occupation</b></td>
                <td><select name="occupation" id="occupation">
                        <?php
                        $mysqlCon = new Connection();
                        $query_str = 'select occupation from occupations';
                        $stmt = $mysqlCon->mysql->query($query_str);

                        while($result = $stmt->fetch_assoc())
                        {
                            echo '<option value="'.$result['occupation'].'">'.$result['occupation'].'</option>';
                        }


                        ?>
                    </select> </td>
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>
                    <select name="status" id="status">
                        <option value="PrincipalOccupant">Principal Occupant</option>
                        <option value="Occupant">Occupant</option>
                    </select>
                </td>
            </tr><!---->
        </table>
        <?php
        include_once('../home/buttons.php');
        ?>
    </form>
</div>
<script type="text/javascript">
    //  $(document).ready(
    //
    //  /* This is the function that will get executed after the DOM is fully loaded */
    //  function () {
    //    $( "#dob" ).datepicker({
    //      changeMonth: true,//this option for allowing user to select month
    //      changeYear: true //this option for allowing user to select from year range
    //    });
    //  });
</script>
<?php
include_once('../home/footerpage.php');
?>