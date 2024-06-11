$('#sucesso').hide();
$('#erro').hide();


document.getElementById("formulario").addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new formData(this);

    $.ajax({
        type: "POST",
        url: "./assets/php/processar_contato.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            $('#sucesso').show();
            $('#sucesso').html(response);
            $('#erro').hide();
        },
        error: function (response) {
            $('#erro').show();
            $('#erro').html(response);
            $('#sucesso').hide();
        }

    });
})


