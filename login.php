<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body
    style="background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="login-container">
        <div class="login-card">
            <div class="login-card-header">
                <h2>Sign In</h2>
            </div>
            <div class="login-card-body">
                <form action="includes/login.php" method="POST">
                    <div>
                        <input type="text" name="username" placeholder="username" class="login-card-form"
                            autocomplete="off">
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="password" class="login-card-form">
                    </div>
                    <div class="lgnbtn">
                        <input type="submit" value="Login" class="btn login-button" class="login-card-form">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/js/vendors/jQuery[3.3.1].min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>