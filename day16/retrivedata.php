<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php
 $query = "SELECT * FROM registration1;";
    $result = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_assoc($result)){
        echo"This is the first name" . $data['firstname'] ."And your course is:"
        ."and your second name is:" .$data['firstName'] . "<br />" . '<a href="update.php?id=' .$data['firstName'] '".class="btn btn-sm btn-primary">Edit</a>';
       
    }

    ?>
</body>
</html>