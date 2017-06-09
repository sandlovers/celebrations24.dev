<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Anam\Phpcart\Cart;
use Cartalyst\Stripe\Stripe;

class ApiCartController extends Controller
{
	 private $cart;
	 private $stripe;

	 public function __construct()
    {
        $this->cart = new Cart();
        $this->stripe = Stripe::make();
    }
    
	public function addItem(Request $request){

			$this->cart->add([
				'id'       => $request->productId,
				'name'     => $request->name,
				'quantity' => $request->quantity,
				'price'    => $request->price
			]);

			$this->cart->getItems();
	}

	public function getProductsFromStripe(){
		
		$products = $this->stripe->products()->all();
		return $products;
	}

	public function getItemsInCart(){
		return $this->cart->getItems();
	}

	public function getItemCount(){

		return $this->cart->count();
	}

	public function getCartTotal(){

		return $this->cart->getTotal();
	}

	public function removeItem(Request $request){
		$this->cart->remove($request->productId);
	}

	public function purchase(Request $request){

		// Check if a customer has been created

		if(!session('customer')){
			$customer = $this->stripe->customers()->create([
	    		'email' => $request->email,
			]);

			session(['customer' => $customer['id']]);
		}

		if(session('card')){
			$this->stripe->cards()->delete(session('customer'), session('card'));
		}

			$token = $this->stripe->tokens()->create([
		    	'card' => [
		        'number'    => $request->ccnumber,
		        'exp_month' => $request->epmo,
		        'cvc'       => $request->cccvv,
		        'exp_year'  => $request->epyear,
	    	],

			]);

			$card = $this->stripe->cards()->create(session('customer'), $token['id']);

			session(['card' => $card['id']]);

		$charge = $this->stripe->charges()->create([
    		'customer' => session('customer'),
    		'currency' => 'USD',
    		'amount'   => $request->total,
		]);

		return response()->json([ 'success' => true]);


	}


}
