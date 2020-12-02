<?php $__env->startSection('content'); ?>

<section class="left-container">
    <header>
        <h1>Fale conosco</h1>
    </header>
    <h2>Tem alguma sugestão ou reclamação?</h2>
    <h3>Preencha as informações que nosso time te ajuda</h3>
    <form name="feedback" onsubmit="return validarFormFeedback()">
        <input name="nome" type="text" placeholder="NOME" required />
        <div id="msgemail" class="msg"></div>
        <input name="email" type="text" placeholder="EMAIL" required />
        <textarea class="texto" rows="10" cols="60" placeholder="Deixe sua mensagem aqui">
        </textarea>
        <input type="submit" value="ENVIAR" />
    </form>
</section>
<aside class="right-container">
    <img src="img/cel.png" />
</aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/matheus/Documentos/2020.2/web/talk222/resources/views/faleConosco.blade.php ENDPATH**/ ?>