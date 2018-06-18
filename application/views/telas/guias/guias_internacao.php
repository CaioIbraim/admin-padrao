<div class="x_panel">
                  <div class="x_title">
                    <h2>Formulário para cadastro de guias de internação <small>(Em desenvolvimento)</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                          
                            
            
                      <form class="form-horizontal form-label-left" action="guias/cadastrar" method="post">

                        
                        
                        
                        
                       
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Selecione a OM</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="id_om">
                             <option value="null">selecione uma OM</option>
                            {om}
                            <option value="{id_om}">{sg_om}</option>
                            {/om}
                            
                          </select>
                        </div>
                      </div> 
                        
                        
                        
                        
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Emissão da GAU </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input class="form-control"  placeholder="Data de Emissão da GAU" type="text" name="dt_emissao">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nº de Origem</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input class="form-control" placeholder="Digite o nº da guia de origem" type="text" name="id_guia_origem">
                        </div>
                      </div>
                        
                        
                        <hr>
                        
                        
                 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pesquisar</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input class="form-control" type="text">
                        </div>
                      </div>
                        
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control"  placeholder="" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nº da Identidade</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de validade da AMH</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefone Fixo</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefone Celular</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>  
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP do titular</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>  
                        
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome do titular</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>  
                      
                        <hr>
                        
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">CID</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option></option>
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </select>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Dados clínicos</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea class="form-control" neme="dados_clinicos"></textarea>
                        </div>
                      </div>  
                        
                     <hr>
                   
                     <!--Motivo do envaminhamento -->
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data da admissão hospitalar</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>  
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantidade de </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="form-control" placeholder="" type="text">
                        </div>
                      </div>    
                        
                      <div class="form-group">
                          
                          <div class="col-md-3 col-sm-3 col-xs-12 control-label">  
                                 <label class="control-label">Tipo de Internação</label>
                                 <br>
                                 <br>
                                 <label class="control-label">Acompanhante
                           </div>
                            
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <input value="" type="checkbox"> Eletiva
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input value="" type="checkbox"> Urgência/Emergência
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input checked="" value="option1" id="optionsRadios1" name="optionsRadios" type="radio"> Não
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input value="option2" id="optionsRadios2" name="optionsRadios" type="radio"> Sim
                            </label>
                          </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de acomodação</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option>Selecione</option>
                            <option value="1">Apartamento</option>
                            <option value="2">Quarto</option>
                            <option value="3">Enfermeira</option>
                            <option value="4">UTI</option>
                          </select>
                        </div>
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-default">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Gerar Guia</button>
                        </div>
                      </div>

                    </form>
                
                  </div>
                </div>