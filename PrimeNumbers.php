<?php

class PrimeNumbers
{
	/** @var array */
	protected $primeNumbers;

	/**
	 * @return array
	 */
	function findPrimeNumbers(): array
	{
		$primeNumbers = [];

		for ($i = 2; 1 == 1; $i++) {
			if ($this->isPrime($i)) {
				$primeNumbers[] = $i;
			}

			if (count($primeNumbers) === 10) {
				break;
			}
		}

		$this->primeNumbers = $primeNumbers;

		return $this->primeNumbers;
	}

	/**
	 * @param $n
	 * @return bool
	 */
	function isPrime($n): bool
	{
		for ($i = 2; $i < $n; $i++) {
			if ($n % $i === 0) {
				return false;
			}
		}

		return true;
	}

	/**
	 * @return void
	 */
	function printMultiplicationTable(): void
	{
		$rows = $this->primeNumbers;
		$columns = $this->primeNumbers;

		echo '     ';

		foreach ($columns as $key => $col) {
			echo str_pad($col, 4) . ' ';
		}

		echo PHP_EOL . PHP_EOL;

		foreach ($rows as $k => $row) {
			echo str_pad($row, 4) . ' ';

			foreach ($columns as $index => $column) {
				echo str_pad($row * $column, 4) . ' ';
			}

			echo PHP_EOL . PHP_EOL;
		}

		echo PHP_EOL . PHP_EOL;
	}
}

$primeNumbersClass = new PrimeNumbers();
$primeNumbersClass->findPrimeNumbers();
$primeNumbersClass->printMultiplicationTable();



