{include file="header.tpl"}
         
        <div class="col-sm">
          <h1>Editar Receta</h1>
          <form action ="edit_recipe" method ="get" >
            <input type="hidden"  id="id_recipe" name="id_recipe"  value ="{{$recipes['id_recipe']}}">
        <div class="form-group">
              <label for="ingrediente"> Editar Ingredientes</label>
              <textarea class="form-control" id="ingredient" name="ingredient" value ="{{$recipes['ingredient']}}" rows="3">{{$recipes['ingredient']}}</textarea>
            </div>
            <div class="form-group">
              <label for="Pasos"> Editar Pasos a seguir</label>
              <textarea class="form-control" id="step" name="step" values= "{{$recipes['step']}}" rows="3">{{$recipes['step']}}</textarea>
            </div>
            
           <div class="form-group">
              <label>Editar sabor</label>
              <select id="flavor" name="flavor">
                {foreach from= $flavors item=$flavor}
                <option value="{{$flavor['id_flavor']}}">{{$flavor['name']}}</option>
                {/foreach}
              </select>
              
            </div>
            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Editar">
          </div>
          </form>
        </div>
        </div>
  </div>
    </div>
      </main>
      {include file="footer.tpl"}