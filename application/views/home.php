<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.dataTables.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
	<title>DataTable AJAX CI</title>
</head>
<body>

<style>
		.main-container{
			margin-top: 100px;
		}
</style>

<div class="container main-container">
	<div class="row">
		<div class="col-md-12">
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th data-priority="1"></th>
		                <th data-priority="2">ID</th>
		                <th>Manufacturer</th>
		                <th>Model</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		            	<th data-priority="1"></th>
		                <th data-priority="2">ID</th>
		                <th>Manufacturer</th>
		                <th>Model</th>
		            </tr>
		        </tfoot>
	   		 </table>
   		</div>
		</div>
	</div>
</div>


<script src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>

<script>
	
	var table = $('#example').DataTable({

	 "responsive": true,

	  "columns": [
     		{"data": 	"responsive_col"	},
       		{"data": 	"record_id"			},
       		{"data": 	"manufacturer_name"	},
        	{"data": 	"manufacturer_model"},
       ],

        "columnDefs": [
		  { className: 'control show-more', targets:0},
          { responsivePriority: 1, targets: 0 },
          { responsivePriority: 2, targets: 1 },

        ],
        responsive: {
            details: {
                type: 'column',
                target: 0
            }
        },
        "searchDelay": 1500,
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        oLanguage: {
        	sProcessing: "<i class='fa fa-spinner fa-spin fa-5x'></i>",
        	"oPaginate": {
        		"sPrevious": "<i class='fa fa-arrow-circle-left'></i>",
				"sNext": 	 "<i class='fa fa-arrow-circle-right'></i>"
			}
        },
        "ajax": {
            "url": "<?php echo base_url('records'); ?>",
            "type": 'POST',
            "data": function ( vars ) {
               
            }
        }
	});

</script>

</body>
</html>