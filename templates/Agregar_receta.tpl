{include file="header.tpl"}
        <div class="col-sm">
          <h1>Crear Receta</h1>
          <form action ="insertarReceta" method ="get" >
            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Receta">
            </div>
            <div class="form-group">
              <label for="ingrediente">Ingredientes</label>
              <textarea class="form-control" id="ingrediente" name="ingrediente" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="categoria">Categoria</label>
              <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria">
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