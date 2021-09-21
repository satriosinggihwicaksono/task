<script src="<?=base_url()?>assets/js/main.js"></script>
<!-- Required datatable js -->
<script src="<?=base_url('assets/')?>vendors/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/')?>vendors/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
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
      "url": "<?php echo site_url('task3/ajax_modul/')?>",
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

  
 $('#table_modul').on('draw.dt', function(){
  $('#table_modul').Tabledit({
   url:'action.php',
   dataType:'json',
   columns:{
    identifier : [0, 'transaction_id'],
    editable:[[1, 'description'], [2, 'quantity'], [3, 'uom'], [4, 'unit_price']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    if(data.action == 'delete')
    {
     $('#' + data.transaction_id).remove();
     $('#table_modul').DataTable().ajax.reload();
    }
   }
  });
 });

});


function reload_table()
{
  table.ajax.reload(null,false); //reload datatable ajax 
}


</script>