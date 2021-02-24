<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url('assets/img/') ?>logo.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>admin/css/style-login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>

    <div class="container">
        <div class="img">
            <img src="<?= base_url('assets/img/') ?>undraw_posting_photo.svg">
        </div>
        <div class="login-container">
            <form action="<?= base_url('auth') ?>" method="POST">
                <img class="avatar" src="<?= base_url('assets/img/') ?>logoNav.png">
                <h2 style="font-size: 1.5rem;">LDK Ishlah<br> Y.A.I </h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input type="text" name="username" class="input">

                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <button type="submit" class="btn">Login</button>
                <!-- <input type="submit" name="" class="btn" value="Login"> -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/admin/') ?>js/main.js"></script>


</body>

</html>