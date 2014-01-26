<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond13
 *
 * the only odd question with answer = A
 */
class Cond13 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 9,
			self::B => 11,
			self::C => 13,
			self::D => 15,
			self::E => 17,
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
		$idx   = null;
		for ($i = 1; $i < 21; $i++) {
			if ($i % 2 !== 0 && $cVector[$i]->getAnswer() === self::A) {
				++$count;
				$idx = $i;
			}
		}
		return ($count === 1 && $idx !== null && $idx === $this->getVal());
	}
}