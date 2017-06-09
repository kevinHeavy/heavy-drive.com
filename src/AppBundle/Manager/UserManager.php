<?php

/**
 * Created by PhpStorm.
 * User: ashley
 * Date: 29/05/17
 * Time: 22:39
 */

namespace AppBundle\Manager;


use AppBundle\Manager\ManagerTrait\Memcached;
use Psr\Log\InvalidArgumentException;
use Symfony\Component\Security\Core\User\UserInterface;
use \FOS\UserBundle\Model\UserManager as FosUserManager;

class UserManager
{
    use Memcached;
    const USERNAME_AUTOCOMPLETION_PATTERN = '#([^ \(]+@[^ \)]+)#';
    /**
     * @var FosUserManager
     */
    protected $fosUserManager;

    /**
     * Constructor.
     *
     * @param FosUserManager $userManager
     */
    public function __construct(FosUserManager $userManager)
    {
        $this->fosUserManager = $userManager;
    }
    /**
     * Returns the first User found from a fulltext string.
     *
     * @param string $fullText
     *
     * @return UserInterface|null
     *
     * @throws InvalidArgumentException
     * @throws \Exception
     */
    public function getUserFromFulltext($fullText)
    {
        $fosUserManager = $this->fosUserManager;
        $username = $this->getUsernameFromAutocompletionString($fullText);
        // Returns an exception if the string is invalid.
        if (null === $username) {
            throw new InvalidArgumentException();
        }
        if (null !== $username) {
            $user = $fosUserManager->findUserByUsernameOrEmail($username);
            if (null !== $user) {
                return $user;
            }
        }
        throw new \Exception('User not found');
    }
    /**
     * Gets a list of user autocompletion string.
     *
     * @return string[]
     */
    public function getAutocompletionUsersList()
    {
        $fosUserManager = $this->fosUserManager;
        $autocompletionKey = 'autocompletion_users_list';
        $data = $this->cacheLoad($autocompletionKey);
        if (null !== $data) {
            return $data;
        }
        $users = [];
        foreach ($fosUserManager->findUsers() as $user) {
            $users[] = sprintf('%s %s (%s)', $user->getFirstName(), strtoupper($user->getLastName()), $user->getUsername());
        }
        $this->cacheSave($users, $autocompletionKey);
        return $users;
    }
    /**
     * Returns a valid username from the autocompletion string.
     *
     * @param string $autocompletionString
     *
     * @return null|string
     */
    protected function getUsernameFromAutocompletionString($autocompletionString)
    {
        preg_match(self::USERNAME_AUTOCOMPLETION_PATTERN, $autocompletionString, $usernameOrEmailMatch);
        if (isset($usernameOrEmailMatch[1])) {
            return $usernameOrEmailMatch[1];
        }
        return null;
    }
}