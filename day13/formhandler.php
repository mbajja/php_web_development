<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname =$_POST["firstName"];
    $sname =$_POST["secondName"];
    $email =$_POST["email"];
    $course =$_POST["course"];
    $telephone =$_POST["telephone"];

    try{
        require once "dbconnect.php";
        $query = "INSERT INTO registration (firstName, secondName, email, course, telephone) VALUES(:firstName, :secondName, :email, :course, :telephone);";
        
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":firstName",$fName);
        $stmt->bindParam(":secondName",$sName);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":course",$course);
        $stmt->bindParam(":telephone",$telephone);
        $stmt->execute();

        header("Location: ../index.php")
    }
}
?>