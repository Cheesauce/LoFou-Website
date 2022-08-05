<?php


//      for login.php      //
if (isset($_POST['login-button'])) {
    $conn = mysqli_connect('localhost','root','','forms');

    if($conn === false){
        die('Connection Failed : '.mysqli_connect_error());
    }
    
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    
    $sql = "INSERT INTO loginmain VALUES ('','$Username', '$Password')";
    
    if(mysqli_query($conn, $sql)){
        include 'retrieve.php';
    }
    
    mysqli_close($conn);
}






//        for submit.php        //
if (isset($_POST['found-submit'])) {
    $conn = mysqli_connect('localhost','root','','forms');

    if($conn === false){
        die('Connection Failed : '.mysqli_connect_error());
    }

    $ObjectName = $_POST['ObjectName'];
    $Date = date('y-m-d', strtotime($_POST['Date']));
    $Location = $_POST['Location'];
    $Contact = $_POST['Contact'];
    $Email = $_POST['Email'];
    $Category = $_POST['Category'];
    $Note = $_POST['Note'];
    // $Image = $_POST['Image'];

    $sql = "INSERT INTO found VALUES ('','$ObjectName', '$Date', '$Location', '$Contact', '$Email', '$Category', '$Note')";

    if(mysqli_query($conn, $sql)){
        echo "Successfully posted!";
    }

    mysqli_close($conn);
}
        

//      for retrieve.php      //
if (isset($_POST['retrieve-submit'])) {
    $conn = mysqli_connect('localhost','root','','forms');

    if($conn === false){
        die('Connection Failed : '.mysqli_connect_error());
    }
    
    $FObjectName = $_POST['FObjectName'];
    $FDate = date('y-m-d', strtotime($_POST['FDate']));
    $FLocation = $_POST['FLocation'];
    $FContact = $_POST['FContact'];
    $FEmail = $_POST['FEmail'];
    $FCategory = $_POST['FCategory'];
    $FNote = $_POST['FNote'];
    // $Image = $_POST['Image'];
    
    $sql = "INSERT INTO retrieve VALUES ('','$FObjectName', '$FDate', '$FLocation', '$FContact', '$FEmail', '$FCategory', '$FNote')";
    
    if(mysqli_query($conn, $sql)){
        echo "Successfully posted!";
    }
    
    mysqli_close($conn);
}


?>