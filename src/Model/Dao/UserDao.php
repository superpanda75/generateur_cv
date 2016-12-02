<?php

/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

namespace generateur_cv\Model\Dao;

use generateur_cv\Model\Dao\Generated\UserBaseDao;
use Mouf\Security\UserService\UserDaoInterface;

/**
 * The UserDao class will maintain the persistence of UserBean class into the user table.
 */
class UserDao extends UserBaseDao implements UserDaoInterface
{

    /**
     * Returns a user from its login and its password, or null if the login or credentials are false.
     *
     * @param string $login
     * @param string $password
     * @return UserInterface
     */
    public function getUserByCredentials($login, $password) {
        return $this->findOne('user.email = :email AND user.password = :password', ['email' => $login, 'password' => $password]);
    }

    /**
     * Returns a user from its token.
     *
     * @param string $token
     * @return UserInterface
     */
    public function getUserByToken($token) {
        //Not needed
    }

    /**
     * Discards a token.
     *
     * @param string $token
     */
    public function discardToken($token){
        //Not needed
    }

    /**
     * Returns a user from its ID
     *
     * @param string $id
     * @return UserInterface
     */
    public function getUserById($id){
        return $this->findOne('user.id = :id', ['id' => $id]);
    }

    /**
     * Returns a user from its login
     *
     * @param string $login
     * @return UserInterface
     */
    public function getUserByLogin($login) {
        return $this->findOne('user.email = :email', ['email' => $login]);

    }
}