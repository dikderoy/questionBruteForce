<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 27.01.14
 * Time: 23:23
 */
class Helper
{
	/**
	 * autoloader function
	 *
	 * @param $classname
	 */
	public static function load($classname)
	{
		include_once '.' . DIRECTORY_SEPARATOR . $classname . '.php';
	}

	/**
	 * @param $string
	 *
	 * @return array
	 */
	public static function parseString($string)
	{
		$map = [];
		for ($i = 0; $i < 20; $i++) {
			switch ($string[$i]) {
				case 'A':
					$condition = Condition::A;
					break;
				case 'B':
					$condition = Condition::B;
					break;
				case 'C':
					$condition = Condition::C;
					break;
				case 'D':
					$condition = Condition::D;
					break;
				case 'E':
					$condition = Condition::E;
					break;
				default:
					$condition = Condition::A;
			}
			$map[$i + 1] = $condition;
		}
		return $map;
	}

	/**
	 * @param Condition[] $map
	 * @param             $results
	 *
	 * @return string
	 */
	public static function drawAnswerMap($map, $results)
	{
		$line = "\n" . "answer map:\n";
		for ($idx = 1; $idx < 21; $idx++) {
			$line .= sprintf('|%2d', $idx);
		}
		$line .= "\n";
		for ($idx = 1; $idx < 21; $idx++) {
			switch ($map[$idx]->getAnswer()) {
				case Condition::A:
					$char = 'A';
					break;
				case Condition::B:
					$char = 'B';
					break;
				case Condition::C:
					$char = 'C';
					break;
				case Condition::D:
					$char = 'D';
					break;
				case Condition::E:
					$char = 'E';
					break;
				default:
					$char = '_';
			}
			$line .= "|$char ";
		}
		$line .= "\n";
		for ($idx = 1; $idx < 21; $idx++) {
			$line .= ($results[$idx] ? '|T ' : '|F ');
		}
		return $line;
	}
}