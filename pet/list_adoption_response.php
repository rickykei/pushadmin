<?php 	include_once("../include/connection.php");
	 
	 $request = $_POST['request'];
	 if($request == 1){
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 => 'id',
		1 => 'device_id', 
		2 => 'push_content',
		3 => 'push_app_table',
		4 => 'push_content_id',
		5 => 'push_title',
		6 => 'sent',
		7 => 'modified_datetime',
		8 => 'created_date',
		9 => 'approved',
		10 => 'type'
	);

	$where = $sqlTot = $sqlRec = "";

	// check search value exist
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" ( push_title LIKE '%".$params['search']['value']."%' ";    
		$where .=" OR push_title LIKE '%".$params['search']['value']."%' )";
	}else{
		$where .=" where approved = '0' and type=2  ";
	}

	// getting total number records without any search
	$sql = "SELECT * FROM app_push_record ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	//concatenate search sql if value exist
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}

	

 	$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

	 
	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);
	 
 	$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch client data");

	$data=array();
	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_assoc($queryRecords) ) { 
		$data[] = array(
         "id"=>$row['id'],
         "push_content"=>$row['push_content'],
         "push_title"=>$row['push_title'],
		 "type"=>$row['type'],
         "created_date"=>$row['created_date'],
         "approved"=>$row['approved'],
         "action"=>"<input type='checkbox' class='delete_check' id='delcheck_".$row['id']."' onclick='checkcheckbox();' value='".$row['id']."'>"
      );
	}	

	$json_data = array(
			"draw"            => intval( $params['draw'] ),   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo  json_encode($json_data);  // send data as json format
	exit;
	 }else if($request == 2){
	   $deleteids_arr = $_POST['deleteids_arr'];

	   foreach($deleteids_arr as $deleteid){
		  mysqli_query($conn,"update app_push_record set approved='1' , modified_datetime=now() WHERE id=".$deleteid);
	   }

	   echo 1;
   exit;
	 }

?>
	