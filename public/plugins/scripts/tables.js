$(document).ready(function() {

    // DataTable responsivo da tabela clientes
    $('#tabela_clientes').DataTable({
      "bInfo": false,
      "bLengthChange": false,
      "pageLength": 8,
      "language": {
      "search": "Buscar:",
        paginate: {
              "first":      "Primeiro",
              "previous":   "Anterior",
              "next":       "Próximo",
              "last":       "Último"
        },
      },
      responsive: {
            details: false,
      }

    });

    // Encontra na tabela o cliente e abre modal
    $('#tabela_clientes tbody').on( 'click', 'tr', function () {
          var customerId = $(this).find(".clienteid").html();
          $('#' + customerId).modal('show');
    } );



    // DataTable responsivo da tabela permissao de usuarios
    $('#tabela_usuario_promocao').DataTable({
      "bInfo": false,
      "bLengthChange": false,
      "pageLength": 8,
      "language": {
      "search": "Buscar:",
        paginate: {
              "first":      "Primeiro",
              "previous":   "Anterior",
              "next":       "Próximo",
              "last":       "Último"
        },
      },
      responsive: {
            details: false,
      },

    });

    // Encontra na tabela o usuario/permissao e abre modal
    $('#tabela_usuario_promocao tbody').on( 'click', 'tr', function (){
      var permissaoid = $(this).find(".permissaoid").html();
      $('#' + permissaoid).modal('show');
    });

    // DataTable responsivo da tabela permissao de usuarios
    $('#tabela_gerenciar_usuarios').DataTable({
      "bInfo": false,
      "bLengthChange": false,
      "pageLength": 8,
      "language": {
      "search": "Buscar:",
        paginate: {
              "first":      "Primeiro",
              "previous":   "Anterior",
              "next":       "Próximo",
              "last":       "Último"
        },
      },
      responsive: {
            details: false,
      }
    });

    // Encontra na tabela o usuario/permissao e abre modal
    $('#tabela_gerenciar_usuarios tbody').on( 'click', 'tr', function (){
      var gerenciarid = $(this).find(".gerenciarid").html();
      $('#' + gerenciarid).modal('show');
    });

    // DataTable responsivo da tabela clientes
    $('#tabela_categoria_subcategoria').DataTable({
      "bInfo": false,
      "bLengthChange": false,
      "pageLength": 8,
      "language": {
      "search": "Buscar:",
        paginate: {
              "first":      "Primeiro",
              "previous":   "Anterior",
              "next":       "Próximo",
              "last":       "Último"
        },
      },
      responsive: {
            details: false,
      }

    });

    $('#tabela_categoria_subcategoria tbody').on( 'click', 'tr', function (){
      var id = $(this).find(".subcategoria_id").html();
      $('#sub' + id).modal('show');
    });

    // DataTable responsivo da tabela de atributos
    $('#tabela_atributos').DataTable({
      "bInfo": false,
      "bLengthChange": false,
      "pageLength": 8,
      "language": {
      "search": "Buscar:",
        paginate: {
              "first":      "Primeiro",
              "previous":   "Anterior",
              "next":       "Próximo",
              "last":       "Último"
        },
      },
      responsive: {
            details: false,
      }

    });

    $('#tabela_atributos tbody').on( 'click', 'tr', function (){
      var id = $(this).find(".atributo_id").html();
      $('#at' + id).modal('show');
    });

    //Inicializa o Select
    $(".select2").select2();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });

    $( "#modificar_categoria" ).click(function() {
      var id = $("#select_categoria").find(":selected").val();
      $('#cat' + id).modal('show');
    });


} );


           
  $("select[id=select_categoria]").change(function(){      
      var x = $(this).val();
      alert(x);
      $("#select_subcategoria option").removeAttr("style");
      $("#select_subcategoria option[id!='"+ x +"']").attr("style", "display:none");
  });

