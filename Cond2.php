<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond2
 *
 * the only 2-question chain with equal answer
 */
class Cond2 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 6 + 7,
			self::B => 7 + 8,
			self::C => 8 + 9,
			self::D => 9 + 10,
			self::E => 10 + 11
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
		for ($i = 6; $i < 11; $i++) {
			if ($cVector[$i]->getAnswer() === $cVector[$i + 1]->getAnswer()) {
				if ($count === null) {
					$count = ($i + $i + 1);
				} else {
					return false;
				}
			}
		}
		return ($this->getVal() === $count);
	}
}