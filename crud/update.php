<?php
include 'dbconnect.php';

if(isset($_POST['submit'])){
    $id=$_GET['updateid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    </head>
    <body> 
        <?php
        if(isset($_GET['updateid'])){
            $id=$_GET['updateid'];
            $query="select * from `crud` where id=$id";
            $result=mysqli_query($con,$query);
            if($result){
                $row=mysqli_fetch_assoc($result);
                echo '
                <form class="container" method="post">
                <div class="mb-3">
                        <label for="" class="form-label">
                            Id:</label>
                        <input type="text" class="form-control" id="" name="id" value='.$row['id'].' disabled>
                    </div>
                <div class="mb-3">
                        <label for="" class="form-label">
                            Name:</label>
                        <input type="text" class="form-control" id="" name="name" value='.$row['name'].'>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value='.$row['email'].' aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">
                            Mobile:</label>
                        <input type="text" class="form-control" id="" name="mobile" value='.$row['mobile'].'>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value='.$row['password'].' id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" value="submit" name="submit">update</button>
                </form>';
            }
        }
        ?>
    </body>
</html>