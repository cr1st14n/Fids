let aero='El Alto'
let tipo='L'

cargarItin();
setInterval(() => {
    var today = new Date();
    var now = today.toLocaleTimeString();
    $("#time_1").html(now);
}, 1000);

setInterval(() => {
    cargarItin();
}, 20000);

$('#time_1').click(function (e) {
    e.preventDefault();
$('#md_1').modal('show');
});

$('#form_tipoItin').submit(function (e) {
    e.preventDefault();

    aero= $('#aero').val();
    tipo= $('#tipo').val();
    $('#md_1').modal('hide');
    cargarItin()
});


function cargarItin() {
    $.ajax({
        type: "get",
        url: "/Fids/itin/vuelos",
        data: {
            aero: aero,
            fecha: "2022-11-28",
            tipo: tipo,
        },
        // dataType: "json */
        success: function (response) {
            console.log(response);
            html = response
                .map(function (e, i, val) {
                    if (e.RUTA.length > 10) {
                        ruta_1 = `<MARQUEE style="color:white"scrolldelay ="200" truespeed >   <p  style="color: white">${e.RUTA}  </p></MARQUEE>`;
                    } else {
                        ruta_1 = `<p  style="color: white">${e.RUTA}  </p>`;
                    }
                    return (h = `
                <tr>
                    <td>${e.NOMBRE_AEROLINEA}</td>
                    <td>${e.HORA_ESTIMADA}</td>
                    <td style="text-align:center">${ruta_1}</td>
                    <td>${e.NRO_VUELO}</td>
                    <td style="color:rgb(138, 224, 9)" name="puerta" >${e.NRO_PUERTA}</td>
                    <td>${e.OBSERVACION}</td>
                </tr>
                `);
                })
                .join(" ");
            $("#table_itin").html(html);
        },
    });
}
