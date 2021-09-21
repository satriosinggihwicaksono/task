<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" style="text-align:right">
                  <div style="float:left;">
                    <h5><?=ucfirst($title)?></h5>
                  </div> 
                </div>
                <div class="card-header">
                  <button class="btn btn-warning btn-md" onclick="import_module()"><i class="fa fa-file-import"></i></button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <form action="javascript:void(0)" id="form_table" class="form-horizontal" enctype="multipart/form-data">
                        <table id="table_modul" class="table table-striped w-100" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created</th>
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
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="javascript:void(0)" id="form_import" class="form-horizontal" enctype="multipart/form-data">
      <div class="modal-body form">
            <div class="row">  
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label col-md-12">File</label>
                  <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                </div>
              </div>  
            </div>    
      </div>
      <div class="modal-footer">
        <input type="submit" id="import" name="import" value="Import" class="btn btn-info" />
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->