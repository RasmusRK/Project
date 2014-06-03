<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
 
$error_msg = "";
 
if (isset($_POST['uid'], $_POST['p'])) {
    // Sanitize and validate the data passed in
    $uid = filter_input(INPUT_POST, 'uid', FILTER_SANITIZE_NUMBER_INT);
    $uid = filter_var($uid, FILTER_VALIDATE_INT);
    if (!filter_var($uid, FILTER_VALIDATE_INT)) {
        $error_msg .= '<p class="error">Det indtastede flyklub id er ikke gyldigt</p>';
    }
 
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    if (empty($error_msg)) {
        // Create a random salt
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("UPDATE users SET password = ?, salt = ? WHERE id = ?")) {
            $insert_stmt->bind_param('sss', $password, $random_salt, $uid);
            // Execute the prepared query.
            $insert_stmt->execute();
        }
        header('Location: ./administrator.php');
    }
}


