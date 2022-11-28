<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>NAABOl|FIDS</title>
    <style>
        body {
            background-color: black;
            opacity: 0.5;
            background-image: "";
        }

        table {
            border-color: black;

        }

        th {
            color: white;
        }

        td {
            color: white;
        }

        p {
            color: rgb(106, 188, 190);
            color: rgb(138, 224, 9)
        }

        .puerta {
            color: red
        }

        th {
            text-align: center;
        }

        td {
            text-align: center;
        }

        table,
        tr,
        td {
            border: none;
        }

        [class|=titulo_1] {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
        }

        [class|=formulario] {
            background-color: white
        }
    </style>
</head>

<body>

    <div class="row formulario">
        <div class=" col-lg-6">
            <select class=" form-control" name="" id=""> Seleccionar Terminal</select>
        </div>
        <div class=" col-lg-6">
            <select class=" form-control" name="" id=""> Tipo</select>
        </div>
    </div>

    <div class="row">

        <div class=" col-lg-1">
            <img src="{{ asset('resources/plantilla/img/salidas.png') }}" alt="" sizes="" width="80"
                height="80" srcset="">
        </div>
        <div class="col-lg-4">
            <h4 class="titulo_1" style="color: rgb(106, 188, 190)">LLEGADAS</h4>
            <h4 class="titulo_1" style=" color:white ">ARRIVALS</h4>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-4">
            <h4 class="titulo_1" style=" color:white " id="time_1">TIME</h4>
        </div>
    </div>
    <table class="table table-responsive-lg ">
        <thead>
            <tr>
                <th width="30%">
                    <p>LINEA AÉREA</p>ARILINE
                </th>
                <th>
                    <p>HORA</p>TIME
                </th>
                <th width="60%">
                    <p>DESTINO</p>DESTINATION
                </th>
                <th>
                    <p>VUELO</p>FLIGHT
                </th>
                <th>
                    <p>PUERTA</p>GATE
                </th>
                <th>
                    <p>COMENTARIOS</p>REMARKS
                </th>
            </tr>
        </thead>
        <tbody id="table_itin">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <marquee style="color: white" scrolldelay="200" truespeed>
        <p style="color: white"> Este texto se mueve de derecha a izquierda</p>
    </marquee>


    <!-- Modal -->
    <div class="modal fade" id="md_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form_tipoItin">
                    <div class="modal-body">
                        <select name="aero" id="aero" required>
                            <option value="El ALTo">EL ALTO</option>
                            <option value="Viru Viru">VIRU VIRU</option>
                            <option value="Jorge Wilstermann">jorge Wilstermann</option>
                            <option value="Tarija">Tarija</option>
                            <option value="Sucre">Sucre</option>
                        </select>
                        <select name="tipo" id="tipo" required>
                            <option value="L">LLEGADAS</option>
                            <option value="S">SALIDAS</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Cargar Itinerario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
    <script src="{{ asset('resources/js/JQ/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('resources/js/inti.js') }}"></script>

</body>

</html>
