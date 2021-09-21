<script src="<?=base_url()?>assets/js/main.js"></script>
<!-- Required datatable js -->
<script src="<?=base_url('assets/')?>vendors/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/datatables/sum.js"></script>

<script type="text/javascript">
var save_method; 
var table;

$(document).ready(function(){
  table = $('#table_modul').DataTable({
    "lengthMenu": [[ 10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    "lengthChange": true,
    "processing": true, 
    "serverSide": true, 
    "order": [],
    
    "ajax": {
      "url": "<?php echo site_url('task4/ajax_modul/')?>",
      "type": "POST",
      "data": function(data) {
      }
    },

    //Set column definition initialisation properties.
    "columnDefs": [
    { 
      "targets": [ -1,0,1 ], //last column
      "orderable": false, //set not orderable
    },
    ],

  });
});


function reload_table()
{
  table.ajax.reload(null,false); //reload datatable ajax 
}

function import_module()
{
  $('#modal_import').modal('show'); // show bootstrap modal
  $('.modal-title').text('Import task4'); // Set Title to Bootstrap modal title
}

$('#form_import').on('submit', function(event){
  event.preventDefault();
  $.ajax({
    url:"<?=base_url('task4/import')?>",
    method:"POST",
    data:new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){
      $('#file').val('');
      $('#modal_import').modal('hide');
      swal(
        'Sukses',
        'Data Berhasil TerImport',
        'success'
      )
      reload_table();
    }
    });
});


</script>