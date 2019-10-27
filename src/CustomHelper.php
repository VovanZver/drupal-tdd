<?php

namespace Drupal\tdd_custom;

/**
 * Defines a CustomHelper class.
 */
class CustomHelper
{

    private $length = 0;

    /**
     * @param int $length
     */
    public function setLength(int $length)
    {
        $this->length = $length;
    }

    /**
     * @return int
     *   The length of the unit.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return array
     *   The content of the unit.
     */
    public function getContent(): array
    {
        return [
            'head' => [

            ],
            'body' => [

            ],
        ];
    }

}
