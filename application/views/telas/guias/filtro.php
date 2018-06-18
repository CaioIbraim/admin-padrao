

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2> Filtrar guias </h2>
            <!--
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="#" class="acao" rel="cad"><i class="fa fa-plus-circle"></i> Cadastrar</a></li>
            </ul>
            -->
            <div class="clearfix"></div>
        </div>

        <div class="x_content">



            <form class="form-horizontal" method="post" id="frmFormulario" action="">

                <div class="form-group">
                    
                    <!--
                    <label for="pesquisa_numero" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">Número</label>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <input id="pesquisa_numero" name="pesquisa_numero" value="" placeholder="Número da GAU" class="form-control" type="text">
                    </div>
                    -->
                    
                    <label for="pesquisa_nip" class="col-md-1 control-label">NIP</label>
                    <div class="col-md-2">
                        <input id="pesquisa_nip" name="pesquisa_nip" value="" placeholder="NIP" class="form-control" type="text">
                    </div>
                    
                   
                    
                    
                    
                    <label for="pesquisa_om" class="col-md-1 control-label">OM</label>
                    <div class="col-md-2">
                        <select id="pesquisa_om" name="pesquisa_om" class="form-control">
                            <option value="">Todas</option>
                            <option value="326">CFPA</option>
                            <option value="320">CFRP</option>
                            <option value="72">CFS</option>
                            <option value="65">CFSF</option>
                            <option value="99">CFTP</option>
                            <option value="195">CMAM</option>
                            <option value="286">EAMCE</option>
                            <option value="308">HNBE</option>
                            <option value="260">HNBRA</option>
                            <option value="250">HNLA</option>
                        </select>
                    </div>
                   
                    
                    
                     <label for="pesquisa_status" class="col-md-1 control-label">Status</label>
                    <div class="col-md-2">
                        <select id="pesquisa_status" name="pesquisa_status" class="form-control">
                            <option value="">Todos</option>
                            <option value="1">Aberta</option>
                            <option value="4">Cancelada</option>
                            <option value="5">Fechada</option>
                            <option value="2">Em Andamento</option>
                            <option value="6">Autorizada</option>
                            <option value="7">Não Autorizada</option>
                            <option value="8">Em Análise</option>
                        </select>
                    </div>
               
                    <!--
                    <label for="pesquisa_ose" class="col-xs-12 col-sm-1 col-md-1 col-lg-1 control-label">OSE</label>
                    <div class="col-xs-12 col-sm-8 col-md-5 col-lg-5">
                        <select id="pesquisa_ose" name="pesquisa_ose" class="form-control">
                            <option value="">Todas</option>
                        </select>
                    </div>
                    -->
                    
                </div>
                
                

                <div class="form-group" id="btnBoxFooter">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">  
                        <!--<button type="button" id="btnLimpar" class="btn btn-primary"><span class="fa fa-refresh"></span> Limpar Pesquisa</button>-->
                        <button type="button" id="btnConfirmar" class="btn btn-primary"><span class="fa fa-search"></span> Listar Guias</button>
                    </div>
                </div>
                
                
            </form>



        </div>
    </div>
</div>



<div id="exibetabela"></div>



 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

<script>
   
   
$('#btnConfirmar').on('click',function(){
     buscaTabela();
});

function buscaTabela(){
    $( "#exibetabela" ).html();
    var om = $("#pesquisa_om").val();
    var st = $("#pesquisa_status").val();
    var np = $("#pesquisa_nip").val();
  
      if(om === ""){
         om = "0";
      }
      
      if(st === ""){
        st = "0";
      }
      
      if(np.trim() === ""){
         np = "0";
      }
      
      
         
      if(om === "0" && np === "0"){
         alert("Informe pelo menos um NIP ou uma OM.");
         return;
      }
  
    $.post("guias/tabela", {om: om, st: st, np: np}, function(data, status){
       
           $( "#exibetabela" ).html(data); 
    });
}
</script>
