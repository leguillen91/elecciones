<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Elecciones Generales de Honduras</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
       
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">ELECCIONES GENERALES HONDURAS - 2024</span>
  </div>
</nav>
    
<main class="d-flex flex-column align-items-center justify-content-center" style="height: 70vh;">
            <div class="mb-4 text-center">
                <img src="{{ asset('img/id.png') }}" alt="Identidad" class="img-fluid" style="max-width: 150px;">
            </div>
            <form action="" class="text-center w-50">
                <div class="mb-3">
                    <label for="dni" class="form-label">Aquí debes ingresar tu número de identidad</label>
                    <input type="text" class="form-control" id="dni" placeholder="Escribe tu DNI">
                </div>
                <button type="submit" class="btn btn-custom">Siguiente</button>
            </form>
        </main>
        <footer class="text-center py-4">
           
        </footer>
    </div>
</body>
</html>
