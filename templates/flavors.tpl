{include file="header.tpl"}
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Sabores</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                       
                    </div>
                </div>
                <div class="table-responsive">
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>id_sabor</th>
                                    <th>Nombre Sabor</th>
                                    <th>Borrar</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
    
                                {foreach from= $flavors item=$flavor}
    
                                <tr>
    
                                    <td>{$flavor['id_flavor']}</td>
                                    <td>{$flavor['name']}</td>
                                   
                                    <td>  
                                        <a href="removeflavors/{$flavor['id_flavor']} "><span
                                                            data-feather="trash-2"></span>
                                            </span></td>
                                </tr>
                            </tbody>
    
                            {/foreach}
                        </table>
                    </div>
                    <h1> Crear Sabor</h1>
                    <form action ="insert_flavors" method ="get" >
                        <div class="form-group">
                          <label for="titulo">Nombre Sabor</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="flavor">
                        </div>
                        
                        <div class="form-group">
                          <input class="btn btn-primary" type="submit" value="Crear">
                        </div>
                      </form>
                    </div>
             
            </main>
        </div>
        {include file="footer.tpl"}