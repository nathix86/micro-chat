<?php

namespace AppBundle\Topics\Messages;

use Symfony\Component\Security\Core\User\UserInterface;

interface MessageInterface
{
    /**
     * Sets the message content.
     *
     * @param string $content
     * @return self
     */
    public function setContent($content);

    /**
     * Get the message content.
     *
     * @return string
     */
    public function getContent();

    /**
     * Sets the message date.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date);

    /**
     * Get the message date.
     *
     * @return \DateTime
     */
    public function getDate();

    /**
     * Sets the message user.
     *
     * @param UserInterface $user
     * @return self
     */
    public function setUser(UserInterface $user);

    /**
     * Get the message user.
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public function getUser();

    /**
     * Return the message HTML representation.
     *
     * @return string
     */
    public function render();
}