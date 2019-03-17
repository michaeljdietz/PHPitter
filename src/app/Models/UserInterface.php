<?php

namespace PHPitter\Models;

interface UserInterface
{
    /**
     * @return string
     */
    public function getUserId();

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @return \DateTime
     */
    public function getCreatedOn();

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId);

    /**
     * @param string $username
     * @return $this
     */
    public function setUsername($username);

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * @param string $url
     * @return $this
     */
    public function setAvatarUrl($url);

    /**
     * @param \DateTime $dateTime
     * @return $this
     */
    public function setCreatedOn(\DateTime $dateTime);

}