<?php
if (!empty($_POST['submit'])) {
    // Validate inputs
    if (empty($_POST['name']) || empty($_POST['password'])) {
        // Handle error: required fields missing
        echo "<div class='alert alert-danger'>Name and Password are required!</div>";
    } else {
        // Hash the password
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Prepare user data
        $userData = [
            'id' => $_id,
            'name' => $_POST['name'],
            'password' => $hashedPassword
        ];

        // Insert or update user
        if (!empty($_id)) {
            $userModel->updateUser($userData);
        } else {
            $userModel->insertUser($userData);
        }

        // Redirect after processing
        header('location: list_users.php');
        exit(); // Make sure to exit after header redirection
    }
}