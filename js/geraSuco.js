$(function(){

    $("#comAmor").hide();
    $("#inventeNome").on("change", function(){

        if ($(this).val().length == 0)
        {
            $("#descricaoSuco").text('');
        }else
        {
            $("#descricaoSuco").text('Suco Maravilhoso do(a) ' + $(this).val());
        }
    });

    $("#inventeBase").on("change", function(){

        $("#comAmor").show();
        var item = $('<li/>',{
                        text: $(this).val()
                        });

        $("#receita").append(item);

    });
    $("#inventeFrutas").on("change", function(){


        var item = $('<li/>',{
            text: $(this).val()
        });

        $("#receita").append(item);

    });
});