<?php

namespace PHPitter\Models;

class Tweet implements TweetInterface
{
    const MAX_CHARACTERS = 140;

    /**
     * @var string
     */
    protected $tweetId;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var \DateTime
     */
    protected $createdOn;

    /**
     * @var string
     */
    protected $mediaUrl;

    /**
     * @return string
     */
    public function getTweetId()
    {
        return $this->tweetId;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @return string
     */
    public function getMediaUrl()
    {
        return $this->mediaUrl;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setTweetId($id)
    {
        $this->tweetId = $id;
        return $this;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        if (strlen($text) > self::MAX_CHARACTERS) {
            $text = substr($text, 0, self::MAX_CHARACTERS);
        }

        $this->text = $text;

        return $this;
    }

    /**
     * @param \DateTime $dateTime
     * @return $this
     */
    public function setCreatedOn(\DateTime $dateTime)
    {
        $this->createdOn = $dateTime;

        return $this;
    }

    /**
     * @param string $url
     * @return $this|TweetInterface
     */
    public function setMediaUrl($url)
    {
        $this->mediaUrl = $url;

        return $this;
    }

}