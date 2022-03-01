<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style type="text/css">

.principal {

    margin-top: 40px;
    margin-right: 40px;
    margin-left: 40px;

}
#body {

    background-color: #cfcfcf;

}

</style>

<?php

echo '
    <body id="body">
    <div class="principal">
    <table id="myTable" class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
    </table>
    </div>
    </body>';
?>

<script type="text/javascript">

$(document).ready(function() {

$('#myTable').DataTable( {                  
    "processing": true,
    //"dateFormat": "DD/MM/YYYY"
    "serverSide": true,
    //"bDestroy": true,
    "filter": true, // Última atulização para desativar o campo de busca no datatables.
    "ajax": "retornoDados.php",
    "language": {
    "sProcessing":    "Procesando...",
    "sLengthMenu":    "Mostrar _MENU_ registros",
    "sZeroRecords":   "Nenhum resultado encontrado",
    "sEmptyTable":    "Nenhum dado disponível nesta tabela",
    "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
    "sInfoEmpty":     "Mostrando registros de 0 a 0 de um total de 0 registros",
    "sInfoFiltered":  "(filtrado de um total de _MAX_ registros)",
    "sInfoPostFix":   "",
    "sSearch":        "Buscar:",
    "sUrl":           "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Carregando...",
    "oPaginate": {
        "sFirst":    "Primeiro",
        "sLast":    "Último",
        "sNext":    "Próximo",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Ative para classificar a Coluna em ordem crescente",
        "sSortDescending": ": Ative classifica a Coluna em ordem decrescente"
    }                                        
  }
});                                    
});  

</script>