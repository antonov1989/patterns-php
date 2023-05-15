<?php

class Math {
    private int $min;
    private int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
    
    /**
     * @return string
     */
    public function range(): string
    {
        // check error
        if ($this->min > $this->max) {
            return 'Error';
        }

        $range2 = $this->del(2);
        $range3 = $this->del(3);

        return implode(' ', $range2) . '/n' . implode(' ', $range3);
    }
    
    /**
     * @param $del
     * @return array
     */
    private function del($del): array
    {
        $rang = [];
        foreach (range($this->min, $this->max) as $item) {
            if ($item % $del === 0) {
                $rang[] = $item;
            }
        }

        return $rang;
    }
}


$math = new Math(5, 11);

echo $math->range();