<?php

namespace PHPitter\Models;

interface DatabaseAdapterInterface
{
    /**
     * @return $this
     */
    public function connect();

    /**
     * @param string $query
     * @return array[]
     */
    public function fetchAll($query);

    /**
     * @param string $query
     * @return mixed
     */
    public function fetchOne($query);

    /**
     * @param string $query
     * @return $this
     */
    public function query($query);
}