<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dishes;

use Session;

class CheckoutController extends Controller
{
    public function index()
    {

		return view("checkout.index", compact("cart"));

    }

	public function update(Request $request, $id)
	{
		// if ($request->quantity == 0) {
		// 	return redirect('listing');
		// } ;

		// 	To turn off session
		// Session::flush();
		$updDishID = $id;

		//Match the dish ID to the Dish name
		$dish = Dishes::findOrFail($updDishID);

		$updDishName = $dish->name;
		$updDishPrice = $dish->price;

		// var_dump($updDishName);
	    
		$updDishQuantity = $request->quantity;
	
		//Check to see if there is already a session
		// if(! Session::has('Cart')){
		// 	Session::put('Cart', $array = []);
		// }

		if(isset($_POST['updateCart'])){

			$cart = Session::get('Cart');

				//If there is already the same dish in the cart, increase quantitiy or delete from the cart
				$index = 0;
				foreach($cart as &$item) {

					if($item['Dish_id'] == $updDishID){
						$item['Quantity'] = $updDishQuantity;
						$item['Subtotal'] = $item['Quantity'] * $updDishPrice;
						// var_dump($item);

						break;
					}
					$index++;
				}
				if ( $updDishQuantity > 0) {
					Session::put('Cart', $cart);
				}
					else {
						unset($cart[$index]);
						Session::put('Cart', $cart);
					}
		}
		return redirect('checkout');
	}

	public function pay()
	{
		

	}

	public function email()
	{
		

	}

	public function text()
	{
		

	}

}
