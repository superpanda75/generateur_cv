<?php

/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

namespace generateur_cv\Model\Dao;

use generateur_cv\Model\Bean\SkillBean;
use generateur_cv\Model\Bean\UserBean;
use generateur_cv\Model\Dao\Generated\UserBaseDao;
use Mouf\Security\UserService\UserDaoInterface;
use Mouf\Database\TDBM\DbRow;
use Mouf\Database\TDBM\AbstractTDBMObject;
use Mouf\Database\TDBM\TDBMObject;
use Mouf\Database\QueryWriter\Utils;
use Mouf\Database\TDBM\OrderByAnalyzer;
use Mouf\Database\TDBM\Utils\TDBMDaoGenerator;
use Mouf\Database\TDBM\AlterableResultIterator;
/**
 * The UserDao class will maintain the persistence of UserBean class into the user table.
 */
class UserDao extends UserBaseDao implements UserDaoInterface
{
    /**
     * @var SkillBean
     */
    protected $skillBean;

    /**
     * @var UserBean
     */
    protected $userBean;

    /**
     * @var TDBMDaoGenerator
     */
    protected $tdbmDaoGenerator;

    /**
     * @var AbstractTDBMObject
     */
    protected $abstracrTdbmObject;

    /**
     * @var DbRow
     */
    protected $DbRow;

    /**
     * @var TDBMObject
     */
    protected $tdbmobject;

    /**
     * @var OrderByAnalyzer
     */
    protected $orderByAnalyzer;

    /**
     * @var AlterableResultIterator
     */
    protected $alterableResultIterator;



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
        return $this->findOne('user.email = :email', ['email' => $login]);}

    /**
     * return highest id of the table user, will be used to set the new id, cause no login management for this project
     *
     * @return int
     */
    public function getHigherId()
    {



        $USERS = $this->tdbmService->findObject('user','user.id = (SELECT MAX(id) FROM user;)',array(),array(),null);
        return $USERS;


    }

    /**
     * return current user data
     * @return array
     */
    public function getUserMaxId(){
        $link = mysqli_connect("localhost","root","","cv") or die($link);
        $sql = mysqli_query($link,'SELECT MAX(id) as max_id FROM user');
        $return = mysqli_fetch_all($sql,MYSQLI_ASSOC);
        return $return;
    }

    /**
     * return current user data
     * @param int $id
     * @return array
     */
    public function getUserData($id){
        $link = mysqli_connect("localhost","root","","cv") or die($link);
        $sql = mysqli_query($link, 'SELECT * FROM user WHERE id = '.$id);
        $return = mysqli_fetch_all($sql,MYSQLI_ASSOC);
        return $return;
    }

}
