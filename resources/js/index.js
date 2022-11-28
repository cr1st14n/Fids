$("#btn_mod_1").click(function (e) {
    e.preventDefault();
    $.ajax({
        type: "get",
        url: "int_vue/",
        data: {},
        // dataType: "dataType",
        success: function (response) {
            $('#body_1').html(response);
        },
    });
});
