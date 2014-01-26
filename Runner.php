<?php

/**
 * Created by PhpStorm.
 * User: Deroy
 * Date: 26.01.14
 * Time: 21:51
 */
class Runner
{
	/**
	 * @var Condition[]
	 */
	public $stack = [];
	public $result = [];

	public function prepare($values)
	{
		for ($i = 1; $i < 21; $i++) {
			$class           = "Cond$i";
			$this->stack[$i] = new $class($values[$i]);
		}
	}

	public function run()
	{
		$overAllResult = true;
		$this->result  = [];
		foreach ($this->stack as $idx => $condition) {
			$res = $condition->check($this->stack);
			if (!$res)
				$overAllResult = false;
			$this->result[$idx] = $res;
		}
		return $overAllResult;
	}

	/**
	 * generate next 20-digit 5-based number in stack
	 */
	public function next()
	{
		for ($i = 1; $i < 21; $i++) {
			$upRes = $this->stack[$i]->nextAnswer();
			if (!$upRes && $i === 20) {
				throw new LengthException('Stack Overflow');
			} elseif (!$upRes && $i < 20) {
				//set next division +1 (this done on next loop)
				//$this->stack[$i+1]->nextAnswer();
				//reset current division to 0
				$this->stack[$i]->setAnswer(Condition::A);
				if ($i > 2) { //if it is not last division - reset everything to the left(right)
					for ($j = $i - 1; $j > 0; $j--) {
						$this->stack[$j]->setAnswer(Condition::A);
					}
				}
			} else {
				break;
			}
		}
	}
}