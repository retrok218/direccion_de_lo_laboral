<div class="modal fade" id="modal-juicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Desgloce de Juicio:{{$juicio3[0]->id_juicio}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body" id="modal_content">
              <form role="form" name="frm_nueva_regla" id="frm_nueva_regla" method="POST" action="javascript:void(0)">
                  <div class="panel panel-primary">
                      <div class="panel-body">
                          <div class="row">
                                                         


                          </div>
                      </div>
                  </div>
                  <div id="error_alerta"> </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  Cancelar
              </button>             
          </div>
      </div>
  </div>
</div>