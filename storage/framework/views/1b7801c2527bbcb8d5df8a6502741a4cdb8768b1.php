<?php $__env->startSection('content'); ?>



<section class="left-container">
    <header>
        <h1>Indique e Realize</h1>
        <h2>
            Traga seus amigos para o nosso time e ajude-os a se conectar também
        </h2>
    </header>
    <p>É bem facinho, quer ver?</p>
    <p>
        Preencha o nome, e-mail e telefone do seu amigo e aguarde ele entrar
    </p>
    <form name="indique" onsubmit="return validarFormIndicacao()">
        <input name="nome" type="text" placeholder="NOME" required />
        <div id="msgemail" class="msg"></div>
        <input name="email" type="text" placeholder="EMAIL" required />
        <input name="telefone" type="text" placeholder="TELEFONE" />
        <input type="submit" value="INDICAR" />
    </form>
</section>
<aside class="right-container">
    <img src="img/cel.png" />
</aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/matheus/Documentos/2020.2/web/talk222/resources/views/indique.blade.php ENDPATH**/ ?>