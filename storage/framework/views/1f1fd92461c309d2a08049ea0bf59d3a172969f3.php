
<?php $__env->startSection('title', 'Detalhe do cliente'); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Detalhes do Cliente: <?php echo e($client->nome); ?>

    </div>
    <div class="card-body">
        <p><strong>ID:</strong> <?php echo e($client->id); ?></p>
        <p><strong>Nome:</strong> <?php echo e($client->nome); ?></p>
        <p><strong>Endereço:</strong> <?php echo e($client->endereco); ?></p>
        <p><strong>Observação:</strong> <?php echo e($client->observacao); ?></p>
    
        <a class="btn btn-success" href="/clients">
            Voltar para a lista de clientes
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Usuario\Documents\frameworks-php\projeto01\resources\views/clients/show.blade.php ENDPATH**/ ?>