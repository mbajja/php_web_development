
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet"href="stylesheet.css">
    <link rel="stylesheet"href="Bootstrap/css/bootstrap.min.css">
    <title>Contact page</title>
  </head>
  <body background-color: blue;> 
 

    <div class="container-fluid">
      
      <!--nav row -->
      <div class="row"style="border:4px solid green">
            <?php
            include 'nav.html';
            ?>
    </div>


    <?php
      if (issest($_GET['id'])&& is_numeric($_GET['id'])){
        $id = $_GET['id'];
        require_once "includes/dbconnect.php";
        $query = "SELECT * FROM registration1 WHERE id = ?";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $d = mysqli_fetch_assoc($results)
      
    ?>
      <!-- Contact form row -->
      <div class="row" style="border:4px solid blue">
        <div class="col-lg-6">
          <h1>Contact Me</h1>
          <div class ="container mt-5">
            <div class="row justify-content center">
              <form action="formhandler.php"method="post">
                <div class="mb-3">
                    <label>firstName</label>
                    <input type="text"class="form control"id="name"placeholder="Enter your firstName"<?php echo $d['firstName']; ?>">
                </div> 
                <div class="mb-3">
                  <label>secondName</label>
                  <input type="text"class="form control"id="name"placeholder="Enter your secondName"
                  value= "<?php echo $d['secondName']; ?>">
              </div>
              
                <div class="mb-3">
                  <label>email</label>
                  <input type="email"class="form control"id="name"placeholder="Email"value= "<?php echo $d['email']; ?>">
                </div>
                <div class="mb-3">
                  <label>course</label>
                  <input type="text"class="form control"id="name"placeholder="Course"value= "<?php echo $d['course']; ?>">
              </div>
              <div class="mb-3">
                <label>telephone</label>
                <input type="number"class="form control"id="name"placeholder="Telephone number"value= "<?php echo $d['telephone']; ?>">
            </div>
                <button type="submit"class="btn btn-info">Send Message</button>
              </form>
              <?php
      }?> 

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="images/image2.PNG" alt="My Image"width=100%>
        </div>
    
    
       
      </div>
    
    </div>
    <!-- Footer row -->
    <div class="row" style="border:4px solid red">
      <footer class="bg-dark text-light py-3">
        <div class="container text-center">
        <p>Copy; 2023 My Website. All Rights reserved.</p>
      </footer>
    </div>
  </body>
</html>




    <?php
    require_once "includes/dbconnect.php";
     $query = "SELECT * FROM registration WHERE id = ?";
     $stmt = mysqli_prepare($connect, $query);
     mysqli_stmt_bind_param($stmt, "i", $id);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     $data = mysqli_fetch_assoc($results)
      
      