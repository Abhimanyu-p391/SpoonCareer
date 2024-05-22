<?php
    $conn = mysqli_connect("localhost","id19913727_root","A@t030615jhunjhun","id19913727_career");

    if(!$conn){
        echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>not able to establish Database Connection</h3>";
    }

    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);

    if(isset($_REQUEST["new_post"])){
        $company_name = $_REQUEST["company_name"];
        $qualification = $_REQUEST["qualification"];

        $sql = "INSERT INTO posts(company_name, qualification) VALUE('$company_name','$qualification')";
        
        mysqli_query($conn, $sql);
        header("Location: index.php?info=added");
        exit();

    }

    if(isset($_REQUEST['id'])){
        $id =  $_REQUEST['id'];

        $sql = "SELECT * FROM posts WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    }


    if(isset($_GET['search'])){
        $filter = $_GET['search'];
        $qua = "SELECT * FROM posts WHERE company_name LIKE '%$filter%' ";
        $qua_run = mysqli_query($conn,$qua);
    }
    else{
        $qua = "SELECT * FROM posts ORDER BY id DESC";
        $filter = "";
        $qua_run = mysqli_query($conn,$qua);
    }
    

?>