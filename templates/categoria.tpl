{include file="header.tpl"}
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Categorias</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                       
                    </div>
                </div>
                <div class="table-responsive">
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>id_categoria</th>
                                    <th>Nombre Categoria</th>
                                    <th>Acciones</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
    
                                {foreach from= $categoria item=$categorias}
    
                                <tr>
    
                                    <td>{$categorias['id_categoria']}</td>
                                    <td>{$categorias['nombre']}</td>
                                   
                                    <td>  
                                        <a href="borrarcategoria/{$categorias['id_categoria']} "><span
                                                            data-feather="delete"></span>
                                            </span></td>
                                </tr>
                            </tbody>
    
                            {/foreach}
                        </table>
                    </div>
                    <h1> Crear Categoria</h1>
                    <form action ="insertar_categoria" method ="get" >
                        <div class="form-group">
                          <label for="titulo">Nombre Categoria</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Categoria">
                        </div>
                        
                        <div class="form-group">
                          <input class="btn btn-primary" type="submit" value="Crear">
                        </div>
                      </form>
                    </div>
             
            </main>
        </div>
        {include file="footer.tpl"}