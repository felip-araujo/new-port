$('#sucesso').hide();
$('#erro').hide();


document.getElementById("formulario").addEventListener('submit', function (event) {
    event.preventDefault();


    const formData = $(this).serialize();
    
    $.ajax({
        type: "POST",
        url: "../new-port/php/processar_contato.php",
        data: formData,
        success: function (response) {
            $('#sucesso').show().html(response);  
            $('#erro').hide();
        }, 
        error: function (response) {
            $('#erro').show().html(response);  
            $('#sucesso').hide();
        }
    });

})


