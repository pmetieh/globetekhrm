<?php 
include_once('utils.php');
include_once('connect.php');
?>

<?php
        
        $custId = 'KM7098';
        $email = 'pmetieh@gmail.com';
        $firstName = 'Paul';
        $surName = 'Metieh';
        $mobileNo = '+231886358855';
        $occupation = 'IT Consultant';
        $country = 'Liberia';
        $address = 'V.P Road Old Road';
        
        //INSERT INTO `cms`.`customers` (`custId`, `firstName`, `surName`, `email`, `mobileNo`, `countryName`, `residentAddr`, `occupation`) 
        //VALUES ('PM2056', 'Paul', 'Metieh', 'pmetieh@gmail.com', '+231886358855', 'Liberia', 'NeeZoe Junction Oldroad', 'IT Consultant');
        
        //email, firstName, surName, mobileNo, occupation, countryName, residentAddr
       // ,?,?,?,?,?,?,?  sssssss
       //, $email, $firstName, $surName, $mobileNo, $occupation, $country, $address
                                                
    
        $mysqlcon = new Connection();
	    $query_str = 'insert into customers(custId, firstName,surName, email, mobileNo, countryName, residentAddr, occupation)'. 
                         ' values(?, ?, ?, ?, ?, ?, ?, ?)';
            alert($query_str);
            $stmt_insert = $mysqlcon->mysql->prepare($query_str);
            print_r($stmt_insert);
            if(!$stmt_insert)
            {
            alert($mysqlcon->mysql->error);
          //  print_r($stmt_insert);
          }
          else{
            $stmt_insert->bind_param('ssssssss', $custId, $firstName, $surName, $email, $mobileNo, $country, $address, $occupation);
            $stmt_insert->execute();
           // print_r($query_status);
            if($stmt_insert->affected_rows > 0) 
            {
                alert('Data saved '.$stmt_insert->affected_rows.' rows inserted');
            }
          }
?>
<head><title>Testing PHP Generated jQuery</title>




</head>
<body>


<div id="pic-container" style="width: 300px;height: 300px; border: green solid thin;">
 
 <img id="image" src="../images/tn_no-image.jpg" width="250px" height="250px"/>
</div>
<?php 
 // if(!isset($POST['submitForm']))
//  {
//    echo '<img id="image" src="../images/tn_no-image.jpg" width="150px" height="150px"/>';
//  }
   $custID = 'AP6714';
   $age = 5;
  $mysqlCon = new Connection();
  $qstr = 'insert into testsql(CustId, age) values(?, ?)';
  if(!($stment = $mysqlCon->mysql->prepare($qstr)))
       alert('Error cannot prepare statement') ;
     else{
        $stment->bind_param('si', $custID, $age);
        $stment->execute();
        $result =   $stment->affected_rows;
        alert($result.' Successfully inserted');
     }
        
  
 // $stment->execute();
// $res = $stment->fetch_assoc();
  
  //$nnumRowsInserted = $res->rowCount();
//  
//  alert($nnumRowsInserted);
//   echo "Chukee.jpg";
   
?>

<?php 
if(!isset($_POST['submitForm']))
{
      $picurl = '../chukee.jpg';
   // echo '<img id="image" src="../images/tn_no-image.jpg" width="150px" height="150px"/>';
    alert('.attr("action", "'.$picurl.'").show()');
    alert('Unsubmitted form');
    hide();
}
?>

 

<?php
     
    if(isset($_POST['submitForm']))
    {
       // print_r($_FILES);
         $filename = $_FILES['pic']['name'];
         move_uploaded_file($_FILES['pic']['tmp_name'], '../scandocs/'.$_FILES['pic']['name']);
         show("../scandocs/".$filename);
//    alert('$(function(){');
//    alert('$('.'\"#image\").'.'css(\"display\"'.', \"none\")');
//    alert('});');background-color
//    alert('</script>');none red
//css("display"'.', "normal")
}
 
?>
<form id="form1" enctype="multipart/form-data" name="form1" action="" method="post">
<input type="file" name="pic" id="pic"/>
<input type="submit" name="submitForm" id="submitForm"/>

</form>
<script type="text/javascript">
//Submit form using ajax
//$(function(){
//    
//    $("#form1").submit(function(){
//        alert('Submitting using jQuery ');
//        $.post("",$("#form1").serialize(), function(data){
//            alert('Ajax posted!');
//            alert("showing image");
//            alert('Posted pic '+data);
//            $("#image").show();
//        });
//        return false;
//    });
//    
//})
</script>
</body>

