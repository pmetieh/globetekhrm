<?php
  include_once('../home/headerpage.php');
  include_once('../home/connect.php');
  include_once('../home/utils.php');	
    
 ?>

 <?php
	 if(isset($_POST['submit']))
    {
        //get the posted data
        $houseNo = $_POST['house-no'];
        alert($houseNo);
        $teamNo = $_POST['team-no'];
        $reportNo = $_POST['report-no'];
        $firstName = $_POST['principalFName'];
        $otherName = $_POST['principalOname'];
        $surName = $_POST['principalSName'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $mobileNo = $_POST['mobile-no'];
        $email = $_POST['email'];
        $gpseutm = $_POST['gps-eutm'];
        $gpsnutm = $_POST['gps-nutm'];
        
        
        
       
          //  print_r($mysqlCon);
            $mysqlcon = new Connection();
	        $query_str = 'insert into houses(houseAddress, teamNo,reportNo,typeOfStructure, utilityOfStructure, sanitationStatus, zone, community, block, houseNo,  gpsEutm, gpsNutm)'.
                         ' values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
            alert($query_str);
            print_r($mysqlcon);
            $stmt_insert = $mysqlcon->mysql->prepare($query_str);
           // print_r($stmt_insert);
            if(!$stmt_insert)
            {
            alert($mysqlcon->mysql->error);
            print_r($stmt_insert);
          }
          else{
            $stmt_insert->bind_param('ssssssssssss', $houseNo, $teamNo, $reportNo, $firstName, $otherName, $surName, $gender, 
                                $dob, $mobileNo, $email,  $gpseutm, $gpsnutm);
            $stmt_insert->execute();
          //  print_r($query_status);
            if($stmt_insert->affected_rows > 0) 
            {
                alert('House successfully registered '.$stmt_insert->affected_rows.' rows inserted');
            }
          }
            
      }
          
?>

    <div id="main-div" style="margin-left: 210px; text-align: left;">
        <form id="house-numbering-form" name="house-numbering-form" action="" method="post">
            <table>
                <tr><th><b><span style="font-size:large; font-weight: bold">House Registration Form</span></th></tr>
                <tr>
                    <td><b>House no.</b></td>
                    <td><input type="text"  name="house-no" id="house-no"/></td>
                </tr>
                <!--<tr>
                <td><b>Team No.</b></td>
                <td><input type="text" name="team-no" id="team-no"/></td>
                </tr>-->
                <tr>
                    <td><b>Report Author</b></td>
                    <td><input type="text" id="reportAuthor" name="reportAuthor"/></td>
                </tr>
                <!--<tr>
                <td><b>Principal First Name</b></td>
                <td><input type="text" id="principalFName" name="principalFName"/></td>
                </tr>
                <tr>
                <td><b>Principal Other Name</b></td>
                <td><input type="text" name="principalOname" id="principalOname"/></td>
                </tr>
                <tr>
                <td><b>Principal SurName</b></td>
                <td><input type="text" name="principalSName" id="principalSName"/></td>
                </tr>
                <tr>
                <td><b>Gender</b></td>
                <td><input type="text" name="gender" id="gender"/></td>
                </tr>
                <tr>
                <td><b>Date Of Birth</b></td>
                <td><input type="text" name="dob" id="dob"/></td>
                </tr>
                <tr>-->
                <td><b>Mobile Number</b></td>
                <td><input type="text" name="mobile-no" id="mobile-no"/></td>
                </tr>
                <!--<tr>
                <td><b>Email</b></td>
                <td><input type="text" name="email" id="email"/></td>
                </tr>-->
                <tr>
                    <td><b>GPS-EUTM</b></td>
                    <td><input type="text" name="gps-eutm" id="gps-eutm"/></td>
                </tr>
                <tr>
                    <td><b>GPS-NUTM</b></td>
                    <td><input type="text" name="gps-nutm" id="gps-nutm"/></td>
                </tr>
                <tr>
                    <td><b>Type Of Structure</b></td>
                    <td>
                        <select "typeOfStructure">
                        <option value="ConcreteBuilding">Concrete Building</option>
                        <option value="MudRound">MudRound</option>
                        <option value="ZincRound">ZincRound</option>
                        <option value="MatRound">MatdRound</option>
                        <option value="TatchRound">TatchRound</option>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td><b>Utility Of Structure</b></td>
                    <td>
                        <select "utilityOfStructure">
                        <option value="Residential">Residential</option>
                        <option value="Business">Business</option>
                        <option value="School">School</option>
                        <option value="Religious">Religious</option>
                        <option value="Multipurpose">Multipurpose</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Sanitation Status</b></td>
                    <td>
                        <select "sanitationStatus">
                        <option value="PipeBourneWater">PipeBourneWater</option>
                        <option value="WaterWell">WaterWell</option>
                        <option value="RiverOrStream">RiverOrStream</option>
                        <option value="InsideToilet">InsideToilet</option>
                        <option value="OutsideToilet">OutsideToilet</option>
                        <option value="NoLaterine">NoLaterine</option>
                        <option value="NoDumpsite">NoDumpsite</option>
                        <option value="HaveDumpsite">HaveDumpsite</option>

                        </select>
                    </td>
                </tr>
            </table>
 <?php
	include_once('../home/buttons.php');
?>
 </form>
 </div>
  <script type="text/javascript">
   $(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    $( "#dob" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true //this option for allowing user to select from year range
    });
  }

);
</script>
 <?php
	include_once('../home/footerpage.php');
?>