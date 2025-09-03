<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do produto</title>
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
                Detalhes do Produto: {{ $product->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $product->id }}</p>
                <p><strong>Nome:</strong> {{ $product->nome }}</p>
                <p><strong>Marca</strong> {{ $product->marca }}</p>
                <p><strong>Preço:</strong> {{ $product->preco }}</p>
            
                <a class="btn btn-success" href="/products">
                    Voltar para a lista de produtos
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>