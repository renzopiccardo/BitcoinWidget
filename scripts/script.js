$(document).ready(function() {

    $('#button_save').click(function(e) {
        var code = $( ".carousel-item.active" ).find("span.code")[0].innerHTML;
        var symbol = $( ".carousel-item.active" ).find("span.symbol")[0].innerHTML;
        var rate = $( ".carousel-item.active" ).find("span.rate")[0].innerHTML;
        var description = $( ".carousel-item.active" ).find("span.description")[0].innerHTML;
        var rate_float = $( ".carousel-item.active" ).find("span.rate_float")[0].innerHTML;
        e.preventDefault();
        
        $.ajax({
            type: "POST",
            url: 'bitcoin_widget_save.php',
            data: {
                code, symbol, rate, description, rate_float
            },
            success: function(response){
                if(response === "OK"){
                    $('#toast-body').html(`${code} ${symbol + rate} `);
                    $('#div_toast').toast('show');
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    
    });
    
    $('.toast').toast("hide");
});