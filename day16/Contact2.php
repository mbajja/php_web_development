<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet"href="stylesheet.css">
    <link rel="stylesheet"href="Bootstrap/css/bootstrap.min.css">
    <title>Contact page</title>
  </head>
  <body background-color: blue;> 
          <?php
                include 'nav.html';
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
                                <input type="text"class="form control"id="name"placeholder="Enter your firstName"name="firstName">
                            </div>
                            <div class="mb-3">
                              <label>secondName</label>
                              <input type="text"class="form control"id="name"placeholder="Enter your secondName"name="secondName">
                          </div>
                          
                            <div class="mb-3">
                              <label>email</label>
                              <input type="email"class="form control"id="name"placeholder="Email"name="email">
                            </div>
                            <div class="mb-3">
                              <label>course</label>
                              <input type="text"class="form control"id="name"placeholder="Course"name="course">
                          </div>
                          <div class="mb-3">
                            <label>telephone</label>
                            <input type="number"class="form control"id="name"placeholder="Telephone number"name="telephone">
                        </div>
                            <button type="submit"class="btn btn-info">Send Message</button>
                          </form>
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