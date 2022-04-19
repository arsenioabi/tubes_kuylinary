<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css\stylelog.css')); ?>">
</head>

<body>
    <header class="main-header">
        <div class="header-wrapper">
            <div class="main-logo">KUYLINARY!</div>
        </div>
    </header>
    <div class="signin-container">
        <div class="signin-header-wrapper">
            <h1>Login As</h1>
        </div>

        <div class="signin-buttons-wrapper">
            <div class="signin-breeder-wrapper">
            <a href="<?php echo e(url('loginadmin')); ?>" class="signin-btn">Admin</a>
            </div>
            <div class="signin-customer-wrapper">
            <a href="<?php echo e(url('loginuser')); ?>" class="signin-btn">User</a> 
            </div>
        </div>
        <p class="signin-customer-wrapper">Back To <a href="<?php echo e(route('index')); ?>" class="textclick">Homepage</a></p>
    </div>
</body>
</html><?php /**PATH /Users/Salma/Documents/kuylinary/resources/views/login/loginas.blade.php ENDPATH**/ ?>