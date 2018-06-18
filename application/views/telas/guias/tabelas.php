    <div class="col-md-12 col-sm-12 col-xs-12" id="a" >
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tabela de {controller} </h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                        {table}
                  </div>
                </div>
              </div>
    <script>
       $(document).ready(function(){
          
   $('#big_table').DataTable({
     "pageLength" : 10,
     "serverSide":  true,
     "processing":  true,
     "columns": [
        {columns}
     ],
            "language": {
    "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
            "ajax": {
                dataType: 'json',
                url  : "<?php echo site_url("{pagina}/dtable") ?>",
                type : 'POST',
                data : { id_om : {id_om}, status : {status}, nip : {nip} }
            }
      });
          
       });
       
       
    </script>