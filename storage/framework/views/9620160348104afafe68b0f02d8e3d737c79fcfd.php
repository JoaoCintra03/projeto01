<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar bg-body-tertiary mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Unialfa</a>
      </div>
    </nav>


    <div class="container">
      <div class="card mb-4">
        <div class="card-header">
          Detalhes do Produto: <?php echo e($product->nome); ?>

        </div>
        <div class="card-body">
          <p><strong>ID:</strong> <?php echo e($product->id); ?></p>
          <p><strong>Nome:</strong> <?php echo e($product->nome); ?></p>
          <p><strong>Marca:</strong> <?php echo e($product->marca); ?></p>
          <p><strong>Preço:</strong> R$ <?php echo e($product->preco); ?></p>

          <a class="btn btn-success mt-3" href="/products">
            Voltar para a lista de produtos
          </a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\Users\UniALFA\Documents\desenvolvimento_laravel\projeto01\resources\views/products/show.blade.php ENDPATH**/ ?>