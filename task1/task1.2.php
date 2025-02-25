<!--task2-->
<?php
$message = "";
$show = false;
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username == "" || $email == "" || $password == "") {
        $message = "All fields are required";
    }  else {
        $email_Symbol = false;
        $dot_Symbol = false;
        for ($i = 0; $i < strlen($email); $i++) {
            if ($email[$i] == '@') {
                $email_Symbol = true;
            }
            if ($email[$i] == '.') {
                $dot_Symbol = true;
            }
        }
        if ($email_Symbol === false || $dot_Symbol === false) {
            $message = "Invalid Email";
        } else {
            $message = "Registration successful";
        }
    }
    $show=true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6">
        <h3 class="text-center my-4 text-primary"> Registration Form</h3>
        <form  method="POST" action="">
        <label for="username" class="text-primary">Username:</label>
            <input type="text" name="username" placeholder="Username" class="form-control my-3">
            <label for="email" class="text-primary">Email:</label>
            <input type="text" name="email" placeholder="Email" class="form-control my-3">
            <label for="password" class="text-primary">Password:</label>
            <input type="password" name="password" placeholder="Your password" class="form-control my-3">
            <div class="d-grid">
            <button name="register" class=" btn  mt-4 btn-outline-primary"> Submit</button>
            </div>
        </form>
        <?php if ($show): ?>
            <div class="text-primary text-center mt-4"><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
