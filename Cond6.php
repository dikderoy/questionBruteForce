<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond6
 *
 * answer of cond17
 */
class Cond6 extends Condition
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
		if ($this->getVal() === self::ALL) {
			return false;
		} elseif ($this->getVal() === self::NONE) {
			return !in_array($cVector[17]->getAnswer(), [self::C, self::D, self::E]);
		}
		return ($cVector[17]->getAnswer() === $this->getVal());
	}
}