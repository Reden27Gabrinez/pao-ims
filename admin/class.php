<?php
    session_start();
    include('../configuration/config.php');

    // add personnel to database
    if(isset($_POST['AddPersonnel']))
    {
        $role       = "Municipality";
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $contact    = $_POST['contact'];
        $sex        = $_POST['sex'];
        $assigned   = $_POST['assigned'];
        $position   = $_POST['position'];
        $username   = $_POST['username'];
        $password   = md5($_POST['password']);

        $query = "INSERT INTO users (role,username,password,name,municipality,email,contact,sex,position) VALUES  (?,?,?,?,?,?,?,?,?)";
        $stmt  = $conn->prepare($query);
        $stmt  -> bind_param("sssssssss",$role,$username,$password,$name,$assigned,$email,$contact,$sex,$position);
        $stmt  -> execute();
        $stmt  -> close();

        header("location: index.php?page=AddPersonnel");
    }

?>