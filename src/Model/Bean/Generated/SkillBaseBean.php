<?php
namespace generateur_cv\Model\Bean\Generated;

use Mouf\Database\TDBM\ResultIterator;
use Mouf\Database\TDBM\ResultArray;
use Mouf\Database\TDBM\AlterableResultIterator;
use generateur_cv\Model\Bean\UserBean;
use Mouf\Database\TDBM\AbstractTDBMObject;

/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the SkillBean class instead!
 */

/**
 * The SkillBaseBean class maps the 'skill' table in database.
 */
class SkillBaseBean extends AbstractTDBMObject implements \JsonSerializable
{
    /**
     * The constructor takes all compulsory arguments.
     *

     */
    public function __construct()
    {
        parent::__construct();
        $this->setTitle('0');
        $this->setComment('0');
        $this->setLevel('0');
    }
        /**
     * The getter for the "id" column.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->get('id', 'skill');
    }

    /**
     * The setter for the "id" column.
     *
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->set('id', $id, 'skill');
    }

    /**
     * Returns the UserBean object bound to this object via the user_id column.
     *
     * @return UserBean
     */
    public function getUser() {
        return $this->getRef('fk_skill_user', 'skill');
    }

    /**
     * The setter for the UserBean object bound to this object via the user_id column.
     *
     * @param UserBean $object
     */
    public function setUser(UserBean $object = null) {
        $this->setRef('fk_skill_user', $object,'skill');
    }

    /**
     * The getter for the "title" column.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title', 'skill');
    }

    /**
     * The setter for the "title" column.
     *
     * @param string $title
     */
    public function setTitle(string $title = null)
    {
        $this->set('title', $title, 'skill');
    }

    /**
     * The getter for the "comment" column.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->get('comment', 'skill');
    }

    /**
     * The setter for the "comment" column.
     *
     * @param string $comment
     */
    public function setComment(string $comment = null)
    {
        $this->set('comment', $comment, 'skill');
    }

    /**
     * The getter for the "level" column.
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->get('level', 'skill');
    }

    /**
     * The setter for the "level" column.
     *
     * @param int $level
     */
    public function setLevel(int $level = null)
    {
        $this->set('level', $level, 'skill');
    }


    /**
     * Serializes the object for JSON encoding.
     *
     * @param bool $stopRecursion Parameter used internally by TDBM to stop embedded objects from embedding other objects.
     * @return array
     */
    public function jsonSerialize($stopRecursion = false)
    {
        $array = [];
        $array['id'] = $this->getId();
        if (!$stopRecursion) {
            $object = $this->getUser();
            $array['user'] = $object ? $object->jsonSerialize(true) : null;
        }
        $array['title'] = $this->getTitle();
        $array['comment'] = $this->getComment();
        $array['level'] = $this->getLevel();


        return $array;
    }

    /**
     * Returns an array of used tables by this bean (from parent to child relationship).
     *
     * @return string[]
     */
    protected function getUsedTables()
    {
        return [ 'skill' ];
    }

    /**
     * Method called when the bean is removed from database.
     *
     */
    protected function onDelete()
    {
        parent::onDelete();
        $this->setRef('fk_skill_user', null, 'skill');

    }
}
