<?php namespace sevenspan\PaytmPayment\Facades;

use Illuminate\Support\Facades\Facade;

class Paytm extends Facade {

    protected static function getFacadeAccessor() 
    {
    	return 'paytm'; 
 	}
}