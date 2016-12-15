<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use App\Dishes;




class ShopController extends Controller
{
	public function index(Request $request, $id)
	{

		// 		// //To turn off session
		// Session::flush();
		$addDishID = $id;

		//Match the dish ID to the Dish name
		// $dish = Dishes::findOrFail($addDishID); 		
 
		// $addDishName = $dish->name;
	    


		$addDishQuantity = $request->quantity;

		//Check to see if there is already a session
		if(! Session::has('Cart')){
			Session::put('Cart', $array = []);
		}

		if(isset($_POST['addtocart'])){
			$DishFound = false;
			$cart = Session::get('Cart');

			foreach($cart as $item) {
				if ($item['Dish_id'] == $addDishID) {
				    $DishFound = true;
				}
			}

			if($DishFound == true){
				//If there is already the same dish in the cart, increase quantitiy
				foreach($cart as &$item) {
					if($item['Dish_id'] == $addDishID){
						$item['Quantity'] = $item['Quantity'] + $addDishQuantity;
						var_dump($item);
						break;
					}
				}
				Session::put('Cart', $cart);
			} else{
				//If there is a new Dish
				Session::push('Cart', $array = [
					'Dish_id' => $addDishID,
					'Quantity' => $addDishQuantity,
					//Inculude dish name into session array
					//Include dish price/subtotam into session array


				]);
			}



		}















		// $newItems = [];



		// // $dishFound = false;
		// $cartSession = Session::get('Cart');

		// foreach ($_POST as $dish_id => $qauntity) {

		// 	if($qauntity > 0){
		// 		array_push($newItems, [
		// 			'ID' => $dish_id,
		// 			'Quantity'=> $qauntity, 
		// 		]);
		// 	}
			

		// 	// foreach($cartSession as $item){
		// 	// 	if($item['Dish_id'] === $dish_id){
		// 	// 		$dishFound = true;
		// 	// 		var_dump("there was a dish found");
		// 	// 		break;
		// 	// 	}
		// 	// }




		// 	// if($qauntity > 0){
		// 	// 	echo "dish ".$dish_id." with quantiy of ".$qauntity."<br>";
		// 	// 	Session::push('Cart', $array = [
		// 	// 			'Dish_id' => $dish_id,
		// 	// 			'Quantity' => $qauntity,
		// 	// 		]);
		// 	// }



		// }

		// foreach ($cartSession as $ExistingDish) {

		// 	echo "dish ".$ExistingDish['Dish_id']." with quantiy of ".$ExistingDish['Quantity']."<br>";
		// 	foreach ($newItems as $newItem) {
		// 		if($newItem['ID'] === $ExistingDish['Dish_id']){
		// 			$ExistingDish['Quantity'] = $ExistingDish['Quantity'] + $newItem['Quantity'];
		// 			break;
		// 		}
		// 	}
		// 	Session::put('Cart', $cartSession);

		// }



		// echo "<pre>";
		// print_r($newItems);
		// echo "</pre>";

		// // foreach ($newItems as $key) {
		// // 	var_dump($key['ID']);
		// // }




	}
}
