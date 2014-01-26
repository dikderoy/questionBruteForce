<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond3
 *
 * amount of questions with answer=E
 */
class Cond3 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 0,
			self::B => 1,
			self::C => 2,
			self::D => 3,
			self::E => 4
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
			if ($condition->getAnswer() === self::E)
				++$count;
		}
		return ($this->getVal() === $count);
	}
}