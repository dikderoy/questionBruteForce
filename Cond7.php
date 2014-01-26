<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond7
 *
 * answer of this question and following (cond8) differs in letter position by N chars
 * where N is - ?
 */
class Cond7 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 4,
			self::B => 3,
			self::C => 2,
			self::D => 1,
			self::E => 0
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		$letterValue = [
			self::A => 1,
			self::B => 2,
			self::C => 3,
			self::D => 4,
			self::E => 5
		];

		return (abs($letterValue[$cVector[8]->getAnswer()] - $letterValue[$this->getAnswer()]) === $this->getVal());
	}
}