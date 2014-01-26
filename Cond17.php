<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond17
 *
 * answer of cond6
 */
class Cond17 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => self::C,
			self::B => self::D,
			self::C => self::E,
			self::D => self::NONE,
			self::E => self::ALL
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		return ($cVector[6]->getAnswer() === $this->getVal());
	}
}