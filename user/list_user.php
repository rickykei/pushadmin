<?php
 require_once('./Connections/rmAction.php');  
 require_once('./include/functions.php');  
   
?> 
<script type="text/javascript">
$( document ).ready(function() {
	$('#employee_grid').DataTable({
		 "Processing": true,
         "serverSide": true,
		   "order": [[ 0, "desc" ]],
         "ajax":{
            url :"/user/list_user_response.php", // json datasource
            type: "post",  // type of method  , by default would be get
			"aoColumnDefs" : [
				 {
				   'bSortable' : false,
				   'aTargets' : [0,1]
				 }],
			
			"dataSrc": function (jsonData) {
			  for ( var i=0, len=jsonData.data.length ; i<len ; i++ ) {
			 	//jsonData.data[i][3] = '<div class="btn-group" data-toggle="buttons"><a href="#"   class="btn btn-primary btn-xs editor_edit" data="'+jsonData.data[i][0]+'">Edit</a><a href="#" target="_blank" data="'+jsonData.data[i][0]+'" class="btn btn-primary btn-xs editor_remove">Delete</a><a href="#" target="_blank" class="btn btn-primary btn-xs editor_view" data="'+jsonData.data[i][0]+'">View</a></div>';
				jsonData.data[i][3] = '<div class="btn-group" data-toggle="buttons"><a href="#"   class="btn btn-primary btn-xs editor_edit" data="'+jsonData.data[i][0]+'">Edit User</a><a href="#" target="_blank" data="'+jsonData.data[i][0]+'" class="btn btn-primary btn-xs editor_remove">Delete</a></div>';
			  }
			  
			  return jsonData.data;
			},
            error: function(){  // error handling code
             // $(".employee-grid-error").html("");
              //$("#employee_grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
              $("#employee_grid_processing").css("display","none");
            }
          } ,
		  "columns": [
            { "data": "0" },
            { "data": "1" },
            { "data": "2" },
			{ "data": "3" }
             
            
        ]
			  
		  
        });   
		
		$('#employee_grid').on('click', 'a.editor_edit', function (e) {
			e.preventDefault(); 
			//	alert( "delete.php?id="+$(this).attr('data'));
			 window.location.href = "/?page=user&action=edit_user.php&button=edit&id="+$(this).attr('data')+"&type="+$(this).attr('type');
		});
			$('#employee_grid').on('click', 'a.editor_view', function (e) {
			e.preventDefault(); 
			//	alert( "delete.php?id="+$(this).attr('data'));
			 window.location.href = "/?page=user&action=view_user.php&button=view&id="+$(this).attr('data')+"&type="+$(this).attr('type');
		} );		
		$('#employee_grid').on('click', 'a.editor_remove', function (e) {
			e.preventDefault(); 
			//	alert( "delete.php?id="+$(this).attr('data'));
			window.location.href = "/?page=user&action=delete.php&id="+$(this).attr('data');
		} );
		$('.editor_add').click(function (e) {
			 window.location.href = "/?page=user&action=user.php&id="+$(this).attr('data');
		});
});
</script>
<div data-toggle="buttons" class="btn-group" ><a href="#" class="btn btn-primary btn-xs editor_add">Add New User</a></div><p>
 <center> 
		<table id="employee_grid" class="display" width="100%" cellspacing="0">
		
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
				<th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
				<th>Id</th>
				<th>Username</th>
				<th>Role</th>
				<th>Action</th>
            </tr>
        </tfoot>
    </table>
    