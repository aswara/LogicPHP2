<?php
namespace App\Logic;

class Logic3 extends Logic
{
	// fibonacci function
	protected function fibonacci($n)
	{
		if ($n==0) {
			return 0;
		} elseif ($n==1) {
			return 1;
		} else {
			return self::fibonacci($n-1) + self::fibonacci($n-2);
		}
	}

	// fibonacci3 function
	protected function fibonacci3($n)
	{
		if ($n==0) {
			return 0;
		} elseif ($n==1 || $n==2 || $n==3) {
			return 1;
		} else {
			return self::fibonacci3($n-1) + self::fibonacci3($n-2) + self::fibonacci3($n-3);
		}
	}

	// greates common divisor
	protected function gcd($a, $b)
	{
		while ($b != 0) {
		    $c = $a % $b;
		    $a = $b;
		    $b = $c;
		}

		return $a;
	}

	//  KPK Function
	protected function kpk($a, $b)
	{
		return ($a / self::gcd($a,$b)) * $b;
	}

    protected function soal1($range)
    {
        for ($i = 0; $i < $range; $i++) {
        	self::$result[$i] = self::fibonacci($i);
        }
    }

    protected function soal2($range)
    {
        for ($i = 0; $i < $range; $i++) {
        	self::$result[$i] = self::fibonacci3($i);
        }
    }

    public static function soal3($bil1, $bil2)
    {
    	echo "\n";
    	echo "KPK dari $bil1 dan $bil2 adalah ".self::kpk($bil1,$bil2)."\n";
    	echo "FPB dari $bil1 dan $bil2 adalah ".self::gcd($bil1,$bil2)."\n";
    }

    protected function soal4($range)
    {
    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
	    		if ($i == $j) {
	    			self::$result[$i][$j] = ($j*2)+1;
	    		} elseif ($j == $range-$i-1) {
	    			self::$result[$i][$j] = ($range-1)*2 - $i*2;
	    		} elseif ($j <= $i && $j <= $range-$i-1) {
	    			self::$result[$i][$j] = "D";
	    		} elseif ($j >= $i && $j >= $range-$i-1) {
	    			self::$result[$i][$j] = "B";
	    		} elseif ($j >= $i && $j <= $range-$i-1) {
	    			self::$result[$i][$j] = "A";
	    		} elseif ($j <= $i && $j >= $range-$i-1) {
	    			self::$result[$i][$j] = "C";
	    		}
    		}
    	}
    }

    protected function soal5($range)
    {
    	$i = 0;
    	$j = 0;

    	for ($x = -$range; $x <= $range; $x++) {
    		for ($y = -$range; $y <= $range; $y++) {
				$nilai = abs($y) >= abs($x) ? abs($y) : abs($x);
				$nilai = abs($nilai-$range)+1;
				
				self::$result[$i][$j] = self::fibonacci($nilai);

				$j++;
    		}

    		$j = 0;
    		$i++;
    	}
    }

    protected function soal6($range)
    {
    	$i = 0;
    	$j = 0;

    	for ($x = -$range; $x <= $range; $x++) {
    		for ($y = -$range; $y <= $range; $y++) {
				$nilai = abs($y) >= abs($x) ? abs($y) : abs($x);
				$nilai = abs($nilai-$range)+1;

				if ($nilai%2 == 0) {
					self::$result[$i][$j] = " ";
				} else {
					self::$result[$i][$j] = $nilai;
				}

				$j++;
    		}

    		$j = 0;
    		$i++;
    	}
    }

    protected function soal7($range)
    {
    	$i = 0;
    	$j = 0;

    	for ($x = -$range; $x <= $range; $x++) {
    		for ($y = -$range; $y <= $range; $y++) {
				$nilai = abs($y) >= abs($x) ? abs($y) : abs($x);
				$nilai = abs($nilai-$range)+1;

				if ($nilai%2 == 0) {
					self::$result[$i][$j] = " ";
				} else {
					$nilai = ($nilai+1) / 2;
					self::$result[$i][$j] = self::fibonacci($nilai);
				}

				$j++;
    		}

    		$j = 0;
    		$i++;
    	}
    }

    protected function soal8($range)
    {
    	$i = 0;
    	$j = 0;
    	$huruf = ['A','B','C','D','E','F','G','H','I','J'];

    	for ($x = -$range; $x <= $range; $x++) {
    		for ($y = -$range; $y <= $range; $y++) {
				$nilai = abs($y) >= abs($x) ? abs($y) : abs($x);
				$nilai = abs($nilai-$range)+1;

				if ($nilai%2 == 0) {
					$nilai = ($nilai/2)-1;
					$index = $nilai%count($huruf);
					self::$result[$i][$j] = $huruf[$index];
				} else {
					$nilai = ($nilai+1) / 2;
					self::$result[$i][$j] = self::fibonacci($nilai);
				}

				$j++;
    		}

    		$j = 0;
    		$i++;
    	}
    }
}