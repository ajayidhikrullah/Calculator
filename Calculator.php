<?php

class Calculator {

	private $first_number;
	private $second_number;


	/**
	 * The class constructor.
	 * 
	 * @var $first_number
	 * @var $second_number
	 */
	public function __construct(int $first_number, int $second_number)
	{
		$this->first_number = $first_number;
		$this->second_number = $second_number;
	}

	/**
	 * Adds two numbers.
	 * 
	 */
	public function add(){
		return $this->first_number + $this->second_number;
	}

	/**
	 * Substracts two numbers.
	 * 
	 */
	public function substract(){
		return $this->first_number - $this->second_number;
	}

	/**
	 * Divide two numbers.
	 * 
	 */
	public function multiply()
	{
		return $this->first_number * $this->second_number;
	}
}