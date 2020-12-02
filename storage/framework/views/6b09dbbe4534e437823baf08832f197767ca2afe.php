<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php if(auth()->guard()->guest()): ?>
                <section class="left-container">
                    <header>
                        <h1>Seja bem vindo</h1>
                    </header>
                    <h2>Aqui você se conecta de verdade</h2>
                    <p>
                        Conheça o novo website com serviços de chat que está crescendo cada vez
                        mais. Faça já o seu cadastro!
                    </p>

                    <?php if(Route::has('register')): ?>
                    <button>
                        <a href="<?php echo e(route('register')); ?>">CADASTRE-SE</a>
                    </button>
                    <?php endif; ?>

                    <p>
                        Caso já seja cadastrado, basta fazer login
                    </p>
                    <?php if(Route::has('login')): ?>
                    <button>
                        <a href="<?php echo e(route('login')); ?>">LOGIN</a>
                    </button>
                    <?php endif; ?>
                    <?php else: ?>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <button>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                        </button>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                    <?php endif; ?>
                </section>
                <aside class="right-container">
                    <img src="img/cel.png" />
                </aside>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/matheus/Documentos/2020.2/web/talk222/resources/views/home.blade.php ENDPATH**/ ?>