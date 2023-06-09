<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SGI</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
@vite('recursos/js/app.js')


<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/searchbuilder/1.4.2/css/searchBuilder.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/datetime/1.4.1/css/dataTables.dateTime.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">


<body class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/lg.png') }}" style="max-width: 50%;max-height: 40px" alt="">
                Farmacia Don Evelio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Compra de medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Venta de medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Rotacion Stock medicamentos</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav ml-auto">
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <li><a href="#" class="nav-link" onclick="this.closest('form').submit()">Cerrar
                                    sesion</a></li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <br><br>
    </header>
    <main class="p-5">
        <h4 class="text-center">Reporte de Rotacion de Stock Medicamentos</h4>
        <table id="example" class="table table-striped" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Nombre Medicamento</th>
                    <th>Fecha Entrada</th>
                    <th>Cantidad Entrada</th>
                    <th>Fecha Salida</th>
                    <th>Cantidad Salida</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre Medicamento</th>
                    <th>Fecha Entrada</th>
                    <th>Cantidad Entrada</th>
                    <th>Fecha Salida</th>
                    <th>Cantidad Salida</th>
                </tr>
            </tfoot>
        </table>
<br>
<br>
<br>
<hr>
        <table id="example1" class="table table-striped" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Nombre Medicamento</th>
                    <th>Rotacion</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre Medicamento</th>
                    <th>Rotacion</th>
                </tr>
            </tfoot>
        </table>
    </main>
</body>
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-muted">Sistema Informacion Gerencial 2023</span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.4.2/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.4.2/js/searchBuilder.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.4.1/js/dataTables.dateTime.min.js"></script>


<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>


<script>
    $(document).ready(function() {
        let table = $('#example').DataTable({
            ajax: '{{ asset('json/detalle_entradas.json') }}',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            columnDefs: [{
                    "type": "date",
                    "targets": 3
                },
                {
                    "type": "date",
                    "targets": 1
                },
            ],
            searchBuilder: true,
            columns: [{
                    data: 'nombreMedicamento'
                },
                {
                    data: 'fechaEntrada'
                },
                {
                    data: 'cantidadEntrada'
                },
                {
                    data: 'fechaSalida'
                },
                {
                    data: 'cantidadSalida'
                }
            ]
        });
        table.searchBuilder.container().prependTo(table.table().container());
    });
</script>

<script>
    $(document).ready(function() {
        let table1 = $('#example1').DataTable({
            ajax: '{{ asset('json/rotacion.json') }}',
            columns: [{
                    data: 'nombreMedicamento'
                },
                {
                    data: 'rotacion'
                }
            ]
        });
        table1.searchBuilder.container().prependTo(table1.table().container());
    });
</script>


</html>
