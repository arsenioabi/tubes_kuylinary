<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preload" as="style" 
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\styling.css">
    <title>Admin Login</title>
</head>

<body>
    <section class="login-section">
        <div class="card-login">
            <h3>KUYLINARY!</h3>
            <form class="form" action="/logadmin" method="post">
                <?php echo csrf_field(); ?>

                <?php if($message = Session::get("failed")): ?>
                    <strong style="color:red"><?php echo e($message); ?> </strong>
                <?php endif; ?>
                <div class="form-group">
                    <label for="text">Username</label>
                    <input type="text" class="form-input" name="username" placeholder="Enter your username" id="text">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-input" name="password" placeholder="Enter your password" id="password">
                </div>

                <button type="submit" name="submit" class="btn">Log in</button>
            </form>
        </div>

        <p class="text-create-account">Don't have an account?<a href="<?php echo e(route('register')); ?>" class="text-sign-up">Register</a></p>
        <p class="text-create-account">Back To <a href="<?php echo e(route('login')); ?>" class="text-sign-up">Login Page</a></p>
    </section>
</body>
</html><?php /**PATH /Users/Salma/Documents/kuylinary/resources/views/login/loginadmin.blade.php ENDPATH**/ ?>