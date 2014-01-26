<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond8
 *
 * amount of questions with answer = A || E
 */
class Cond8 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 4,
			self::B => 5,
			self::C => 6,
			self::D => 7,
			self::E => 8
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
			if ($condition->getAnswer() === self::A || $condition->getAnswer() === self::E)
				++$count;
		}
		return ($this->getVal() === $count);
	}
}