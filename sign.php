<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Events Now</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
          <li>
              <a class="nav-link" href="#">Login </a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <form action="sign1.php" method="post"> 
    <div class="mb-3">
      <label for="name" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email_id</label>
      <input type="email" name="email_id" class="form-control" id="email_id" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <br>
      <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
    </div>
    
    <br>
    <div class="mb-3">
      <label for="phonenumber" class="form-label">Phonenumber</label>
      <
      input type="text" name="phonenumber" class="form-control" id="phonenumber" aria-describedby="emailHelp">
    </div>
    
    <br>
    
    <input type="submit" class="btn btn-danger" value="Submit" />
  </form>
  
  
</body>
</html>