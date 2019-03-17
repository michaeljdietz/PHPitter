<?php

namespace PHPitter\Models;

interface TweetInterface
{
    /**
     * @return string
     */
    public function getTweetId();

    /**
     * @return string
     */
    public function getText();

    /**
     * @return \DateTime
     */
    public function getCreatedOn();

    /**
     * @return string
     */
    public function getMediaUrl();

    /**
     * @param string $id
     * @return $this
     */
    public function setTweetId($id);

    /**
     * @param string $text
     * @return $this
     */
    public function setText($text);

    /**
     * @param \DateTime $dateTime
     * @return $this
     */
    public function setCreatedOn(\DateTime $dateTime);

    /**
     * @param string $url
     * @return $this
     */
    public function setMediaUrl($url);
}