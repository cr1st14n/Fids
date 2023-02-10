<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/inti.css') }}">
    <title>NAABOl|FIDS</title>

</head>

<body>
    <div class="card" style="background-color: rgb(7, 7, 88)">
        <div class=" card-body">
            <table width="100%" class=" table-responsive table-striped">
                <tr style="border: 0ch">
                    <td style="width: 20%">
                        <div class="form-group ">
                            <select class=" form-control form-control-sm" name="" id="inp_terminal"
                                onchange="changeTipo(this.value)"
                                style="background-color:rgba(7, 35, 88, 0.986); color:white ">
                                <option value="Viru Viru">VIRU VIRU</option>
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
                    </td>
                    <td style="width: 20%">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="tipo_1" value="L"
                                onclick="chageTipo(this.value)" class="custom-control-input" checked="on" checked>
                            <label class="custom-control-label" for="customRadioInline1"
                                style="color: white">LLEGADAS</label>
                        </div>
                    </td>
                    <td style="width: 20%">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="tipo_1" value="S"
                                onclick="chageTipo(this.value)" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1"
                                style="color: white">SALIDAS</label>
                        </div>

                    </td>

                    <td style="width: 10%">
                        <img id="img_1" src="{{ asset('resources/plantilla/img/LOGO_NAABOL_0.png') }}">

                    </td>
                </tr>
            </table>
        </div>

    </div>

    <div class="card" style="background-color: black">
        <div class=" card-body">
            <table width="100%" class=" table-responsive table-striped">>
                <tr>
                    <td style="width: 33%">
                        <img id="img_SL" src="{{ asset('resources/plantilla/img/llegadas.png') }}" alt=""
                            sizes="" width="100" height="100" srcset="" style=" button: 0px">
                    </td>
                    <td style="width: 33%">
                        <h4 class="titulo_1" style="color: rgb(156, 209, 56)">LLEGADAS <span style=" color:white "> -
                                ARRIVALS</span> </h4>
                    </td>
                    <td style="width: 33%">
                        <h4 class="titulo_1" style=" color:white " id="time_1">TIME</h4>
                        <h5 class="titulo_1" style=" color:rgb(158, 18, 18) " id="est_11"></h5>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card" style="background-color: black">
        <div class=" card-body">
            <table class="table table-responsive-lg " id="th_destino">
                <thead>
                    <tr>
                        <th width="10%">
                            <p>LINEA AÉREA</p>ARILINE
                        </th>
                        <th width="10%" style="font-size: 15px">
                            <p>HORA ESTIMADA</p>ESTIMATED TIME
                        </th>
                        <th width="10%" style="font-size: 15px">
                            <p>HORA REAL</p>ACTUAL TIME
                        </th>
                        <th width="20%" id="th_destino">
                            <p>DESTINO</p>DESTINATION
                        </th>
                        <th width="10%">
                            <p>VUELO</p>FLIGHT
                        </th>
                        <th width="10%">
                            <p>PUERTA</p>GATE
                        </th>
                        <th width="1%" align="rigth"></th>
                        <th width="10%">
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
    <div class="wrapper">
        <div class="border">
            <div class="space">
                <div class="loading">
                </div>
            </div>
        </div>
    </div>

    <marquee style="color:white" scrolldelay="300" truespeed>
        <p style="color: white"> NAABOL | El cumplimiento de los itinerarios es
            responsabilidad exclusiva de la Aerolínea. Ultima actualización: (Hace 2 minutos)

        </p>
    </marquee>

    <script src="{{ asset('resources/js/JQ/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('resources/js/inti.js') }}"></script>

</body>

</html>
