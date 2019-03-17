<?php

namespace PHPitter\Models;

interface StorageAdapterInterface
{
    /**
     * @param string $key
     * @return string
     */
    public function get($key);

    /**
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function set($key, $value);

    /**
     * @param string[] $keys
     * @return string[]
     */
    public function mGet($keys);

    /**
     * @param string[] $keyValues
     * @return $this
     */
    public function mSet($keyValues);

    /**
     * @param string $key
     * @param float $score
     * @param string $value
     * @return $this
     */
    public function zAdd($key, $score, $value);

    /**
     * @param string $key
     * @param float $start
     * @param float $end
     * @param bool $withScores
     * @return string[]
     */
    public function zRange($key, $start, $end, $withScores = false);
}