<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond11
 *
 * amount of questions with answer = B preceding this question
 */
class Cond11 extends Condition
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
		for ($i = 10; $i > 0; $i--) {
			if ($cVector[$i]->getAnswer() === self::B)
				++$count;
		}
		return ($this->getVal() === $count);
	}
}