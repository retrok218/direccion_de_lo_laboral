<div class="modal fade" id="modal-juicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

          <div class="modal-header kt-portlet kt-iconbox kt-iconbox--animate-slow">

            <div class="kt-portlet__body">                
                <h3 class="modal-title" id="myModalLabel">
                    <div class="kt-iconbox__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                        Desgloce de Juicio:{{$juicio3[0]->id_juicio}}
                    </div>
                    
                </h3>
            </div>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <div class="modal-body" id="modal_content">
              <form role="form" name="frm_nueva_regla" id="frm_nueva_regla" method="POST" action="javascript:void(0)">
                  <div class="panel panel-primary">
                      <div class="panel-body">
                          <div class="row">
                            
                                <div class="col-lg-3">Notificacion Demanda :<span>23/43</span></div>
                                <div class="col-lg-3"><span>Presentacion Demanda</span></div>
                               <div class="col-lg-3"><span>Expediente</span></div> 
                               <div class="col-lg-3"><span>Año</span></div>
                               <div class="col-lg-3"><span>Clasificacion-Año</span></div>
                               <div class="col-lg-3"><span>Clasificacion-Exp</span></div>
                               
                            </div>
                            <hr>
                            <div class="row">
                               <div class="col-lg-12"><h3>Actor</h3></div>
                               <div class="col-lg-3"><span>Nombre Completo</span></div>
                               <div class="col-lg-3"><span>Adscripcion</span></div>
                               <div class="col-lg-3"><span>UR</span></div>
                               <div class="col-lg-3"><span>Denominacion</span></div>
                               <div class="col-lg-3"><span>Puesto</span></div>
                               <div class="col-lg-3"><span>Nivel</span></div>
                               <div class="col-lg-3"><span>Salario Mensual</span></div>
                               <div class="col-lg-3"><span></span></div>
                            </div>

                            
                                                         


                          </div>
                      </div>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>             
                </div>
          </div>
          
      </div>
  </div>
