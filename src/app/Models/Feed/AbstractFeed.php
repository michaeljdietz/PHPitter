<?php

namespace PHPitter\Models\Feed;

use PHPitter\Models\StorageAdapterInterface;

abstract class AbstractFeed implements FeedInterface
{
    /**
     * @var StorageAdapterInterface
     */
    protected $storageAdapter;

    protected $keyPrefix;

    protected $userId;

    public function __construct($userId, $storageAdapter)
    {
        $this->userId = $userId;
        $this->storageAdapter = $storageAdapter;
    }

    protected function getCacheKey() {
        return $this->keyPrefix.$this->userId;
    }

    public function getTweets($start = 0, $count = 1)
    {
        return $this->getStorageAdapter()->zRange($this->getCacheKey(), $start, $count);
    }

    /**
     * @return StorageAdapterInterface
     */
    public function getStorageAdapter()
    {
        return $this->storageAdapter;
    }
}