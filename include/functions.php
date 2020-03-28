<?php 
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

 
//if(substr($theValue,0,1) =="m"){
//$theValue = substr($theValue,1,8) * 37.4; 
//}

//elseif (substr($theValue,0,1) =="u") {
//$theValue = substr($theValue,1,8) * 7.85; 
//}

  
  
  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
	  
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

function ConvertTypeToFullName($type){
	if ($type=='D'){
		return "Diamond";
	}
	if ($type=='C'){
		return "ColorStone";
	}
	if ($type=='P'){
		return "Pearls";
	}
	if ($type=='G'){
		return "Gold";
	}
	if ($type=='J'){
		return "Jewelry";
	}
	
}

?>