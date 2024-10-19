<?php
include "conn.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TVPXh4bZmWUYw1Ylgb14jTKpLjlUswjj4+RitVj2PpvzRR7CpHKoUpnPt47YHzQh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">UI-TVET</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Developers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>
  </nav>

  <div class="container">
    <div class="row">
      <div style="width: 40%; margin: 25px auto;">
        <h3 style="text-align: center;">Login Page</h3>
        <form method="POST" action="process.php">
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="log_email" class="form-control" autofocus placeholder="Email">
          </div>
          <div class="form-group">
            <label>Password:</label>
            <input type="password" name="log_pass" class="form-control" autofocus placeholder="Password">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Login">
          </div>
        </form>

        <p>New Here?<a href="#" id="signup-link"> Sign Up</a></p>

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="process.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Enter Password" required></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Student ID</label>
                <input type="text" class="form-control" name="student_id" placeholder="Enter Student ID" required></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Given Name</label>
                <input type="text" class="form-control" name="gname" placeholder="Enter Given Name" required></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name" required></p>
            </div>
            <div class="mb-3">
                <label class="form-label">Family Name</label>
                <input type="text" class="form-control" name="fname" placeholder="Enter Family Name" required></p>
            </div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="register123">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
    // Add an event listener to the sign up link
    document.getElementById('signup-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Trigger the modal
        var myModal = new bootstrap.Modal(document.getElementById('add'));
        myModal.show();
    });
</script>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-j8fSJupzGl+8UW4ik7ZcXEx+2j+MAc0IHdmATDXvg2V89Fc4Fwe+6TWBhoXIIh0z" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>