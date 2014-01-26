<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond9
 *
 * next question with equal answer to this one
 */
class Cond9 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 10,
			self::B => 11,
			self::C => 12,
			self::D => 13,
			self::E => 14
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		$count = null;
		for ($i = 10; $i < 15; $i++) {
			if ($cVector[$i]->getAnswer() === $this->getAnswer() && $this->getVal() === $i) {
				return true;
			}
		}
		return false;
	}
}