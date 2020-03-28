<?php
 //require_once('./Connections/rmAction.php');  
 require_once('./include/functions.php');  
   
?> 
<script type="text/javascript">
$( document ).ready(function() {
dataTable=$('#employee_grid').DataTable({
		 "Processing": true,
         "serverSide": true,
		   'serverMethod': 'post',
         "ajax":{
            url :"/pet/list_adoption_response.php", // json datasource
            type: "post" ,
			'data': function(data){
           
           data.request = 1
		
          } ,error: function(){  // error handling code
             // $(".employee-grid-error").html("");
              //$("#employee_grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
              $("#employee_grid_processing").css("display","none");
            }
        }
		  ,
		 "columnDefs": [ {
		   'targets': 6, // column index (start from 0)
		   'orderable': false, // set orderable false for selected columns
		 }],
		"columns": [
            { data: "id" },
            { data: "push_content" },
			{ data: "push_title" },
			{ data: "type" },
			{ data: "created_date" },
            { data: "approved" },
			{ data: "action" },
        ]
			  
		  
        });   
		
    $('#checkall').click(function(){
	   
		  if ($("#checkall").prop("checked") ) {
			$(".delete_check").prop("checked", true);
			 
		} else {
			$(".delete_check").prop("checked", false);
		 
		}
	 
   });
   
   // Delete record
   $('#delete_record').click(function(){

      var deleteids_arr = [];
      // Read all checked checkboxes
      $("input:checkbox[class=delete_check]:checked").each(function () {
         deleteids_arr.push($(this).val());
      });

      // Check checkbox checked or not
      if(deleteids_arr.length > 0){

         // Confirm alert
         var confirmdelete = confirm("Do you really want to approve records?");
         if (confirmdelete == true) {
            $.ajax({
               url: '/pet/list_adoption_response.php',
               type: 'post',
               data: {request: 2,deleteids_arr: deleteids_arr},
               success: function(response){
                  dataTable.ajax.reload();
               }
            });
         } 
      }
   });
   
});


	// Checkbox checked
	function checkcheckbox(){

	   // Total checkboxes
	   var length = $('.delete_check').length;

	   // Total checked checkboxes
	   var totalchecked = 0;
	   $('.delete_check').each(function(){
		  if($(this).is(':checked')){
			 totalchecked+=1;
		  }
	   });

	   // Checked unchecked checkbox
	   if(totalchecked == length){
		  $("#checkall").prop('checked', true);
	   }else{
		  $('#checkall').prop('checked', false);
	   }
	}
</script>

 <center> 
		<table id="employee_grid" class="display dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
				<th>push content</th>
				<th>push title</th>
                <th>Push Type</th>
				<th>Created Date</th>
				<th>approved</th>
				 <th>Check All <input type="checkbox" class='checkall' id='checkall'><input type="button" id='delete_record' value='Approve' ></th>
 
            </tr>
        </thead>
 
      
    </table>
   
 
<?php include('./footer.php');

 
?>