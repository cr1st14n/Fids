<div class="row row-sm mg-t-20">
    <div class="col-lg-8">
        <div class="card shadow-base bd-0">
            <div class="card-header bg-transparent pd-20">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">User Transaction History</h6>
            </div><!-- card-header -->
            <table class="table table-responsive mg-b-0 tx-12">
                <thead>
                    <tr>
                        <th>Linea Aérea</th>
                        <th>No. Vuelo</th>
                        <th>H.ltin</th>
                        <th>H.Re</th>
                        <th>H.Real</th>
                        <th>Matricula</th>
                        <th>Puerta</th>
                        <th>Origen/ Destino</th>
                        <th>Coment. Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div><!-- card -->
    </div><!-- col-6 -->
    <div class="col-lg-4 mg-t-20 mg-lg-t-0">
        <div class="card shadow-base bd-0">
            <div class="card-header pd-20 bg-transparent">
                <p>Nuevo:</p>
                <button class="btn btn-teal btn-block" id="btn_add_aterrizaje">Aterrizajes</button>
                <button class="btn btn-info btn-block">Salidas</button>
                <hr>
                <div class="fc-datepicker" align='center'></div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-block btn-info "><i class="fa fa-arrow-down"></i></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-block btn-teal"><i class="fa fa-arrow-up"></i></button>
                    </div>
                </div>

            </div><!-- card-header -->
        </div><!-- card -->
    </div><!-- col-6 -->
</div><!-- row -->

<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document" style="width: 90%;">
        <div class="modal-content ">
            <div class="modal-header pd-x-2">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Adición de LLegadas</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-20">

                <div class="">
                    <form action="">
                        <div class="row mg-b-5">
                            <div class="col-xl-6 ">
                                <div class="">
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                            Aerolinea:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Nro. Vuelo:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <input type="text" class="form-control form-control-sm" placeholder="...">
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Matricula:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <input type="text" class="form-control form-control-sm" placeholder="...">
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Hora itin.:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <input type="text" class="form-control form-control-sm" placeholder="...">
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Hora reprog.:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <input type="text" class="form-control form-control-sm" placeholder="...">
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Hora Real:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <input type="text" class="form-control form-control-sm" placeholder="...">
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Puerta de embargue:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Comentarios:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Observaciones:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <label class="col-sm-4 form-control-label">
                                            Mensaje en FIDS:</label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                </div><!-- form-layout -->
                            </div><!-- col-6 -->
                            <div class="col-xl-6 ">
                                <p>Rutas de LLegada</p>
                                <div class="">
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row mg-t-5">
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0 ">
                                            <select name="" id="" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div><!-- row -->
                                </div><!-- form-layout -->
                            </div><!-- col-6 -->
                        </div>

                    </form>
                </div>



            </div><!-- modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary tx-size-xs">Save changes</button>
                <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
<script>
    $('.fc-datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true
    });
</script>
<script src="{{ asset('resources/js/inti.js') }}"></script>