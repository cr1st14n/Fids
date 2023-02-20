<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NAABOL | ITINERARIOS DE VUELOS</title>
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.952);
            color: white;
        }

        .imagen {
            opacity: 0.2;
            position: fixed;
            background-color: black;
            width: 100%;
            height: 100%;
            border: 0px
        }

        #img_1 {
            position: fixed;
            top: 0cm;
            right: 0cm;

            width: 10em;
            height: auto;

        }

        td {
            text-align: center
        }

        p {
            color: rgb(0, 145, 189)
        }

        .titulo_1 {
            font-size: 35px;
        }

        .parpadea {

            animation-name: parpadeo;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;

            -webkit-animation-name: parpadeo;
            -webkit-animation-duration: 2s;
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

        #img_SL {
            width: 150px;
            height: 100px;
        }

        .nameTipo {

            /* color: red; */
            width: 100px;
            height: 30px;
            /* border-color: red */
            content: "laskjdf";
        }

        @media(max-width:30em) {
            .cabezera {
                font-size: 40%;
            }

            .titulo_1 {
                font-size: 70%;
            }

            #img_SL {
                width: 30%;
                height: 30%;
            }

            .d_opciones {
                font-size: 10px
            }

            .tipo_1 {
                font-size: 5px;
            }

            #img_1 {
                width: 6em;
                height: auto;
            }

            .nameTipo {
                font-size: 2px;
                /* color: red; */
                size: 2em;
                width: 50%;
                height: 25px;
                /* border-color: red */
            }

            .text1 {
                font-size: 5px
            }

            .celda_1 {
                font-size: 8px;
            }
        }
    </style>

</head>

<body>
    <img class="imagen" src="resources/img/image_1.jpg" alt="freecodecamp-logo" />
    <img id="img_1" src="{{ asset('resources/plantilla/img/LOGO_NAABOL_0.png') }}">
    <div class="card" style="background-color:rgba(255, 0, 0, 0)">
        <div class=" card-body">
            <table width="100%" class=" table-responsive table-striped" style="position:relative">
                <tr>
                    <td style="width: 30%">
                        <div class="form-group d_opciones" style="text-align: left">
                            <label for="">Aeropuerto:</label>
                            <select class=" form-control form-control-sm d_opciones" name="" id="inp_terminal"
                                onchange="changeTipo(this.value)"
                                style=" color:rgb(255, 255, 255); background-color: rgba(0, 0, 0, 0); size:5cm">
                                <option style="background-color: rgb(0, 0, 0)" value="Viru Viru">VIRU VIRU</option>
                                <option style="background-color: rgba(0, 0, 0)" value="El ALTo" selected>EL ALTO
                                </option>
                                <option style="background-color: rgba(0, 0, 0)" value="Jorge Wilstermann">JORGE
                                    WILSTERMANN</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Rurrenabaque">RURRENABAQUE
                                </option>
                                <option style="background-color: rgba(0, 0, 0)" value="Guayamerin">GUAYAMERIN</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Potosi">POTOSI</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Cobija">COBIJA</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Riberalta">RIBERALTA</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Oruro">ORURO</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Yacuiba">YACUIBA</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Trinidad">TRINIDAD</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Uyuni">UYUNI</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Tarija">TARIJA</option>
                                <option style="background-color: rgba(0, 0, 0)" value="Sucre">SUCRE</option>
                            </select>
                        </div>
                    </td>
                    <td style="width: 30% ">

                        <div class="btn-group btn-group-sm btn-purple" role="group"
                            aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check btn-sm" name="btnradio" id="btnradio1" value="L"
                                onclick="chageTipo(this.value)" checked>
                            <label class="btn btn-outline-info nameTipo" for="btnradio1"></label>

                            <input type="radio" class="btn-check btn-sm" name="btnradio" id="btnradio2" value="S"
                                onclick="chageTipo(this.value)">
                            <label class="btn btn-outline-info nameTipo" for="btnradio2"></label>
                        </div>
                    </td>
                    <td style="width: 33%"></td>
                </tr>
            </table>
            <table width="100%" class=" table-responsive table-striped ">
                <tr>
                    <td style="width: 33%;text-align: left">
                        <img id="img_SL" src="{{ asset('resources/plantilla/img/llegadas.png') }}" alt=""
                            style=" button: 0px">
                    </td>
                    <td style="width: 33%" id="desc_ruta" class="cabezeraInfo">
                        <h4 class="titulo_1" style="color: rgb(156, 209, 56)">LLEGADAS <span style=" color:white "> -
                                ARRIVALS</span> </h4>
                    </td>
                    <td style="width: 33%;text-align: right">
                        <h4 class="titulo_1" style=" color:white " id="time_1">TIME</h4>
                    </td>
                </tr>
            </table>

            <table class="table table-responsive-lg table-striped "
                style="position:relative;border-color: rgb(0, 0, 0)" id="th_destino">
                <thead class=" thead-dark cabezera" style="background-color: black">
                    <tr style="color:white; text-align:center">
                        <th width="10%">
                            LINEA AÉREA
                        </th>
                        <th width="10%">
                            HORA ESTIMADA
                        </th>
                        <th width="10%">
                            HORA REAL
                        </th>
                        <th width="20%" id="th_destino">
                            DESTINO
                        </th>
                        <th width="10">
                            VUELO
                        </th>
                        <th width="10%">
                            PUERTA
                        </th>
                        <th width="1%" align="rigth"></th>
                        <th width="10%">
                            COMENTARIOS
                        </th>
                    </tr>
                </thead>
                <tbody id="table_itin">
                    <tr>
                    </tr>
                </tbody>
            </table>

            <marquee style="color:white" scrolldelay="200" truespeed>
                <p style="color: white"> NAABOL | El cumplimiento de los itinerarios de vuelo es
                    responsabilidad exclusiva de la Aerolínea. Ultima actualización: (Hace 2 minutos)

                </p>
            </marquee>
        </div>
    </div>



    <script src="{{ asset('resources/js/JQ/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('resources/js/inti.js') }}"></script>

</body>

</html>
