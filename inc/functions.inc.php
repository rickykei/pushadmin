<?php
function writeShoppingCart() {
	$cart = $_SESSION['cart'];
	if (!$cart) {
		return '<p>You have no items in your shopping cart</p>';
	} else {
		// Parse the cart session variable
		$items = explode(',',$cart);
		$s = (count($items) > 1) ? 's':'';
		return '<p>You have <a href="cart.php">'.count($items).' kind(s) of item'.$s.' in your shopping cart</a></p>';
	}
}

function showCart() {
	
	global $db;

	$cart = $_SESSION['cart'];
	$cart1 = $_SESSION['cart1'];
	$cart2 = $_SESSION['cart2'];
	$cart3 = $_SESSION['cart3'];
	$cart4 = $_SESSION['cart4'];
	
	
	if ($cart) {
		$items = explode(',',$cart);
		$items1 = explode(',',$cart1);
		$items2 = explode(',',$cart2);
		$items3 = explode(',',$cart3);
		$items4 = explode(',',$cart4);
		
		
		$countcart = count($items);
		
		
		//$output[] = '<form action="cart.php?action=final" method="post" id="cart2">';

		
		$output[] = '<form action="cart.php?action=update" method="post" id="cart">';
		$output[] = '<table>';
		$output[] = '<tr>';
		$output[] = '<td></td>';
		$output[] = '<td>StockNum</td>';
		$output[] = '<td>QTY (Pc/Cts/G)</td>';
		$output[] = '<td>Unit Retail Price</td>';
		$output[] = '<td>Discount</td>';
		$output[] = '<td>Total</td>';
		$output[] = '</tr>';
	
		for ($i = 0; $i < $countcart; $i++){ 
			
		$one = substr($items[$i],0,1);
		$two = substr($items[$i],0,2);
			
			
			$output[] = '<tr>';
			$output[] = '<td><a href="cart.php?action=delete&id='.$items[$i].'&qty='.$items1[$i].'&rprice='.$items2[$i].'&dis='.$items3[$i].'&total='.$items4[$i].'" class="r">Remove</a></td>';
			$output[] = '<td><input type="text" name="id'.$i.'" value="'.$items[$i].'" size="8" maxlength="8" /></td>';			
			$output[] = '<td><input type="text" name="qty'.$i.'" value="'.$items1[$i].'" size="5" maxlength="5" /></td>';
			
		if ($one == 'S' AND $two != 'SP'){	
			
			$output[] = '<td><input type="text" name="rprice'.$i.'" value="'.$items2[$i].'" size="10" maxlength="10" /></td>';
			$output[] = '<td><input type="text" name="dis'.$i.'" value="'.$items3[$i].'" size="5" maxlength="5" /></td>';
			$output[] = '<td><input type="text" name="total'.$i.'" value="'.($items1[$i] * $items2[$i] * ((100 - $items3[$i])/100)).'" size="10" maxlength="10" /></td>';		
			
		} else {
			
			//$items2[$i] = $items2[$i] / 7.85;
			
			$output[] = '<td><input type="text" name="rprice'.$i.'" value="'.$items2[$i].'" size="10" maxlength="10" /></td>';
			$output[] = '<td><input type="text" name="dis'.$i.'" value="'.$items3[$i].'" size="5" maxlength="5" /></td>';
			$output[] = '<td><input type="text" name="total'.$i.'" value="'.($items1[$i] * $items2[$i] * ((100 - $items3[$i])/100)).'" size="10" maxlength="10" /></td>';
		
		}	
			
			
	
//			if($cart4){
			
//				$output[] = '<td><input type="text" name="total'.$i.'" value="'.$items4[$i].'" size="10" maxlength="10" /></td>';
			
			//if($one == "S" AND $two != "SP"){
//				$total += $items1[$i] * $items4[$i];
			//}else{
				//$total += $items4[$i];	
			//}	
			
			
//			} else {
	
	
	
			//if($one == "S" AND $two != "SP"){
				$total += $items4[$i];
			//}else{
				//$total += ($items2[$i] * ((100 - $items3[$i])/100));
			//}
			
//			}
			
			$output[] = '</tr>';
		
		}
		
		
		$output[] = '</table>';
		$output[] = '<p>Grand total: <strong> '.$total.'</strong></p>';
		$output[] = '<div><button type="submit">Update cart</button></div>';
		$output[] = '</form>';
		
		//$output[] = '<div><button type="submit">Final</button></div>';
		$output[] = '</form>';
		
		
	} 
	
	else {
		$output[] = '<p>Your shopping cart is empty.</p>';
	}
	return join('',$output);
}




?>
