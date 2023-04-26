<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "insert into registration(username,password)
    values('$username', '$password')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}

//$sql="Select * from registration where username = '$username";

//$result=mysqli_query($con, $sql);
//if(result){
  //  $num=mysqli_num_rows($result);
   // if($num>0){
   //     echo "User already exist"
   // }else{

   //    $sql="insert into registration(username,password)
   //     values('$username', '$password') ";
   //    $result=mysqli_query($con,$sql);
   //     if($result){
   //         echo "signup successful";
   //     }else{
   //         die(mysqli_error($con));
   //     }
 //   }
//}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <h1 class="text-center"> Sign up page </h1>
            <div class="container mt-5"> 
            <form action="sign.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your Username"
    name="username"  >

  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your Username"
    name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>

</form>
</div>

                
  </body>
</html>