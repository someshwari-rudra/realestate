<?php

$con = mysqli_connect('localhost', 'root', '', 'myrealestate');

// if ($con) {
//     echo "connected to database";
// } else {
//     echo 'failed to connect with database';
// }


if (isset($_POST['reg_btn'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,  $_POST['password']);
    $cpassword = mysqli_real_escape_string($con,  $_POST['confirmPassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);


    if (!empty($_POST['username']) || !empty($_POST['email']) || !empty($_POST['password']) || !empty($_POST['confirmPassword'])) {
        $email_query = "select * from registration where email = '$email' OR username = '$username'";
        $query = mysqli_query($con, $email_query);

        $email_count = mysqli_num_rows($query);
        if ($email_count > 0) {
            echo 'email allready exist';
        } else {
            $insertquery = "INSERT INTO registration  (username, email, password, cpassword) 
                VALUES('$username', '$email', '$pass','$cpass')";

            $iquery = mysqli_query($con, $insertquery);
            if ($iquery) {
?>
                <script>
                    alert("inserted successfull");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("inserted failed");
                </script>
<?php
            }
        }
    }
}



?>