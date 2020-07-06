{include file="header.tpl"}
        <div class="col-sm">
          <h1>Crear Receta</h1>
          <form action ="insertRecipe" method ="get" >
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="recipe">
            </div>
            <div class="form-group">
              <label for="ingrediente">Ingredientes</label>
              <textarea class="form-control" id="ingredient" name="ingredient" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="ingrediente">Pasos a seguir</label>
              <textarea class="form-control" id="step" name="step" rows="3"></textarea>
            </div>
           
            <div class="form-group">
              <label>Sabor</label>
              <select id="flavor" name="flavor">
                {foreach from= $flavors item=$flavor}
                <option value="{{$flavor['id_flavor']}}">{{$flavor['name']}}</option>
                {/foreach}
              </select>
            </div>
            <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Crear">
            </div>
          </form>
        </div>
        </div>
  </div>
    </div>
      </main>
      {include file="footer.tpl"}