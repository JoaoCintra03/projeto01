<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Unialfa</a>
      </div>
    </nav>

    <div class="container">
      <h1 class="mb-4">Lista de Produtos</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Preço</th>
            <th>Detalhes</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($product->id); ?></td>
              <td><?php echo e($product->nome); ?></td>
              <td><?php echo e($product->marca); ?></td>
              <td>R$ <?php echo e(number_format($product->preco, 2, ',', '.')); ?></td>
              <td>
                <a href="<?php echo e(route('products.show', $product)); ?>" class="btn btn-primary btn-sm">
                  Ver detalhes
                </a>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\Users\UniALFA\Documents\desenvolvimento_laravel\projeto01\resources\views/products/index.blade.php ENDPATH**/ ?>