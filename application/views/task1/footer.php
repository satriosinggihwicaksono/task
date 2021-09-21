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
      "url": "<?php echo site_url('task1/ajax_modul/')?>",
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

</script>