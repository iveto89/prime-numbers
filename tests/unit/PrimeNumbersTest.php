<?php

use PHPUnit\Framework\TestCase;

require 'PrimeNumbers.php';

final class EmailTest extends TestCase
{
	public function testFindPrimeNumbers()
	{
		$primerNumbersArray = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];

		$primeNumbers = new PrimeNumbers;

		$this->assertEquals(10, count($primeNumbers->findPrimeNumbers()));
		$this->assertSame($primerNumbersArray, $primeNumbers->findPrimeNumbers());
	}

	public function testIsPrime()
	{
		$primeNumbers = new PrimeNumbers;

		$this->assertTrue($primeNumbers->isPrime(2));
	}
}