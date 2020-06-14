<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 06:20:43
  from 'C:\xampp\htdocs\vscode\rtani\templates\admin_recipes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee5a59bd3a261_64295619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44fc44b293a140eda8bd82f29cd14c776f9cd1cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vscode\\rtani\\templates\\admin_recipes.tpl',
      1 => 1591972027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ee5a59bd3a261_64295619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recetas']->value, 'receta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['receta']->value) {
?>

                            <tr>


                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['id_receta'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['titulo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['categoria'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['receta']->value['finalizada'];?>
</td>


                                <td><a href="mirar/<?php echo $_smarty_tpl->tpl_vars['receta']->value['id_receta'];?>
 "><span data-feather="eye">
                                            <a href="finalizar/<?php echo $_smarty_tpl->tpl_vars['receta']->value['id_receta'];?>
"><span
                                                    data-feather="check"></span>
                                                <a href="borrarReceta/<?php echo $_smarty_tpl->tpl_vars['receta']->value['id_receta'];?>
 "><span
                                                        data-feather="delete"></span>
                                        </span></td>
                            </tr>
                        </tbody>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                    </table>
                </div>
            </main>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
