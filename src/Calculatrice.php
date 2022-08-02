<?php

class Calculatrice {
    /**
     * preCall
     *
     * @param  string $method
     * @param  float $a
     * @param  float $b
     * @return void
     */
    public function preCall(string $method, float $a, float $b): float
    {
        $methods = [
            '+' => 'add',
            '-' => 'sub',
            '*' => 'multiply',
            '/' => 'divide'
        ];

        $currentMethod = $methods[$method];
        return $this->$currentMethod($a, $b);
    }

    /**
     * add
     *
     * @param  float $a
     * @param  float $b
     * @return float
     */
    private function add(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * sub
     *
     * @param  float $a
     * @param  float $b
     * @return float
     */
    private function sub(float $a, float $b): float
    {
        return $a - $b;
    }

    /**
     * multiply
     *
     * @param  float $a
     * @param  float $b
     * @return float
     */
    private function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * divide
     *
     * @param  float $a
     * @param  float $b
     * @return float
     */
    private function divide(float $a, float $b): float
    {
        return $a / $b;
    }
}

$calculate = new Calculatrice();
$result = $calculate->preCall('+', 2, 5);

echo $result;