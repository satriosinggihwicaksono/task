<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" style="text-align:right">
                  <div style="float:left;">
                    <h5><?=ucfirst($title)?></h5>
                  </div> 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <form action="javascript:void(0)" id="form_table" class="form-horizontal" enctype="multipart/form-data">
                        <table id="table_modul" class="table table-striped w-100" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Action (click to view portion details)</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="modal_import" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Portion Detail</h5>
        <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body form">
            <div class="row">  
              <div class="col-md-12">
                <table id="detail_table" class="table table-striped w-100" >
                  <thead>
                      <tr>
                          <th>S/N</th>
                          <th>NAME</th>
                          <th>Value</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
              </div>  
            </div>    
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->