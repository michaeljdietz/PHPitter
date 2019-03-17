<?php

namespace PHPitter\Models\Feed;

class User extends AbstractFeed implements FeedInterface
{
    protected $keyPrefix = 'FEED_USER_';
}