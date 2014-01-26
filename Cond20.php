<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:33
 */

/**
 * Class Cond20
 *
 * a standardized test is related to intelligence as barometer is related to ?
 */
class Cond20 extends Condition
{
	/**
	 * @return array
	 */
	protected function values()
	{
		return [
			self::A => 'temperature',
			self::B => 'wind speed',
			self::C => 'latitude',
			self::D => 'longitude',
			self::E => self::ALL
		];
	}

	/**
	 * @param Condition[] $cVector
	 *
	 * @return bool
	 */
	public function check(array $cVector)
	{
		return true;
	}
}