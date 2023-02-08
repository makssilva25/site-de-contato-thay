$( document ).ready(function() {

    function salvar (){

        const tipo_contato = $('#tipo_contato').val();
        const nome = $('#nome').val();
        const empresa = $('#empresa').val();
        const email = $('#email').val();
        const telefone = $('#telefone').val();
        const mensagem = $('#mensagem').val();

          $.ajax({
             method: "POST",
             url: "back-end/salvar-banco.php",
             data: { tipo_contato, nome, empresa, email, telefone, mensagem },
             success: function(data) {
                 $( "#msg" ).show();
                 $( "#msg" ).append(data);
              },
              error: function (xhr, ajaxOptions, thrownError) {
              }
            })

    }


    $("#submeter").click(function(e) {
        e.preventDefault();
        salvar();
    });
});