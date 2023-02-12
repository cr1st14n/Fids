let aero = "El Alto";
let tipo = "L";
let dataItin = Array;
let conteoIntentos = 0;
date = new Date();
imgAero = { "BOLIVIANA DE AVIACION": "B50015.gif" };
// TODO ---------
setInterval(() => {
    var today = new Date();
    var now = today.toLocaleTimeString();
    $("#time_1").html(now);
}, 1000);

setInterval(() => {
    cargarItinerario_2();
}, 30000);

let cargarItinerario_2 = () => {
    console.log("iniciando");
    fetch(`/Fids/itin/vuelos?aero=${aero}&tipo=${tipo}`)
        .then((response) => response.json())
        .catch((error) => console.log("Error de data" + error))
        .then((data) => actualizando(data));
};

let actualizando = (data) => {
    console.log(data.length);
    if (data.length == 0) {
        cargarItinerario_2();
    } else {
        // conteoIntentos = 0;
        console.log("con data");
        makeTbodyItin(data);
    }
};

cargarItinerario_2();
function cargarItin() {
    $("#est_11").html(`<i class="fa-solid fa-cog fa-spin"></i>  CARGANDO..
    `);
    // $("#table_itin").html(`<td rowspan="7">CARGANDO...</td>`);
    $.ajax({
        type: "get",
        url: "/Fids/itin/vuelos",
        data: {
            aero: aero,
            tipo: tipo,
        },
        // dataType: "json */
        success: function (response) {
            dataItin = response;
            console.log(dataItin);
            if (response.length <= 0) {
                $("#est_11")
                    .html(`<i class="fa-solid fa-cog fa-spin"></i>Actualizando..
                <i class="fa-solid fa-cog fa-spin fa-spin-reverse"></i>`);
                console.log("actualizando..");
                $("#table_itin").html("sin Itinerario registados");

                return;
            } else {
                $("#est_11").html(``);
            }
        },
    });
}

queryCargaItin = () => {
    fetch(`/Fids/itin/vuelos?aero=${aero}&tipo=${tipo}`)
        .then((response) => response.json())
        .catch((error) => console.log("Error de data"))
        .then((data) => {
            html = makeFilaItin(data);
        });
};

function changeTipo(val) {
    $("#table_itin").html('<tr></tr>');

    if (aero != val) {
        aero = val;
        cargarItinerario_2();
    }
}
function chageTipo(val) {
    if (val == "L") {
        tipo = val;
        $("#img_SL").attr("src", "/Fids/resources/Plantilla/img/llegadas.png");
        $("#desc_ruta").html(`
        <h4 class="titulo_1" style="color: rgb(156, 209, 56)">LLEGADAS <span style=" color:white "> -
                                ARRIVALS</span> </h4>
        `);

        cargarItinerario_2();
    }
    if (val == "S") {
        tipo = val;
        $("#img_SL").attr("src", "/Fids/resources/Plantilla/img/salidas.png");
        $("#desc_ruta").html(`
        <h4 class="titulo_1" style="color: rgb(156, 209, 56)">SALIDAS <span style=" color:white "> -
                                DEPARTURES</span> </h4>
        `);
        cargarItinerario_2();
    }
}
// TODO-----------------
makeTbodyItin = (response) => {
    console.log(response);
    html = response
        .map(function (e, i, val) {
            return makeFilaItin(e);
        })
        .join(" ");
    $("#table_itin").html(html);
};
makeFilaItin = (e) => {
    if ($("#th_destino").offsetWidth <= 100) {
        ruta_1 = `<MARQUEE style="color:white"scrolldelay ="200" truespeed >   <p  style="color: white">${e.RUTA0}  </p></MARQUEE>`;
    } else {
        ruta_1 = `<p  style="color: white">${e.RUTA0}  </p>`;
    }
    circle = "";

    if (e.OBSERVACION == "NUEVA HORA") {
        circle = `<i class="fa-solid fa-circle parpadea" style="color:greenyellow"></i>`;
    }
    if (e.OBSERVACION == "CANCELADO") {
        circle = `<i class="fa-solid fa-circle parpadea" style="color:red"></i>`;
    }
    if (e.OBSERVACION == "EN HORARIO") {
        circle = `<i class="fa-solid fa-circle " style="color:greenyellow"></i>`;
    }
    if (e.OBSERVACION == "PRE-EMBARQUE" || e.OBSERVACION == "PREEMBARCANDO") {
        circle = `<i class="fa-solid fa-circle parpadea" style="color:greenyellow"></i>`;
    }
    if (e.OBSERVACION == "ABORDANDO") {
        circle = `<i class="fa-solid fa-circle parpadea" style="color:greenyellow"></i>`;
    }
    if (e.OBSERVACION == "EN TIERRA") {
        circle = `<i class="fa-solid fa-circle parpadea" style="color:greenyellow"></i>`;
    }
    if (e.OBSERVACION == "DEMORADO") {
        circle = `<i class="fa-solid fa-circle parpadea" style="color:red"></i>`;
    }
    if (e.OBSERVACION == "INFORMES") {
        circle = `<i class="fa-solid fa-circle parpadea" style="color:cyan"></i>`;
    }

    return (h = `
        <tr>
            <td ><img width="60" height="25" src="/Fids/resources/Plantilla/img/Aerolineas/${e.ID_EMPRESA}.png" alt=""></td>
            <td class="celda_1" style="color:white"> ${e.HORA_ESTIMADA}</td>
            <td class="celda_1" style="color:white"> ${e.HORA_REAL}</td>
            <td class="celda_1" style="text-align:center">${ruta_1}</td>
            <td class="celda_1" style="color:white">${e.NRO_VUELO}</td>
            <td class="celda_1" style="color:white" name="puerta" >${e.NRO_PUERTA}</td>
            <td class="celda_1" >${circle}</td>
            <td class="celda_1" style="color:yellow" >${e.OBSERVACION}</td>
        </tr>
        `);
};
