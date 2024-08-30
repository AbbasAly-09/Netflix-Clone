<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Netflix</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <!-- place navbar here -->

      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <!-- <img
                  src="https://www.edigitalagency.com.au/wp-content/uploads/Netflix-logo-red-black-png.png"
                  class="img-fluid rounded" width="100px" height="75px" alt="" /> -->
            <h2>
              <b> <span class="logo">NETFLIX</span></b>
            </h2>
          </a>
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php" aria-current="page"
                  ><b>Home</b>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"><b>About us</b></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="movies.php"><b>Movies</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php"><b>Login</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="bg-dark py-5">
        <div
          class="container-fluid bg-dark p-3"
          id="reg-box"
        >
          <div class="row justify-content-center align-items-center g-2">
            <div class="">
             <form method="post" action="login.html">
                <h2 class="text-center text-light"><b>REGISTRATION</b></h2>

                <div class="mb-3">
                  <label for="" class="form-label mt-3 text-light"
                    ><b>Name :</b></label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Enter Your Name"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="" class="form-label text-light"
                    ><b>Phone No :</b></label
                  >
                  <input
                    type="number"
                    class="form-control"
                    name="phone"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Enter Your Number"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="" class="form-label text-light"
                    ><b>Email :</b></label
                  >
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Enter Your Email"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="" class="form-label text-light"
                    ><b>Password :</b></label
                  >
                  <input
                    type="password"
                    class="form-control"
                    name="pass"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Enter Your Password"
                    required
                  />
                </div>

                <center>
                 <button type="submit" id="reg-btn" class="btn">Register</button>
                </center>

                <hr style="color: white" />

                <center>
                  <p class="msg">
                    Already Have An Account ? &nbsp;
                    <a
                      href="login.html"
                      class="login-link login"
                      
                      >Login</a
                    >
                  </p>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="text-secondary bg-dark">
      <!-- place footer here -->
      <center>
        <b>Copyright &copy; 2024. All Rights Reserved By Abbas Ali.</b>
      </center>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

 <?php

include 'netflixdb.php';

if ($_SERVER["REQUEST_METHOD"]==="POST") {

    $sql = "insert into reg values (?,?,?,?)";

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $input = $conn -> prepare($sql);

    $input -> bind_param("siss",$name,$phone,$email,$pass);

    if ($input -> execute()) {
      echo "inserted";
    } else {
      echo "error";
    }
    
    
}



 ?> 