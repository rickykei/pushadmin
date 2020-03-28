<?php 	include_once("../include/connection.php");
	 
	 $request = $_POST['request'];
	 if($request == 1){
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 => 'id',
		1 => 'user_id', 
		2 => 'content_id',
		3 => 'created_date',
		4 => 'modified_datetime',
		5 => 'comment',
		6 => 'table_name',
		7 => 'approved',
		8 => 'approve_date'  
	);

	$where = $sqlTot = $sqlRec = "";

	// check search value exist
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" ( table_name LIKE '%".$params['search']['value']."%' ";    
		$where .=" OR table_name LIKE '%".$params['search']['value']."%' )";
	}else{
		$where .=" where approved = 'N'   ";
	}

	// getting total number records without any search
	$sql = "SELECT * FROM app_filter_content ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	//concatenate search sql if value exist
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}

	

 	$sqlRec .=  " ORDER BY id desc , ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

	 
	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);
	 
 	$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch client data");

	$data=array();
	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_assoc($queryRecords) ) { 
		$data[] = array(
         "id"=>$row['id'],
         "user_id"=>$row['user_id'],
         "content_id"=>$row['content_id'],
		 "table_name"=>$row['table_name'],
         "created_date"=>$row['created_date'],
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
		  mysqli_query($conn,"update app_filter_content set approved='Y' , modified_datetime=now() WHERE id=".$deleteid);
	   }

	   echo 1;
   exit;
	 }

?>
	