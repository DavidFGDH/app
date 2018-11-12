<div class="row">
  <div class="card w-100">
    <div class="card-header text-uppercase bg-primary text-white text-center">
      Calificaciones
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="form-row required">
              <label class="col-sm-4 col-form-label" for="materia-<?=$i?>">Materia: </label>
              <div class="col-sm-8">
                <select class="form-control" id="materia-<?=$i?>">
                  <option value="0"></option>
                  <option value="1">Biología</option>
                  <option value="2">Desarrolla Software de Aplicación…</option>
                  <option value="3"> Diseña y Administra Bases de Datos…</option>
                  <option value="4">Ética</option>
                  <option value="5">Geometría Analítica Inglés III</option>
                </select>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-2">
          <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="form-row required">
              <label class="col-sm-6 col-form-label" for="parcial-1-<?=$i?>">Parcial 1: </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="parcial-1-<?=$i?>">
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-2">
          <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="form-row required">
              <label class="col-sm-6 col-form-label" for="parcial-2-<?=$i?>">Parcial 2: </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="parcial-2-<?=$i?>">
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-2">
          <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="form-row required">
              <label class="col-sm-6 col-form-label" for="parcial-3-<?=$i?>">Parcial 3: </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="parcial-3-<?=$i?>">
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
