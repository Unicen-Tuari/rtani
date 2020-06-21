
{include file="header.tpl"}
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Recetas</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="insert"> <button type="button" class="btn btn-light">Nueva Receta</button> </a>
                        </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id_receta</th>
                                <th>Receta</th>
                                <th>categoria</th>
                                <th>finalizada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            {foreach from=$recetas item=$receta}

                            <tr>


                                <td>{$receta['id_receta']}</td>
                                <td>{$receta['titulo']}</td>
                                <td>{$receta['fk_id_categoria']}</td>
                                <td>{$receta['finalizada']}</td>


                                <td><a href="mirar/{$receta['id_receta']} "><span data-feather="eye">
                                            <a href="finalizar/{$receta['id_receta']}"><span
                                                    data-feather="check"></span>
                                                <a href="borrarReceta/{$receta['id_receta']} "><span
                                                        data-feather="delete"></span>
                                        </span></td>
                            </tr>
                        </tbody>

                        {/foreach}


                    </table>
                </div>
            </main>
        </div>
        {include file="footer.tpl"}
