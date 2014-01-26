<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond10
 *
 * answer of cond16
 */
class Cond10 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => self::D,
			self::B => self::A,
			self::C => self::E,
			self::D => self::B,
			self::E => self::C
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		return ($cVector[16]->getAnswer() === $this->getVal());
	}
}