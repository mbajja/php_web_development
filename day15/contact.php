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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="hobbies.html">Hobbies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="profile.html">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

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