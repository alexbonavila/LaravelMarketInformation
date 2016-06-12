$('.form-calc-save button[type=submit]').click(function(e){
    e.preventDefault();

    $('#response div').remove();

    var formData = new FormData(document.getElementById("form-calc-save"));

    $.ajax({
        headers: {
            "X-Authorization": $('#api_key').attr('content')
        },
        type: "POST",
        url: $('#form-calc-save').attr('action'),
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        success: function(data) {
        },
        error: function(data){
        }
    });
});



//# sourceMappingURL=all.js.map
