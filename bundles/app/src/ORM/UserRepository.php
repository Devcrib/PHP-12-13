<?php


namespace Project\App\ORM;

use Project\App\ORM\Model\Repository;
use Project\App\ORM\User;
/** This interface allows authorization using a password */
use PHPixie\AuthLogin\Repository as LoginUserRepository;

/**
 * User Repository
 */
class UserRepository extends Repository implements LoginUserRepository
{
    /**
     * Finds a user by his id
     * @param mixed $id
     * @return User|null
     */
    public function getById($id)
    {
        return $this->query()
            ->in($id)
            ->findOne();
    }
    /**
     * Searches for a user by something that is considered his login.
     * In our case it is his email, but you can also search by multiple fields
     * to allow login with both email and username, etc.
     * @param mixed $login
     * @return User|null
     */
    public function getByLogin($login)
    {
        return $this->query()
            ->where('email', $login)
            ->findOne();
    }
}