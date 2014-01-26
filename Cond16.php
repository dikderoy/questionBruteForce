<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond16
 *
 * answer of cond10
 */
class Cond16 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => self::D,
			self::B => self::C,
			self::C => self::B,
			self::D => self::A,
			self::E => self::E
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		return ($cVector[10]->getAnswer() === $this->getVal());
	}
}