<?php

namespace Project\App\ORM;

use Project\ORM\Model\Entity;
/** This interface allows authorization using a password */
use PHPixie\AuthLogin\Repository\User as LoginUser;

/**
 * User Entity
 */
class User extends Entity implements LoginUser
{
    /**
     * Returns the user's password hash.
     * In our case it's just his 'passwordHash' field.
     * @return string|null
     */
    public function passwordHash()
    {
        return $this->getField('passwordHash');
    }

    public function email()
    {
        return $this->getField('email');
    }
}