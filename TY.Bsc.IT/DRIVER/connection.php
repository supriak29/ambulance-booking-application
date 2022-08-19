<?php

$servername = "localhost";
$username = "root";
$db = "ambulance";
$password = "";

//create connection
$conn = new mysqli($servername, $username, $password, $db);

//check connection
if($conn->connect_error){
    die("Connection error");
}

//define new variables
$dname = $dphone = $dpassword = $hosp =$file1 = $file2 = "";

/*
if(isset($_POST['submit'])){
    $dname = $_POST['dname'];
    $dphone = $_POST['dmphone'];
    $dpassword = $_POST['dpassword'];
    $hosp = $_POST['hosp'];
}
*/
/*upload picture
if(isset($_POST['submit'])){

  $file1 = addslashes(file_get_contents($_FILES['license']['image1']));
  $file2 = addslashes(file_get_contents($_FILES['aadhar']['image2']));
 
  $dname = $_POST['dname'];
  $dphone = $_POST['dmphone'];
  $dpassword = $_POST['dpassword'];
  $hosp = $_POST['hosp'];
}
*/



$statusMsg = "";

//file upload directory
$targetDir = "uploads/";

if(isset($_POST['submit'])){
    //LICENSE
    if(!empty($_FILES['license']['name'])){
        $file1 = basename($_FILES['license']['name']);
        $targetFilePath = $targetDir.$file1;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        //allow certain file formats
        $allowTypes = array('jpg','jpeg','png','pdf');

        if(in_array($fileType, $allowTypes)){
            //upload file to server
            if(move_uploaded_file($_FILES['license']['tmp_name'], $targetFilePath)){
                //insert image file name into database
                $insert = "INSERT INTO driver_details('Dlicense') VALUE('$file1'),NOW())";

                if($insert){
                    $statusMsg = "The file ".$filename." has been uploaded successfully.";
                }
                else{
                    $statusMsg = "File upload failed, please try again.";
                }
            }
            else{
                $statusMsg  = "Sorry, there was an error uploading your file";
            }
        }
        else{
            $statusMsg = "Sorry, only jpg, jpeg, png and pdf files are allowed to upload.";
        }
    }
    else{
        $statusMsg = "Please select a file to upload";
    }
}







$sql = "INSERT INTO driver_details('Dname','Dmobile','Dpassword','Dhospital')
        VALUES('$dname','$dphone','$dpassword','$hosp')";

header("location:driverTrack.html");

?>