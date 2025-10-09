
<?php $__env->startSection('title', 'Editar Cliente'); ?>
<?php $__env->startSection('content'); ?>
<h1>Editar Cliente</h1>
<form action="<?php echo e(route('clients.update', $client)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input value="<?php echo e($client->nome); ?>" type="text" id="nome" class="form-control" name="nome" placeholder="digite o seu nome">
    </div>

    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input value="<?php echo e($client->endereco); ?>" type="text" id="endereco" class="form-control" name="endereco" placeholder="digite o seu endereço">
    </div>

    <div class="mb-3">
        <label for="observacao" class="form-label">Observação</label>
        <textarea name="observacao" id="observacao" class="form-control" placeholder="digite a observação"><?php echo e($client->observacao); ?></textarea>
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Documents\frameworks-php\projeto01\resources\views/clients/edit.blade.php ENDPATH**/ ?>