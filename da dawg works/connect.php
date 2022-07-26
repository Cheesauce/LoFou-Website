<?php
    // $ObjectName = $_POST['ObjectName'];
    // $Date = $_POST['Date'];
    // $Location = $_POST['Location'];
    // $Contact = $_POST['Contact'];
    // $Email = $_POST['Email'];
    // $Category = $_POST['Category'];
    // $Note = $_POST['Note'];
    // $Image = $_POST['Image'];

    // // Database connection
    // $conn = new mysqli('localhost','root','','lost_form');
    // if($conn->connect_error){
    //     die('Connection Failed : '.$conn->connect_error);
    // }
    // else{
    //     $stmt = $conn->prepare("insert into registration(ObjectName, Location, Contact, Email, Category, Note)values(?, ?, ?, ?, ?, ?)");
    //     $stmt->bind_param("ssisss", $ObjectName, $Location, $Contact, $Email, $Category, $Note);
    //     $stmt->execute();
    //     echo "Form succesfully submitted!";
    //     $stmt->close();
    //     $conn->close();
    // }


    
    $conn = mysqli_connect('localhost','root','','lost_form');

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



    $sql = "INSERT INTO form VALUES ('','$ObjectName', '$Date', '$Location', '$Contact', '$Email', '$Category', '$Note')";

    if(mysqli_query($conn, $sql)){
        echo "good shit";
    }

    mysqli_close($conn);
?>