<?php


    try{
        require once "dbconnect.php";

        $query = "INSERT INTO registration (firstName, secondName, email, course, telephone) VALUES(:firstName, :secondName, :email, :course, :telephone);";

        $st = mysqli_prepare($dbconnect,$query);
        mysqli_stmt_bind_param($st, "ssssi", $fName, $sName, $email, $course, $telephone);
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $fName =$_POST["firstName"];
            $sName =$_POST["secondName"];
            $email =$_POST["email"];
            $course =$_POST["course"];
            $telephone =$_POST["telephone"];
        if( mysqli_stmt_execute($st)){
            echo "Submitted successfully";
        }
        $stmt = $pdo->prepare($query);
        $stmt->bindParam[":firstName",$fName;
        $stmt->bindParam(":secondName",$sName);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":course",$course);
        $stmt->bindParam(":telephone",$telephone);
        $stmt->execute();

        header("Location: ../index.php")
    }
}
?>