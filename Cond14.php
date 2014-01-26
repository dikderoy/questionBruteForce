<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond14
 *
 * amount of questions with answer = D
 */
class Cond14 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 6,
			self::B => 7,
			self::C => 8,
			self::D => 9,
			self::E => 10
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		$count = 0;
		foreach ($cVector as $condition) {
			if ($condition->getAnswer() === self::D)
				++$count;
		}
		return ($this->getVal() === $count);
	}
}