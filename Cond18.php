<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond18
 *
 * amount of questions with answer = A is equal to amount of question with answer = ?
 */
class Cond18 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => self::B,
			self::B => self::C,
			self::C => self::D,
			self::D => self::E,
			self::E => self::NONE
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		$count0 = 0;
		$count1 = 0;
		$count2 = 0;
		$count3 = 0;
		$count4 = 0;
		foreach ($cVector as $condition) {
			$counter = "count" . $condition->getAnswer();
			++$$counter;
		}
		//counter of selected answer value equals to counter of A (counter0) and val is not NONE
		if ($this->getVal() !== self::NONE && ${"count" . $this->getVal()} === $count0)
			return true;
		elseif ($this->getVal() === self::NONE) //if val is NONE make sure none of counters meet condition
			for ($i = 2; $i < 5; $i++)
				if (${"count" . $i} === $count0)
					return false;
		return false;
	}
}