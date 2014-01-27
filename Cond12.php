<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond12
 *
 * amount of questions with answer = B/C/D
 */
class Cond12 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => function ($a) { //четное
					return ($a % 2 === 0);
				},
			self::B => function ($a) { //нечетное
					return ($a % 2 !== 0);
				},
			self::C => function ($a) { //полный квадрат = имеет квадратный корень без дробной части
					return (fmod(sqrt($a), 1) === 0);
				},
			self::D => function ($a) { //является простым
					var_dump($a);
					$simpleRange = [1, 2, 3, 5, 7, 11, 13, 17, 19];
					return in_array($a, $simpleRange);
				},
			self::E => function ($a) { //делится на 5
					return ($a % 5 === 0);
				},
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
		for ($i = 1; $i < 21; $i++) {
			$answer = $cVector[$i]->getAnswer();
			if ($answer == self::B || $answer == self::C || $answer == self::D)
				++$count;
		}
		/** @var callable $func */
		$func = $this->getVal();
		return $func($count);
	}
}