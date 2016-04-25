<?php
	include_once('utils.php');
?>
<?php
    
	$custId = $_REQUEST['custId'];//'PM2014';
    alert('customer ID : '.$custId);

	$mysqlcon = new mysqli("localhost", "root", "", "cms");
    
    //get the pic size
    $pic_size_query_string = 'select OCTET_LENGTH(image) size from pics';
    $pic_stmt = $mysqlcon->query($pic_size_query_string);
    $pic_reslut = $pic_stmt->fetch_assoc();
    $filesize = $pic_reslut['size'];
    
    alert('image size '.$filesize);
    
    $query_string = 'select * from pics where custId='.'\''.$custId.'\'';
    alert($query_string);
    
    $stmt = $mysqlcon->query($query_string);
    $result = $stmt->fetch_assoc();
    $image = $result['image'];
   
    
    print_r($stmt);
    echo "<br/>";
    print_r($result);
    ob_end_clean();
    header('Content-type: image/jpeg');
    header('Content-disposition: inline; filename="pic.jpp"');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.$filesize);
    echo $image;
?>