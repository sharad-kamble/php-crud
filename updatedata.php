<?php
$username = $_REQUEST[ 'user' ];
$password = $_REQUEST[ 'pass' ];
$id = $_REQUEST[ 'id' ];
$name = $_REQUEST[ 'name' ];
$email = $_REQUEST[ 'email' ];
$sub = $_REQUEST[ 'sub' ];
$company = $_REQUEST[ 'company' ];
$phone = $_REQUEST[ 'phone' ];
$message = $_REQUEST[ 'message' ];
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>

<body>

    <form action='updateprocess.php' method='POST'>
        <input type='text' name='id' readonly value="<?php echo $id; ?>" required><br><br>
        <!-- //type = can be hidden -->
        <label for=''>username</label>
        <input type='text' name='user' value="<?php echo $username;?>" required><br><br>
        <label for=''>Password</label>
        <input type='password' name='pass' value="<?php echo $password;    ?>" required><br><br>

        <label for=''>name</label>
        <input type='text' name='name' value="<?php echo $name;    ?>" required><br><br>

        <label for=''>email</label>
        <input type='email' name='email' value="<?php echo $email;    ?>" required><br><br>

        <label for=''>subject</label>
        <input type='text' name='sub' value="<?php echo $sub;    ?>" required><br><br>

        <label for=''>Company</label>
        <input type='text' name='company' value="<?php echo $company;    ?>" required><br><br>

        <label for=''>Phone</label>
        <input type='tel' name='phone' value="<?php echo $phone;    ?>" required><br><br>

        <label class='form-label'>Gender</label>
        <div class='form-check'>
            <input class='form-check-input' type='radio' name='gender' id='male' value='male' <?php if ( $gender == 'male' ) {
    echo 'checked';
}
?> required>
            <label class='form-check-label' for='male'>Male</label>
        </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio' name='gender' id='female' value='female' <?php if ( $gender == 'female' ) {
    echo 'checked';
}
?> required>
            <label class='form-check-label' for='female'>Female</label>

            <label for=''>Phone</label>
            <input type='text' name='message' value="<?php echo $message;    ?>" required><br><br>

            <input type='submit' value='Update Data'>

    </form>

</body>

</html>