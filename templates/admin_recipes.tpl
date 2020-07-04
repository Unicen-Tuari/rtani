
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

                            {foreach from=$recipes item=$recipe}

                            <tr>


                                <td>{$recipe['id_receta']}</td>
                                <td>{$recipe['titulo']}</td>
                                <td>{$flavors[$recipe['fk_id_categoria']-8]['nombre']}</td>

                                <td> 
                                    {if $recipe['finalizada']}
                                    <div class="badge badge-secondary text-wrap" style="width: 6rem;">
                                        Finalizada
                                    </div>
                                    {/if}
                                </td>

                                <td>
                                            <a href="finish/{$recipe['id_receta']}"><span
                                                    data-feather="check"></span>
                                                <a href="deleteRecipe/{$recipe['id_receta']} "><span
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
