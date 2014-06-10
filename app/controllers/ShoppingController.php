<?php
/*
Shopping controller can be used to perform operations on shopping cart. 
*/
class ShoppingController extends BaseController {
	/*
	Use this function to get all the form parameters from the checkout form.
	*/
	public function postCheckout()
	{
		$validator = Validator::make(
			array(
				'firstname'=>Input::get('firstname'),
				'lastname' =>Input::get('lastname'),
				'cardnumber'=>Input::get('cardnumber'),
				'cvv'=>Input::get('cvv'),
			),
			array(
				'firstname'=>'required|min:6|max:50',
				'lastname'=>'required|min:6|max:50',
				'cardnumber'=>'required|digits_between:15,16|numeric',
				'cvv'=>'required|digits_between:3,4|numeric',
			)
		);

		// if($validator->passes())
		// 	echo "Success";
		// else
		// 	echo "<br>".$validator->messages();

		if($validator->fails())
			return Redirect::to('/')->withErrors($validator);
		else
			// return Redirect::to('confirmation', array('orderDetails'=>Input::get()));
			return View::make('confirmation', array('orderDetails'=>Input::get()));
	}
}

?>