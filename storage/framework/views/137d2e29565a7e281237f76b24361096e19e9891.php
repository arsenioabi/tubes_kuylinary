<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preload" as="style"
       href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\styling.css">
    <title>Register As User</title>   
</head>  

<body>
    <section class="login-section">
        <div class="card-login">
            <h3>Register</h3>
            <form class="form" action="/registuser" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="text">Username</label>
                    <input type="text" class="form-input" name="username" placeholder="Enter your username" id="text">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-input" name="password" placeholder="Enter your password" id="password">
                 </div>
                 <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-input" name="email" placeholder="Enter your email address" id="email">
                </div>
                <button type="submit" name="submit" class="btn">Register</button>
            </form>
        </div>
        <p class="text-create-account">Back To <a href="<?php echo e(route('register')); ?>" class="text-sign-up">Registerpage</a></p>
        </div>

    </section>
</body>
</html><?php /**PATH /Users/Salma/Documents/kuylinary/resources/views/register/registuser.blade.php ENDPATH**/ ?>