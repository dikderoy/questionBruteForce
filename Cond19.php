<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond19
 *
 * answer of this condition
 */
class Cond19 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => self::A,
			self::B => self::B,
			self::C => self::C,
			self::D => self::D,
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
		return true;
	}
}