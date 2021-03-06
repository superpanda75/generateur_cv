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
 * If you need to perform changes, edit the KnowledgeBean class instead!
 */

/**
 * The KnowledgeBaseBean class maps the 'knowledge' table in database.
 */
class KnowledgeBaseBean extends AbstractTDBMObject implements \JsonSerializable
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
    }
        /**
     * The getter for the "id" column.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->get('id', 'knowledge');
    }

    /**
     * The setter for the "id" column.
     *
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->set('id', $id, 'knowledge');
    }

    /**
     * Returns the UserBean object bound to this object via the user_id column.
     *
     * @return UserBean
     */
    public function getUser() {
        return $this->getRef('fk_knowledge_user', 'knowledge');
    }

    /**
     * The setter for the UserBean object bound to this object via the user_id column.
     *
     * @param UserBean $object
     */
    public function setUser(UserBean $object = null) {
        $this->setRef('fk_knowledge_user', $object, 'knowledge');
    }

    /**
     * The getter for the "title" column.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->get('title', 'knowledge');
    }

    /**
     * The setter for the "title" column.
     *
     * @param string $title
     */
    public function setTitle(string $title = null)
    {
        $this->set('title', $title, 'knowledge');
    }

    /**
     * The getter for the "comment" column.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->get('comment', 'knowledge');
    }

    /**
     * The setter for the "comment" column.
     *
     * @param string $comment
     */
    public function setComment(string $comment = null)
    {
        $this->set('comment', $comment, 'knowledge');
    }

    /**
     * The getter for the "company" column.
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->get('company', 'knowledge');
    }

    /**
     * The setter for the "company" column.
     *
     * @param string $company
     */
    public function setCompany(string $company = null)
    {
        $this->set('company', $company, 'knowledge');
    }

    /**
     * The getter for the "adress" column.
     *
     * @return string|null
     */
    public function getAdress()
    {
        return $this->get('adress', 'knowledge');
    }

    /**
     * The setter for the "adress" column.
     *
     * @param string $adress
     */
    public function setAdress(string $adress = null)
    {
        $this->set('adress', $adress, 'knowledge');
    }

    /**
     * The getter for the "start_date" column.
     *
     * @return \DateTimeInterface|null
     */
    public function getStartDate()
    {
        return $this->get('start_date', 'knowledge');
    }

    /**
     * The setter for the "start_date" column.
     *
     * @param \DateTimeInterface $start_date
     */
    public function setStartDate(\DateTimeInterface $start_date = null)
    {
        $this->set('start_date', $start_date, 'knowledge');
    }

    /**
     * The getter for the "end_date" column.
     *
     * @return \DateTimeInterface|null
     */
    public function getEndDate()
    {
        return $this->get('end_date', 'knowledge');
    }

    /**
     * The setter for the "end_date" column.
     *
     * @param \DateTimeInterface $end_date
     */
    public function setEndDate(\DateTimeInterface $end_date = null)
    {
        $this->set('end_date', $end_date, 'knowledge');
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
        $array['company'] = $this->getCompany();
        $array['adress'] = $this->getAdress();
        $array['startDate'] = ($this->getStartDate() === null) ? null : $this->getStartDate()->format('c');
        $array['endDate'] = ($this->getEndDate() === null) ? null : $this->getEndDate()->format('c');


        return $array;
    }

    /**
     * Returns an array of used tables by this bean (from parent to child relationship).
     *
     * @return string[]
     */
    protected function getUsedTables()
    {
        return [ 'knowledge' ];
    }

    /**
     * Method called when the bean is removed from database.
     *
     */
    protected function onDelete()
    {
        parent::onDelete();
        $this->setRef('fk_knowledge_user', null, 'knowledge');

    }
}
