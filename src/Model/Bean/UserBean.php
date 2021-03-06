<?php
/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

namespace generateur_cv\Model\Bean;

use generateur_cv\Model\Bean\Generated\UserBaseBean;
use Mouf\Security\UserService\UserInterface;

/**
 * The UserBean class maps the 'user' table in database.
 */
class UserBean extends UserBaseBean implements UserInterface
{

    /**
     * Returns the login for the current user.
     *
     * @return string
     */
    public function getLogin() {
        return $this->getEmail();
    }
}
