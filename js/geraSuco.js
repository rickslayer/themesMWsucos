jQuery(function($){
        $("#inventeNome").on("change", function(){

        if ($(this).val().length == 0)
        {
            $("#inventeMensagem").val('');
        }else
        {
            $("#inventeMensagem").val('Suco Maravilhoso do(a) ' + $(this).val());
        }
    });

    $("#inventeBase").on("change", function(){


        var mensagem = $("#inventeMensagem").val();
        $("#inventeMensagem").val(mensagem + '\n' + ' Contém: ' + $(this).val() + ' ;') ;


    });
    $("#inventeFrutas").on("change", function(){
        var mensagem = $("#inventeMensagem").val();

        $("#inventeMensagem").val(mensagem + '\n' + ' E Com a fruta: ' + $(this).val() + ' ;') ;

    });

    $("#btnInventar").on("click", function(){


    });
});