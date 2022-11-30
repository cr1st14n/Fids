<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>NAABOl|FIDS</title>
    <style>
        body {
            background-color: black;
            /* opacity: 0.5;
            background-image: ""; */
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
            margin-bottom: 0%
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

        #img_1 {
            position: fixed;
            top: 5px;
            right: 5px;
            width: 200px;
            height: 50px;
        }

        thead {
            border-top: 3px solid white;
            border-bottom: 3px solid white;
        }

        .parpadea {

            animation-name: parpadeo;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;

            -webkit-animation-name: parpadeo;
            -webkit-animation-duration: 1s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
        }

        @-moz-keyframes parpadeo {
            0% {
                opacity: 1.0;
            }

            50% {
                opacity: 0.0;
            }

            100% {
                opacity: 1.0;
            }
        }

        @-webkit-keyframes parpadeo {
            0% {
                opacity: 1.0;
            }

            50% {
                opacity: 0.0;
            }

            100% {
                opacity: 1.0;
            }
        }

        @keyframes parpadeo {
            0% {
                opacity: 1.0;
            }

            50% {
                opacity: 0.0;
            }

            100% {
                opacity: 1.0;
            }
        }
    </style>
</head>

<body>
    <div class=" card" style="background-color: rgb(7, 7, 88)">
        <div class=" card-body">
            <form>
                <div class="row" style="background-color: rgb(7, 7, 88)">
                    <div class="col-sm-4">
                        <div class="form-group ">
                            <select class=" form-control form-control-sm" name="" id="inp_terminal"
                                onchange="changeTipo(this.value)"
                                style="background-color:rgb(88, 114, 161); color:white ">
                                <option value="Viru Viru">VIRU VIRU</option>
                                <option value="El ALTo" selected>EL ALTO</option>
                                <option value="Jorge Wilstermann">JORGE WILSTERMANN</option>
                                <option value="Rurrenabaque">RURRENABAQUE</option>
                                <option value="Guayamerin">GUAYAMERIN</option>
                                <option value="Potosi">POTOSI</option>
                                <option value="Cobija">COBIJA</option>
                                <option value="Riberalta">RIBERALTA</option>
                                <option value="Oruro">ORURO</option>
                                <option value="Yacuiba">YACUIBA</option>
                                <option value="Trinidad">TRINIDAD</option>
                                <option value="Uyuni">UYUNI</option>
                                <option value="Tarija">TARIJA</option>
                                <option value="Sucre">SUCRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="tipo_1" value="L"
                                onclick="chageTipo(this.value)" class="custom-control-input" checked="on" checked>
                            <label class="custom-control-label" for="customRadioInline1"
                                style="color: white">LLEGADAS</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="tipo_1" value="S"
                                onclick="chageTipo(this.value)" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1"
                                style="color: white">SALIDAS</label>
                        </div>
                    </div>
                    <div class="col-sm-2" style="text-align: left">
                        <img id="img_1" src="{{ asset('resources/plantilla/img/LOGO_NAABOL_0.jpg') }}"
                            alt="" sizes="" width="80" height="80" srcset="">
                    </div>

                </div>
            </form>
        </div>

    </div>
    </div>
    <div class="card" style="background-color: black" style="width: 80%">
        <div class=" card-body">
            <div class="row">

                <div class=" col-lg-1">
                    <img id="img_SL" src="{{ asset('resources/plantilla/img/llegadas.png') }}" alt=""
                        sizes="" width="80" height="80" srcset="">
                </div>
                <div class="col-lg-4" id="desc_ruta">
                    <h4 class="titulo_1" style="color: rgb(106, 188, 190)">LLEGADAS</h4>
                    <h4 class="titulo_1" style=" color:white ">ARRIVALS</h4>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-4">
                    <h4 class="titulo_1" style=" color:white " id="time_1">TIME</h4>
                    <h5 class="titulo_1" style=" color:white " id="est_11">TIME</h5>
                </div>
            </div>
            <table class="table table-responsive-lg " id="th_destino">
                <thead>
                    <tr>
                        <th width="30%">
                            <p>LINEA AÉREA</p>ARILINE
                        </th>
                        <th></th>
                        <th>
                            <p>HORA</p>TIME
                        </th>
                        <th width="60%" id="th_destino">
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

                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <marquee style="color: white" scrolldelay="200" truespeed>
        <p style="color: white"> NAABOL | El cumplimiento de los itinerarios es
            responsabilidad exclusiva de la Aerolínea. Ultima actualización: (Hace 2 minutos)

        </p>
    </marquee>


    <!-- Modal -->
    <div class="modal fade" id="md_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form_tipoItin">
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm"
                            data-dismiss="modal">Cancelar</button>
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>

</html>
