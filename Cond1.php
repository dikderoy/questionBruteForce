<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond1
 *
 * first question with answer=B
 */
class Cond1 extends Condition
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
		foreach ($cVector as $idx => $condition) {
			if ($condition->getAnswer() === self::B) {
				return ($this->getVal() === ($idx));
			}
		}
		return false;
	}
}