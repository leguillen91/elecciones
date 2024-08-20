<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Elecciones Generales de Honduras</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="text-center py-4">
            <h1>Simulador de Elecciones Generales de Honduras</h1>
            <p>Aprende sobre el proceso electoral y participa en una votación simulada</p>
        </header>
        <nav class="text-center mb-4">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="{{ route('vistaPE') }}">Proceso Electoral</a></li>
                <li class="nav-item"><a class="nav-link" href="">Candidatos</a></li>
                <li class="nav-item"><a class="nav-link" href="">Votación</a></li>
                <li class="nav-item"><a class="nav-link" href="">Resultados</a></li>
            </ul>
        </nav>
        <div class="container text-center mb-4">
            <div class="row">
                <div class="col-md-6">
                    <h2>Bienvenido a VoteSim</h2>
                    <p>Aprende sobre el proceso electoral de Honduras y participa en nuestra votación simulada.</p>
                    <div>
                        <button  type="button" class="btn btn-danger">Empezar</button>
                        <button  type="button" class="btn btn-info">Más Información</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/vista.png') }}" alt="Imagen de simulación electoral" class="img-fluid">
                </div>
            </div>
        </div>
        <main>
            <section id="proceso-electoral" class="mb-4">
                <h2>Proceso Electoral</h2>
                <p>El proceso electoral en Honduras se lleva a cabo cada cuatro años. Los ciudadanos eligen al presidente, diputados y alcaldes. El proceso incluye la inscripción de votantes, la campaña electoral, la votación, el conteo de votos y la proclamación de resultados.</p>
                <button onclick="location.href='#'"  type="button" class="btn btn-success">Comenzar</button>
            </section>
            <section id="candidatos" class="mb-4">
                <h2>Candidatos</h2>
                <p>En las elecciones generales, varios partidos políticos presentan sus candidatos para los diferentes cargos. Cada candidato tiene una plataforma política con propuestas específicas para mejorar el país. Aquí puedes conocer más sobre cada uno de ellos y sus propuestas.</p>
                <button  type="button" class="btn btn-success">Comenzar</button>
            </section>
            <section id="votacion" class="mb-4">
                <h2>Votación</h2>
                <p>La votación es un derecho y un deber cívico. En esta sección, podrás participar en una votación simulada para entender mejor cómo se lleva a cabo el proceso.</p>
                <button  type="button" class="btn btn-success">Comenzar</button>
            </section>
            <section id="resultados" class="mb-4">
                <h2>Resultados</h2>
                <p>Una vez cerradas las urnas, se procede al conteo de votos. Los resultados se publican y se analizan para entender las tendencias y el comportamiento electoral. Aquí podrás ver los resultados simulados y aprender a interpretarlos.</p>
                <button  type="button" class="btn btn-success">Comenzar</button>
            </section>
           
        </main>
        <footer class="text-center py-4">
           
        </footer>
    </div>
</body>
</html>
