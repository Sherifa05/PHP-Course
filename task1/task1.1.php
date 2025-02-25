<!--task1-->
<?php
$database_username='mohamed';
$database_password=123;
$show= false;
$message="";
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username == $database_username){
        if($password==$database_password){
            $message= "Welcome to the website";
        }else{
            $message= "Incorrect Password";
        }
    }else{
        $message= "Incorrect Username";
    }
    $show=true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 col-md-3">
            <h4 class="text-center text-secondary">Login</h4>
            <?php if($show): ?>
            <div class="message text-center" style="font-weight:bold; color:blue">
            <?= $message?>
            </div>
            <?php endif; ?>
            <form action="" method="post">
            <div class="mb-3">
                <label for="">Username:</label>
                <input type="text" name="username" placeholder="Username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" class="form-control" required>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary" type="submit" name="login">Login</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
