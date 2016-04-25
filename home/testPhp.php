<?php
	include_once('connect.php');
    
    
    $mysql = new Connection();
    
    print_r($mysql);
    $custId = 'PM2014';
?>
<html>
<head><title>Drop Down Menu</title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="jQuery/jquery-1.11.0.js" type="text/javascript"></script>
<script type="text/javascript" src="jQuery/jquery-te-1.4.0.min.js"></script>
<link href="css/jquery-te-1.4.0.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript">
    var ge;
    google.load("earth", "1", {"other_params":"sensor=true_or_false"});

    function init() {
      google.earth.createInstance('map3d', initCB, failureCB);
    }

    function initCB(instance) {
      ge = instance;
      ge.getWindow().setVisibility(true);
    }

    function failureCB(errorCode) {
    }

    google.setOnLoadCallback(init);
</script>
</head>
<link type="text/css" href="css/menu.css" rel="stylesheet" media="all"/>
<body>
<div>
<ul>
    <li>
        <a href="">Birds</a>
        <ul>
            <li><a href="">Ratites</a></li>
            <li><a href="">Fowl</a></li>
            <li><a href="">Neoaves</a></li>
        </ul>
    </li>
    <li>
        <a href="">Mammals</a>
        <ul>
            <li><a href="">Monotremes</a></li>
            <li><a href="">Marsupials</a></li>
            <li><a href="">Placentals</a></li>
        </ul>
    </li>
    <!-- etc. -->
</ul>

</div>

<div id="map3d" style="height: 400px; width: 600px;"></div>
<div id="textArea">
 <textarea class="editor" name="text1">Articles should be in here</textarea></div>
 
</body>
<script type="text/javascript"> 

  $(".editor").jqte();
</script>

</html>

<?php 
echo "Beginning PHP";
?>
<br/>
<?php
/*$DSN = "host:localhost;dbname=cms";
$user = "root";
$pass = "";
$pdo = new PDO($DSN, $user, $pass);

if($pdo == null)
{
	echo $pdo->errorConnection;
}
*/
$mysqli = new mysqli("localhost", "root", "", "cms"); 
if ($mysqli === false) {   die("ERROR: Could not connect. " . mysqli_connect_error()); } 


$sql = "SELECT * FROM articles";
 if ($result = $mysqli->query($sql))
 {   if ($result->num_rows > 0) 
 {     while($row = $result->fetch_array()) 
 {       echo $row[0] . ":" . $row[4] . "\n";     }     
 $result->close();}
 
 else {     echo "No records matching your query were found.";   } 
 } 
 else {   echo "ERROR: Could not execute $sql. " . $mysqli->error; }  
 echo '<br/>'
// close connection $mysqli->close(); 
?>


<img src="<?php echo 'http://localhost:90/lhdi/home/showpic.php?custId='.$custId ?>" width="150px" height="150px"/>
<?php
	
    //http://localhost:90/lhdi/images/sonnie3.jpg
    
?>
