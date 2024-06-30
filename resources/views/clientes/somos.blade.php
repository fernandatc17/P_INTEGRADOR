@extends('layouts.app')

@section('content')

<!-- CONTENIDO -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos</title>
    <!-- Incluir Bootstrap CSS -->
    <style>
        .section-title {
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .square {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .square:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .square h2 {
            color: #007bff;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center section-title">Quiénes Somos</h1>
                <p class="text-center">Somos una empresa dedicada a [inserte aquí la descripción de su empresa]. Con más de [inserte aquí el número] años de experiencia, nos enorgullece ofrecer productos/servicios de alta calidad a nuestros clientes.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="square">
                    <h2>Misión</h2>
                    <p>En TechNet Solutions nos comprometemos a brindar soluciones tecnológicas integrales y de alta calidad para satisfacer las necesidades de nuestros clientes, contribuyendo así al desarrollo y crecimiento de sus negocios</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square">
                    <h2>Visión</h2>
                    <p>Ser reconocidos como líderes en el mercado peruano de tecnología, siendo la primera opción para empresas y usuarios individuales en la búsqueda de equipos de cómputo, componentes tecnológicos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="square">
                    <h2>Negocios</h2>
                    <p>TechNet Solutions es una empresa peruana dedicada a proporcionar soluciones completas en tecnología de la información. Nos especializamos en la venta de equipos de cómputo, así como en la comercialización de componentes, suministros y periféricos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center section-title">Nuestro Equipo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="team-member  ">
                    <img src="{{asset('assets/img/jeremias.jpeg') }}" alt="Colaborador 1">
                    <h3>Jeremias George Coronel </h3>
                    <p>Co-Fundador</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{asset('assets/img/fernanda.jpeg') }}"alt="Colaborador 2">
                    <h3>Abigail Fernanda Ticlavilca</h3>
                    <p>Co-Fundadora</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="{{asset('assets/img/angelo.jpeg') }}" alt="Colaborador 3">
                    <h3>Angelo Dylan Quispe</h3>
                    <p>Co-Fundador</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos a través de [inserte aquí la información de contacto].</p>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS y jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<!-- FIN DE CONTENIDO -->
 

@endsection