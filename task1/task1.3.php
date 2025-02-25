<?php
$message = "";
$show = false;
$mypass = "123"; 

if (isset($_POST['change_password'])) {
    $show = true;
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];
    if ($currentPassword == "" || $newPassword == "" || $confirmPassword == "") {
        $message = "All fields are required";
    } 
    elseif ($currentPassword !== $mypass) {
        $message = "Incorrect current password";
    } 
    elseif ($newPassword !== $confirmPassword) {
        $message = "New password does not match";
    } 
    else {
        $message = "Password changed successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container col-md-6">
        <h3 class="text-center my-4 text-primary">Change Password</h3>
        <form method="POST" action="">
            <label class="text-primary">Current Password:</label>
            <input type="password" name="current_password" placeholder="Enter current password" class="form-control my-3">
            
            <label class="text-primary">New Password:</label>
            <input type="password" name="new_password" placeholder="Enter new password" class="form-control my-3">
            
            <label class="text-primary">Confirm New Password:</label>
            <input type="password" name="confirm_password" placeholder="Confirm new password" class="form-control my-3">
            
            <div class="d-grid">
                <button name="change_password" class="btn mt-4 btn-outline-primary">Change Password</button>
            </div>
        </form>

        <?php if ($show): ?>
            <p class="text-primary text-center mt-3"><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
