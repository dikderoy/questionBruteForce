<?php
/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 27.01.14
 * Time: 23:21
 */

//the answer is DADBEDDEDABADBADBABE

function load($classname)
{
	include_once '.' . DIRECTORY_SEPARATOR . $classname . '.php';
}

spl_autoload_register('load');

$runner            = new Runner();
$initial_aswer_map = Helper::parseString($argv[1]);

$runner->prepare($initial_aswer_map);

$runResult = false;
$runResult = $runner->run();
$line      = sprintf("\nrun result: %1d", $runResult);
$line .= Helper::drawAnswerMap($runner->stack, $runner->result);

print $line;

