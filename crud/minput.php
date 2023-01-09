<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
    $name=array();
    $name=array($_POST['name']);
    echo count($name);
    // echo $name;
    $N=count($name);
    var_dump( $_POST['name'] );

    echo $name[0];

    // for($x = 0; $x < $N; $x++) {
    //     echo $name[$x];
    //     echo "<br>";
    // }
    // $sql="";
    // $result=mysqli_query($con,$sql);
    // if($result){
    //     header('location:display.php');
    // }else{
    //     die(mysqli_error($con));
    // }
}
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    </head>
    <body> 
        <form class="container" method="post">
        <div class="mb-3">
                <label for="" class="form-label">
                    Name1:</label>
                <input type="text" class="form-control" id="" name="name[]">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name2:/label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name[]" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">
                    Nmae3:</label>
                <input type="text" class="form-control" id="" name="name[]">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name3:</label>
                <input type="password" class="form-control" name="name[]" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
        </form>
    </body>
</html>