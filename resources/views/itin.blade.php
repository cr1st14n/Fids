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
    <div class=" card" style="background-color: rgb(7, 7, 88)">
        <div class=" card-body">
            <form>
                <div class="row" style="background-color: rgb(7, 7, 88)">
                    <div class="col-sm-3">
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
                        <img id="img_1" src="{{ asset('resources/plantilla/img/LOGO_NAABOL_0.png') }}"
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
                <div class=" col-lg-2">
                    <img id="img_SL" src="{{ asset('resources/plantilla/img/llegadas.png') }}" alt=""
                        sizes="" width="100" height="100" srcset="" style=" button: 0px">
                </div>
                <div class="col-lg-4" id="desc_ruta">
                    <h4 class="titulo_1" style="color: rgb(156, 209, 56)">LLEGADAS <span style=" color:white " > - ARRIVALS</span> </h4>
                </div>
                <div class="col-lg-4">
                    <h4 class="titulo_1" style=" color:white " id="time_1">TIME</h4>
                    <h5 class="titulo_1" style=" color:white " id="est_11">TIME</h5>
                </div>
            </div>
            <table class="table table-responsive-lg " id="th_destino">
                <thead>
                    <tr>
                        <th width="10%"><p>LINEA AÉREA</p>ARILINE</th>
                        <th width="10%" style="font-size: 15px"><p>HORA ESTIMADA</p>ESTIMATED TIME</th>
                        <th width="10%" style="font-size: 15px"><p>HORA REAL</p>ACTUAL TIME</th>
                        <th width="20%" id="th_destino"><p>DESTINO</p>DESTINATION</th>
                        <th width="10%"><p>VUELO</p>FLIGHT</th>
                        <th width="10%"><p>PUERTA</p>GATE</th>
                        <th width="1%" align="rigth"></th>
                        <th width="10%"><p>COMENTARIOS</p>REMARKS</th>
                    </tr>
                </thead>
                <tbody id="table_itin">
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <marquee style="color:white" scrolldelay="200" truespeed>
        <p style="color: white"> NAABOL | El cumplimiento de los itinerarios es
            responsabilidad exclusiva de la Aerolínea. Ultima actualización: (Hace 2 minutos)

        </p>
    </marquee>

    <script src="{{ asset('resources/js/JQ/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('resources/js/inti.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
