<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $user = $userModel->findUserById($id);

    if ($user) {
        $userModel->deleteUserById($id);
    } else {
        echo "Bạn Không tìm thấy ID cần xóa";
        exit();
    }
}
header('location: list_users.php');
?>