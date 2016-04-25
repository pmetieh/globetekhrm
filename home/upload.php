<br />
<?php
	
    function alert($message)
    {
        echo '<script type="text/javascript" >';
        echo 'alert('.'\''. $message.'\''.');';
       // echo 'alert('.'\'' .  'Location: '. $_POST['location'].'\''.')';
        echo '</script>';
    }
?>
<?php
//upload();

/*** check if a file was submitted 
print_r($_FILES);


  
 if(!isset($_FILES['deedScan']))
    {
        echo '<p>Please select a file</p>';
    }
  else
    {
    try    ***/
   //   {
       // upload();
        /*** give praise and thanks to the php gods 
        echo '<p>Thank you for submitting</p>';
      }
    catch(Exception $e)
      {
        echo '<h4>'.$e->getMessage().'</h4>';
      }
    }***/
?>

<?php
/**
 *
 * the upload function
 * 
 * @access public
 *
 * @return void
 *
 */
//function upload()
if(isset($_POST['submit'])){
     $maxsize = 99999999;
     //get the form data posted to this script
       $custId = 'PM29087';//$_POST['custId'];
       $location = 'Nimba'; //$_POST['location'];
       $landsize = '500'; //$_POST['landsize'];
       $nameOnDeed = 'Paul C. Metieh';//$_POST['nameOnDeed'];
       $originalbuyer = 'Paul C Metieh';// $_POST['originalbuyer'];
       $originalSeller = 'GOL'; //$_POST['originalSeller'];
       $probationDate = date('m d Y'); // $_POST['probationDate'];
       $volNum = '5'; //$_POST['volNum'];
       $pageNum = '15';// $_POST['volNum'];
       
    // print_r($_POST);
     
     
     
     
     
     
/*** check if a file was uploaded ***/
//if(is_uploaded_file($_FILES['deedScan']['tmp_name']) && getimagesize($_FILES['deedScan']['tmp_name']) != false)
 if(isset($_FILES['deedScan']) && $_FILES['deedScan']['size'] < $maxsize&& $_FILES['deedScan']['type'] == 'application/pdf' )
    {


    //if(isset($_FILES['deedScan']))
   // {
//        $imgfp = fopen($_FILES['deedScan']['tmp_name'], 'rb');
//        move_uploaded_file($_FILES['deedScan']['tmp_name'], '../scandocs/'.$_FILES['deedScan']['name']);
       //echo $_FILES['deedScan']['name'];
    	//echo //$_FILES['deedScan']['name'];
        $name = '../scandocs/'.$_FILES['deedScan']['name'];
       
        print_r($_FILES);
        echo '<br />';
        echo '<br />';
        echo '<br />';


        /***  get the image info. ***/
        $size = filesize($name);
        $fileSize = filesize($_FILES['deedScan']['tmp_name']);
          
         //print_($size);
          //echo filesize()
        /*** assign our variables ***/
         $type = $_FILES['deedScan']['type'];
         $scanDocFile = fopen($_FILES['deedScan']['tmp_name'], 'rb');
         //$size = $size[3];
         $name = $_FILES['deedScan']['name'];
         echo 'File Name '.$name.'<br/>';
         echo 'FileSize '.$fileSize.'<br />';
         echo 'Filetype '.$type.'<br/>'.'<br/>';
        

    /***  connect to mysql dtatbase ***/
        $mysqli = new mysqli("localhost", "root", "", "cms");
        if ($mysqli === false) 
        {   
            die("ERROR: Could not connect. " . mysqli_connect_error()); 
        } 
        else
        { 
           alert('Connected!');
           $custId = 'coleman01';
           //proceed to insert the data
          
           $stmt = $mysqli->prepare('insert into documents(custId, scanDoc, fileName, filetype, 
                                            fileSize,nameOnDeed, landLocation,originalBuyer, originalSeller, 
                                            pageNumber, probationDate, upLoadDate, volNum, landSize)
                                            values(?,?,?,?,?, ?, ?, ?, ?, ?,?,?, ?)');
           $stmt->bind_param('sbssissssissid',$custId,$scanDocFile , $name, $type, $fileSize,$nameOnDeed, $location, 
                                $originalbuyer, $originalSeller, $pageNum,$probationDate, date('m d Y'), $volNum, $landSize);
           $stmt->execute();
           printf("%d Row inserted.\n", $stmt->affected_rows);
           echo '<br />';
           $stmt->close();
           
          
  
        }
         //}
    }
else
    {
    // if the file is not less than the maximum allowed, print an error
        //throw new Exception("Unsupported File Format!".'<br/>' ." Must be a PDF file");
        alert('Unsupported File Format! Must be a PDF file');
        header('http://localhost:90/lhdi/home/surveying.php', true);
        
    }
}
?>
<form enctype="multipart/form-data" id="form" name="form" action="" method="post">
    <input type="file" id="deedScan" name="deedScan"/>
    <br/>
    <input type="submit" name="submit" value="Upload File"/>
</form>

<?php

///*** some basic sanity checks ***/
//if(filter_has_var(INPUT_GET, "image_id") !== false && filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT) !== false)
//    {
//    /*** assign the image id ***/
//    $image_id = filter_input(INPUT_GET, "image_id", FILTER_SANITIZE_NUMBER_INT);
//    try     {
//        /*** connect to the database ***/
//        $dbh = new PDO("mysql:host=localhost;dbname=testblob", 'username', 'password');
//
//        /*** set the PDO error mode to exception ***/
//        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//        /*** The sql statement ***/
//        $sql = "SELECT image, image_type FROM testblob WHERE image_id=$image_id";
//
//        /*** prepare the sql ***/
//        $stmt = $dbh->prepare($sql);
//
//        /*** exceute the query ***/
//        $stmt->execute();
//
//        /*** set the fetch mode to associative array ***/
//        $stmt->setFetchMode(PDO::FETCH_ASSOC);
//
//        /*** set the header for the image ***/
//        $array = $stmt->fetch();
//
//        /*** check we have a single image and type ***/
//        if(sizeof($array) == 2)
//            {
//            /*** set the headers and display the image ***/
//            header("Content-type: ".$array['image_type']);
//
//            /*** output the image ***/
//            echo $array['image'];
//            }
//        else
//            {
//            throw new Exception("Out of bounds Error");
//            }
//        }
//    catch(PDOException $e)
//        {
//        echo $e->getMessage();
//        }
//    catch(Exception $e)
//        {
//        echo $e->getMessage();
//        }
//        }
//  else
//        {
//        echo 'Please use a real id number';
//        }
?>