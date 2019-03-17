<?php

namespace PHPitter\Models\Feed;

use PHPitter\Models\StorageAdapterInterface;

interface FeedInterface
{
    /**
     * @param int $start
     * @param int $count
     * @return string[]
     */
    public function getTweets($start = 1, $count = 1);

    /**
     * @return StorageAdapterInterface
     */
    public function getStorageAdapter();
}