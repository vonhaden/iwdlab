<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author		ACME Development
 * @version		1.0
 */
 
class Math {

	// some useless constants
	public const PI = 3.14;
	public const ZERO = 0;

	/**
	 * Returns the sum of two numbers
	 *
	 * @param float $a
	 * @param float $b
	 * @return float
	 */
    
    // Wow, this adds!
	public static function add($num1, $num2){
		$sum = $num1 + $num2;
		return $sum;
	}
    
    // This says hi
	public static function sreynolds9(){
		return 'hi';
    }

	// This function was added by Stephany
	public static function lab1sr(){
		$math = 1 + 2;
		return $math;
	}

	public static function lab2sr(){
		$math2 = 1 + 2;
		return $math2;
	}
	
    // This does nothing
	public static function lzache(){}
    
    // This function was added by Lauren
    public static function lzache2(){
		return 'sup';
    }

}