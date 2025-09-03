<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Unialfa</a>
        </div>
    </nav>

    <div class="container">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\Usuario\Documents\frameworks-php\projeto01\resources\views/clients/show.blade.php ENDPATH**/ ?>