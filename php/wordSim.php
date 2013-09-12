<?php

class CharPairs
{
	private $string;
	private $string_length;
	private $_characterPairs = array();
		
	private function __construct($string)
	{
		$this->string = strtolower($string);
		$this->string_length = strlen($this->string);
		$this->create_char_pairs();
	}
	
	private function create_char_pairs()
	{
		$str_length = $this->string_length;
		$string = $this->string;
		$stringCharArray = str_split($string,1);
		$characterPairs = array();
		
		//build characters into character pair array
		for($i=0; $i < ($str_length - 1); $i++){
			$y = $i + 1;
			$characterPairs[]= $stringCharArray[$i].$stringCharArray[$y];			
		}
	
		$this->_characterPairs = $characterpairs;
	}
	
	public static function getCharPairs($string)
	{
		$CharPairs = new CharPairs($string);
		return $CharPairs->_characterPairs();
	}
}

class Similarity
{
	private $string1;
	private $string2;
	private $_s1CharPairs = array();
	private $s1_pair_count;
	private $_s2CharPairs = array();
	private $s2_pair_count;
	private $_incommon;
	private $incommon_count;
	private $sim;
	
	private function __construct($string1, $string2)
	{
		$this->string1 = strtolower($string1);
		$this->string2 = strtolower($string2);
		$this->_s1CharPairs = CharPairs::getCharPairs($string1);
		$this->s1_pair_count = count($this->_s1CharPairs);
		$this->_s2CharPairs = CharPairs::getCharPairs($string2);
		$this->s2_pair_count = count($this->_s2CharPairs);
		
		#run steps
		$this->find_in_common_char_pairs();
		$this->calculate_similarity();
	}
	
	private function find_in_common_char_pairs()
	{
		$this->_incommon = array_intersect($this->_s1CharPairs,$this->_s2CharPairs);
		$this->incommon_count = count($this->_incommon);	
	}
	
	private function calculate_similarity()
	{
		$numerator = 2 * $this->incommon_count;
		$denominator = $this->s1_pair_count + $this->s2_pair_count;
		$this->sim = $numerator / $denominator;
	}
	
	public static function calculate($string1, $string2)
	{
		$sim = new Similarity($string1, $string2);
		return $sim->sim;
	}
	
}