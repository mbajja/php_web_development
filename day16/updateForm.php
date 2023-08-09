<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php
    require_once "includes/dbconnect.php";
     $query = "SELECT * FROM registration WHERE id = ?";
     $stmt = mysqli_prepare($connect, $query);
     mysqli_stmt_bind_param($stmt, "i", $id);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     $data = mysqli_fetch_assoc($results)
