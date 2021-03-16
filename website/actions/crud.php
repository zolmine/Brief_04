<?php
    require 'connection.php';

    //for adding data
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass   = $_POST['password'];
    $class  = $_POST['class'];

    $sqli = "INSERT INTO staff (full_name,email,password,class,idadm) values('$name','$email','$pass','$class',1)";
    $stm  =  $connection->query($sqli);
    header("location: ../dash-admin.php");
    
}

    //for editing data
        if(isset($_POST['edit'])){
            $id = $_POST['id_edited'];
            $name = $_POST['name_edited'];
            $email = $_POST['email_edited'];
           
            $sqli = "UPDATE staff SET full_name = '$name', email = '$email' WHERE staff.idstf = $id";
            $stm  = $connection->query($sqli);
            
            header("location: ../dash-admin.php");

        }
    //for removing data
       
?>