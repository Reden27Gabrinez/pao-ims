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

    // delete personnel to database
    if(isset($_GET['DeletePersonnel']))
    {
        $id = $_GET['DeletePersonnel'];

        $query = "DELETE FROM users WHERE id=? ";
        $stmt  = $conn->prepare($query);
        $stmt  -> bind_param("i",$id);
        $stmt  -> execute();
        $stmt       -> close();

        $conn       -> close();

        header('location:index.php?page=ManagePersonnel');
        $_SESSION['response']="Successfully Deleted!";
        $_SESSION['res_type']="danger";
    }
    if(isset($_POST['update_personnel']))
    {
        $id         = $_POST['personnel_id'];

        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $contact    = $_POST['contact'];
        $sex        = $_POST['sex'];
        $position   = $_POST['position'];
        $username   = $_POST['username'];
        $password   = md5($_POST['password']);

        $query = "UPDATE users SET username=?, password=?, name=?, email=?,contact=?,sex=?,position=? WHERE id=? ";
        $stmt   = $conn->prepare($query);
        $stmt   -> bind_param("sssssssi",$username,$password,$name,$email,$contact,$sex,$position,$id);
        $stmt   -> execute();
        $stmt   -> close();


        $conn   -> close();

        $_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php?page=ManagePersonnel');
    }

?>