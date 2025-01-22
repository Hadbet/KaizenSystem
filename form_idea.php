<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/Grammer_Logo.ico">
    <title>Kaizen System</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
</head>
<body class="vertical  light  ">
<div class="wrapper">
    <?php
    require_once('data/header.php');
    ?>
    <?php
    require_once('data/navegador.php');
    ?>
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Idea de mejora.</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Llene el formulario de manera correcta.</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-2">
                                    <p class="mb-2"><strong>Tipo de idea</strong></p>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Idea Kaizen</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Idea Seguridad</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" name="customRadio" id="customRadio3"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">Idea 5'S</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" name="customRadio" id="customRadio4"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">Ahorro</label>
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Oportunidad</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="example-email">Solucion</label>
                                        <input type="text" id="example-email" name="example-email" class="form-control"
                                               placeholder="">
                                    </div>
                                </div> <!-- /.col -->


                                <div class="col-md-12">
                                    <label for="example-email">Participantes / El primero que ingreses sera el
                                        champion</label>
                                    <form class="form-inline" id="participantForm">
                                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="nominaInput"
                                               placeholder="Nomina">
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="nombreInput"
                                               placeholder="Nombre">
                                        <select class="custom-select mb-2 mr-sm-2" id="areaSelect">
                                            <option selected>Area...</option>
                                            <option value="1">APU 1</option>
                                            <option value="1">APU 2</option>
                                            <option value="1">APU 3</option>
                                            <option value="1">CALIDAD</option>
                                            <option value="1">LOGISTICA</option>
                                            <option value="1">INGENIERIA</option>
                                            <option value="1">MANTENIMIENTO</option>
                                            <option value="2">RH</option>
                                            <option value="3">CONTROLLING</option>
                                            <option value="3">EHS</option>
                                            <option value="3">GPS</option>
                                            <option value="3">COMPRAS</option>
                                            <option value="3">FINANZAS</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary mb-2">Agregar</button>
                                    </form>
                                </div>

                                <div class="col-md-12">
                                    <table class="table table-bordered table-hover mb-0" id="participantTable">
                                        <thead>
                                        <tr>
                                            <th>Nomina</th>
                                            <th>Nombre</th>
                                            <th>Area</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <br><br>
                                    <button type="submit" onclick="guardarDaily()" class="btn btn-success mb-2 float-right text-white">Enviar
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div> <!-- / .card -->

                </div> <!-- .col-12 -->
                <div class="col-12 text-center">
                    <img style="width: 40%" src="assets/images/Recurso 11 (2).png">
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->


    </main> <!-- main -->
</div> <!-- .wrapper -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src="js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');


    $('#participantForm').on('submit', function (e) {
        e.preventDefault();

        var nomina = $('#nominaInput').val();
        var nombre = $('#nombreInput').val();
        var area = $('#areaSelect').val();

        var newRow = '<tr><td>' + nomina + '</td><td>' + nombre + '</td><td>' + area + '</td><td><button class="btn btn-danger">Quitar</button></td></tr>';

        $('#participantTable tbody').append(newRow);
    });

    $('#participantTable').on('click', '.btn-danger', function () {
        $(this).closest('tr').remove();
    });

    function guardarDaily() {
        var tipoIdea;
        var oportunidad;
        var solucion;
        var id;

        // Obtén todas las filas de la tabla
        var rows = document.querySelectorAll('#participantTable tbody tr');

        // Itera sobre las filas
        for (var i = 0; i < rows.length; i++) {
            // Obtén las celdas de la fila actual
            var cells = rows[i].querySelectorAll('td');

            // Obtén los datos de las celdas
            var nomina = cells[0].innerText;
            var nombre = cells[1].innerText;
            var area = cells[2].innerText;

            // Imprime los datos o haz algo con ellos
            console.log('Nomina: ' + nomina + ', Nombre: ' + nombre + ', Area: ' + area);
        }
    }

</script>
</body>
</html>