<?php
// Initialize $gender to an empty string to avoid undefined index warnings
$gender = isset( $_POST[ 'gender' ] ) ? $_POST[ 'gender' ] : '';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>

<body>
    <h2>CRUD Operation</h2>

    <form action='adddata.php' method='GET'>
        <label for=''>username</label>
        <input type='text' name='user' required><br><br>

        <label for=''>Password</label>
        <input type='password' name='pass' required><br><br>

        <label for=''>name</label>
        <input type='text' name='name' required><br><br>

        <label for=''>email</label>
        <input type='email' name='email' required><br><br>

        <label for=''>subject</label>
        <input type='text' name='sub' required><br><br>

        <label for=''>company</label>
        <input type='text' name='company' required><br><br>

        <label for=''>Phone</label>
        <input type='tel' name='phone' required><br><br>

        <div class='col-md-6'>
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
            </div>
        </div>

        <label for='message'>Enter your message:</label><br><br>
        <textarea id='message' name='message' rows='5' cols='30'
            placeholder='Write something here...'></textarea><br><br>

        <input type='submit' value='Insert Data'>
        <a href='viewdata.php'>View Data</a>
    </form>

</body>

</html>