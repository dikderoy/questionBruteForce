<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond5
 *
 * question with equal answer to this one
 */
class Cond5 extends Condition
{
	/**
	 * @return array
	 */
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
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		$count = null;
		for ($i = 1; $i < 6; $i++) {
			if ($cVector[$i]->getAnswer() === $this->getAnswer() && $this->getVal() === $i) {
				return true;
			}
		}
		return false;
	}
}