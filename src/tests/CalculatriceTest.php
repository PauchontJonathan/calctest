<?php
use PHPUnit\Framework\TestCase;
use Calculatrice;

class CalculatriceTest extends TestCase
{
    public function testPreCall()
    {
        $calculator = new Calculatrice();
        $methods = [
            '+',
            '-',
            '/',
            '*'
        ];
        foreach ($methods as $method) {
            $isPass = null;
            switch ($method) {
                case '+':
                    $result = $calculator->preCall('+', 10, 2);
                    $isPass = $this->assertEquals(12, $result, 'Expected result needs to be 12');
                case  '-':
                    $result = $calculator->preCall('-', 10, 2);
                    $isPass = $this->assertEquals(8, $result, 'Expected result needs to be 8');
                case '*':
                    $result = $calculator->preCall('*', 10, 2);
                    $isPass = $this->assertEquals(20, $result, 'Expected result needs to be 20');
                case '/':
                    $result = $calculator->preCall('/', 10, 2);
                    $isPass = $this->assertEquals(5, $result, 'Expected result needs to be 5');
                default:
                    break;
            }
            if (!$isPass) {
                return $isPass;
            } else {
                return true;
            }
        }
    }
}