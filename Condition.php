<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:30
 */
abstract class Condition
{
	const A    = 0;
	const B    = 1;
	const C    = 2;
	const D    = 3;
	const E    = 4;
	const ALL  = 5;
	const NONE = 6;
	protected $val;
	protected $answer;

	public function __construct($value)
	{
		$this->setAnswer($value);
	}

	protected function values()
	{
		return [
			self::A => 1,
			self::B => 2,
			self::C => 3,
			self::D => 4,
			self::E => 5
		];
	}

	/**
	 * @param mixed $answer
	 */
	public function setAnswer($answer)
	{
		$this->answer = $answer;
		$this->setVal($answer);
	}

	public function nextAnswer()
	{
		if ($this->getAnswer() !== self::E) {
			$this->setAnswer($this->getAnswer() + 1);
			return true;
		}
		return false;
	}

	/**
	 * @return mixed
	 */
	public function getAnswer()
	{
		return $this->answer;
	}

	/**
	 * @param mixed $valueKey
	 */
	public function setVal($valueKey)
	{
		return $this->val = $this->values()[$valueKey];
	}

	/**
	 * @return mixed
	 */
	public function getVal()
	{
		return $this->val;
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	abstract public function check(array $cVector);
}