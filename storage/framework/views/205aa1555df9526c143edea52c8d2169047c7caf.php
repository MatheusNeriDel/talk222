<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Talk222')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="navbar" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul>
                <li>
                    <a href="<?php echo e(url('/')); ?>">
                        <h1><?php echo e(config('app.name', 'Talk222')); ?></h1>
                    </a>
                </li>
                <?php if(Route::has('sobre')): ?>
                <li>
                    <a href="<?php echo e(url('/sobre')); ?>" class="item">SOBRE</a>
                </li>
                <?php endif; ?>
                <?php if(Route::has('sobre')): ?>
                <li>
                    <a href="<?php echo e(url('/indique')); ?>" class="item">INDIQUE</a>
                </li>
                <?php endif; ?>
                <?php if(Route::has('sobre')): ?>
                <li>
                    <a href="<?php echo e(url('/fale_conosco')); ?>" class="item">FALE CONOSCO</a>
                </li>
                <?php endif; ?>
            </ul>
        </header>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html><?php /**PATH /home/matheus/Documentos/2020.2/web/talk222/resources/views/layouts/app.blade.php ENDPATH**/ ?>