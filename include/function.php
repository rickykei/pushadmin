<?php
 
function n_f($no){
 return number_format($no,2,'.','');
}
function sub_remark($remark){
	if(strlen($remark)>20)
	echo substr($remark,0,20)."...";
	else
	echo $remark;
	
}
function fin_year($db){
	
	$sql="select year from fin_year where sts='A' ";
	if ($rows=$db->fetch_all_array($sql)){
		
	}
	return $rows[0]['year'];
	
}
function fin_year_admin($db){
	
	$sql="select year from admin_year ";
	if ($rows=$db->fetch_all_array($sql)){
		
	}
	return $rows[0]['year'];
	
}
?>