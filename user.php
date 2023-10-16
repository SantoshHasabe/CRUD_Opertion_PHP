
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
    <div class="container my-5" >
    <h1>Registration Form</h1>
    <form method="POST">
        <div class="mb-3">
            <label >Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label >Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email id" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label >Mobile No</label>
            <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile no" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label >Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" required>
        </div>
  
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button  class="btn btn-primary"><a href="display.php" class="text-light text-decoration-none">View</a></button>
</form>
    </div>
  </body>
</html>

<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud`(name,email,mobile,password)
    values('$name','$email', '$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted Successfully";
        // header('location:display.php');
        ?>
    <script type="text/javascript">
        alert("Data Submitted Sucessfully");
        window.open("http://localhost/CRUD1/display.php","_self");
    </script>
    <?php
    }else{
        die(mysqli_error($con));
    }
}
?>


