<?php
/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 27.01.14
 * Time: 0:12
 */

function load($classname)
{
	include_once '.' . DIRECTORY_SEPARATOR . $classname . '.php';
}

spl_autoload_register('load');

/**
 * @param Condition[] $map
 * @param             $results
 *
 * @return string
 */
function drawAnswerMap($map, $results)
{
	$line = "\n" . "answer map:\n";
	for ($idx = 1; $idx < 21; $idx++) {
		$line .= sprintf('|%2d', $idx);
	}
	$line .= "\n";
	for ($idx = 1; $idx < 21; $idx++) {
		$char = '_';
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

$file = fopen('test_log.log', 'w');

$runner               = new Runner();
$initial_aswer_map    = array_fill(1, 20, Condition::A);
//$initial_aswer_map[1] = Condition::A;
$runner->prepare($initial_aswer_map);
$i         = 0;
$runResult = false;
try {

	while ($runResult == false) {
		$runResult = $runner->run();
		$line      = sprintf("\nrun result %8d: %1d", $i, $runResult);
		$line .= drawAnswerMap($runner->stack, $runner->result);

		//print $line;
		fwrite($file, $line);
		$runner->next();
		if ($i % 10000 === 0)
			print "\nrunning iteration #$i";
		++$i;
	}
} catch (LengthException $e) {
	print "\nprogram finished: $i iterations performed";
}