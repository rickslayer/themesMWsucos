$(function(){
    var contatoNome  = $("#contatoNome").val();
    var contatoEmail = $("#contatoEmail").val();
    var contatoMessagem = $("#contatomensagem").val();
    var caminho = $("#caminho").val();
   var url =  caminho + '/contatos.php/Le';
   console.log(url);

  /*  $("#contatoNome").on("change", function(){
        console.log('teste');
        $.ajax({
            url:url ,
            type:'GET',
            dataType: 'json',
            error: function(){
                console.log('ta con erro');
            },
            success: function(data){
                console.log(data);
            }

        });

    });*/


});
