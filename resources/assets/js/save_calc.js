$('.form-calc-save button[type=submit]').click(function(e){
    e.preventDefault();

    $('#response div').remove();
    $('#save_button').text(' Guardant...');
    $('#save_button').append('<span id="loading" class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>');

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
            $('#loading').remove();
            $('#save_button').text('Guarda');
            $('#response').append('<div class="alert alert-info"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>El calcul ha sigut guardat correctament</div>')
            console.log(data);
        },
        error: function(data){
            $('#loading').remove();
            $('#save_button').text('Guarda');
            $('#response').append('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>No hem pogut guardar el seu calcul</div>');
            console.log(data);
        }
    });
});


