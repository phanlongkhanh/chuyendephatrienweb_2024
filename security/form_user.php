<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
$_user_id = NULL; 
$errors = []; 


if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id);
}

// Kiểm tra 
if (!empty($_POST['submit'])) {
    // kiểm tra ten phù gợp
    if (empty($_POST['name'])) {
        $errors['name'] = "Tên là bắt buộc.";
    } elseif (!preg_match("/^[A-Za-z0-9]{5,15}$/", $_POST['name'])) {
        $errors['name'] = "Tên chỉ chứa ký tự A-Z, a-z, 0-9 và có độ dài từ 5 đến 15 ký tự.";
    }

    // kiểm tra password lan 1
    if (empty($_POST['password'])) {
        $errors['password'] = "Mật khẩu là bắt buộc.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*()])[A-Za-z0-9~!@#$%^&*()]{5,10}$/", $_POST['password'])) {
        $errors['password'] = "Mật khẩu phải có độ dài từ 5 đến 10 ký tự và bao gồm chữ thường, chữ hoa, số và ký tự đặc biệt.";
    }

    if (empty($errors)) {
        $_user_id = $_SESSION['user_id'] ?? NULL; 
        if (!empty($_user_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        unset($_SESSION['user_id']); 
        header('Location: list_users.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <?php include 'views/meta.php'; ?>
</head>
<body>
    <?php include 'views/header.php'; ?>
    <div class="container">
        <?php if ($user || !isset($_user_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User Form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_user_id; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name']; ?>' required>
                    <?php if (isset($errors['name'])): ?>
                        <div class="text-danger"><?php echo $errors['name']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (isset($errors['password'])): ?>
                        <div class="text-danger"><?php echo $errors['password']; ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
