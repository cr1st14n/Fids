let aero = "El Alto";
let tipo = "L";
date = new Date();

imgAero = { "BOLIVIANA DE AVIACION": "B50015.gif" };

cargarItin();
setInterval(() => {
    var today = new Date();
    var now = today.toLocaleTimeString();
    $("#time_1").html(now);
}, 1000);

setInterval(() => {
    cargarItin();
}, 20000);

$("#time_1").click(function (e) {
    e.preventDefault();
    $("#md_1").modal("show");
});

$("#form_tipoItin").submit(function (e) {
    e.preventDefault();

    aero = $("#aero").val();
    tipo = $("#tipo").val();
    $("#md_1").modal("hide");
    cargarItin();
});
function cargarItin() {
    $.ajax({
        type: "get",
        url: "/Fids/itin/vuelos",
        data: {
            aero: aero,
            fecha: `${date.getFullYear()}-${
                date.getMonth() + 1
            }-${date.getDay()}`,
            tipo: tipo,
        },
        // dataType: "json */
        success: function (response) {
            console.log(response);
            html = response
                .map(function (e, i, val) {
                    if ($("#th_destino").offsetWidth <= 100) {
                        ruta_1 = `<MARQUEE style="color:white"scrolldelay ="200" truespeed >   <p  style="color: white">${e.RUTA}  </p></MARQUEE>`;
                    } else {
                        ruta_1 = `<p  style="color: white">${e.RUTA}  </p>`;
                    }
                    circle = "";
                    if (e.OBSERVACION == "NUEVA HORA") {
                        circle = `<i class="fa-solid fa-circle" style="color:greenyellow"></i>`;
                    }
                    if (e.OBSERVACION == "ARRIBO") {
                        circle = `<i class="fa-solid fa-circle" style="color:greenyellow"></i>`;
                    }
                    if (e.OBSERVACION == "CANCELADO") {
                        circle = `<i class="fa-solid fa-circle" style="color:greenyellow"></i>`;
                    }
                    if (e.OBSERVACION == "EN HORARIO") {
                        circle = `<i class="fa-solid fa-circle" style="color:greenyellow"></i>`;
                    }
                    if (e.OBSERVACION == "PRE-EMBARQUE") {
                        circle = `<i class="fa-solid fa-circle" style="color:greenyellow"></i>`;
                    }

                    return (h = `
                <tr>
                    <td><img width="60" height="25" src="/Fids/resources/Plantilla/img/Aerolineas/${e.ID_EMPRESA}.png" alt=""></td>
                    <td>${circle}</td>
                    <td> ${e.HORA_ESTIMADA}</td>
                    <td style="text-align:center">${ruta_1}</td>
                    <td>${e.NRO_VUELO}</td>
                    <td style="color:rgb(138, 224, 9)" name="puerta" >${e.NRO_PUERTA}</td>
                    <td style="color:yellow" >${e.OBSERVACION}</td>
                </tr>
                `);
                })
                .join(" ");
            $("#table_itin").html(html);
        },
    });
}

function changeTipo(val) {
    console.log(document.getElementById("th_destino").offsetWidth);
    if (aero == val) {
        return;
    }
    aero = val;
    cargarItin();
}
function chageTipo(val) {
    if (val == "L") {
        tipo = val;
        $("#img_SL").attr("src", "/Fids/resources/Plantilla/img/llegadas.png");
        $("#desc_ruta").html(`
        <h4 class="titulo_1" style="color: rgb(106, 188, 190)">LLEGADAS</h4>
        <h4 class="titulo_1" style=" color:white ">ARRIVALS</h4>
        `);

        cargarItin();
    }
    if (val == "S") {
        tipo = val;
        $("#img_SL").attr("src", "/Fids/resources/Plantilla/img/salidas.png");
        $("#desc_ruta").html(`
        <h4 class="titulo_1" style="color: rgb(106, 188, 190)">SALIDAS</h4>
        <h4 class="titulo_1" style=" color:white ">DEPARTURES</h4>
        `);
        cargarItin();
    }
}
