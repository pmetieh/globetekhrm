<?php
include_once('../admin/headrepage_admin.php');
include_once('../home/utils.php');
include_once('../home/connect.php');
?>
<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 10/16/2014
 * Time: 6:07 AM
 */
function getSanitationStatus(Array $selectedValues){
    $status="";
    foreach($selectedValues as $value)
    {

        $status.=$value."_";

        echo $value. '<br/>';
    }
    $status = substr($status, 0, (strlen($status) - 1));
    echo $status;
    return $status;
}

function extractAddressDetails($address)
{
    $components = explode("-", $address);
    // var_dump($components);
    return $components;
}

/*function alertphp($message)
{
    echo '<script type="text/javascript" >';
    echo 'alert('.'\''. $message.'\''.');';
    // echo 'alert('.'\'' .  'Location: '. $_POST['location'].'\''.')';
    echo '</script>';
}*/
?>

<div id="main_div" style="margin-left: 210px;">
    <h3>List of Registered Houses</h3>
<?php


$mysqlcon = new Connection();

$houseAddress = "30-1010-B-13";


$query_str = 'select * from houses'; //  where houseAddress='.'"'.$houseAddress.'"';
alertphp($query_str);
// $query_str = 'update houses set teamNo =?, reportNo=? where houseAddress=?';
    // print_r($mysqlcon);
    $stmt_query = $mysqlcon->mysql->query($query_str);
    // print_r($stmt_insert);'
 //var_dump($stmt_query);
  $numCols = $stmt_query->field_count;
     //$result = $stmt_query->fetch_assoc();
  echo 'Number of registered houses  '.'<b>'.$stmt_query->num_rows.'</b>';
    //print_r($result);
   //alertphp('Num of rows '. $result->
   echo '<br/><br/><br/><br/>';

    echo '<table border="1">';
    echo '<tr>'.
        '<th>HouseAddress</th>'.
        '<th>Team</th>'.
        '<th>ReportAuthor</th>'.
        '<th>TypeOfStructure</th>'.
        '<th>UtilityOfStructure</th>'.
        '<th>SanitationStatus</th>'.
        '<th class="hidden">County</th>'.
        '<th class="hidden">Zone</th>'.
        '<th class="hidden">Community</th>'.
        '<th>Block</th>'.
        '<th>HouseNum</th>'.
        /*'<th>GPSEutm</th>'.
        '<th>GPSNutm</th>'.*/
        '</tr>';
        while ($result = $stmt_query->fetch_assoc()) {
            echo '<tr>'.
        '<td>'.$result["houseAddress"].'</td>'.
        '<td>'.$result["teamNo"].'</td>'.
        '<td>'.$result["reportNo"].'</td>'.
        '<td>'.$result["typeOfStructure"].'</td>'.
        '<td>'.$result["utilityOfStructure"].'</td>'.
        '<td>'.$result["sanitationStatus"].'</td>'.
        '<td class="hidden">'.$result["county"].'</td>'.
        '<td class="hidden">'.$result["zoone"].'</td>'.
        '<td class="hidden">'.$result["community"].'</td>'.
        '<td>'.$result["block"].'</td>'.
        '<td>'.$result["houseNo"].'</td>'.
        /*'<td>'.$result["gpsEutm"].'</td>'.
        '<td>'.$result["gpsNutm"].'</td>'.*/
        '</tr>';
        }

    echo '</table>';
?>
    <table>
        <tr>
            <td><button id="showDetails"><b>Show Details</b></button></td>
            <td><button id="hideDetails"><b>Hide Details</b></button></td>
        </tr>
    </table>
</div>

    <script type="text/javascript">
        $(function(){


        $("#showDetails").bind("click",  function() {
            alert("Showing details");
            $(".hidden").show();
             }); //"ShowDetails"

            $("#hideDetails").bind("click",  function() {
                alert("Hiding details");
                $(".hidden").hide();
            }); //"ShowDetails"
        });


        function ShowDetails(){
            alert("Showing details");
            $(".hidden").show();
        };
    </script>
<?php
include_once('../home/footerpage.php');
?>