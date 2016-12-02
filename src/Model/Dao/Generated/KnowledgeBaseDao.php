<?php

/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the KnowledgeDao class instead!
 */

namespace generateur_cv\Model\Dao\Generated;

use Mouf\Database\TDBM\TDBMService;
use Mouf\Database\TDBM\ResultIterator;
use Mouf\Database\TDBM\ArrayIterator;
use generateur_cv\Model\Bean\KnowledgeBean;


/**
 * The KnowledgeBaseDao class will maintain the persistence of KnowledgeBean class into the knowledge table.
 *
 */
class KnowledgeBaseDao
{

    /**
     * @var TDBMService
     */
    protected $tdbmService;

    /**
     * The default sort column.
     *
     * @var string
     */
    private $defaultSort = null;

    /**
     * The default sort direction.
     *
     * @var string
     */
    private $defaultDirection = 'asc';

    /**
     * Sets the TDBM service used by this DAO.
     *
     * @param TDBMService $tdbmService
     */
    public function __construct(TDBMService $tdbmService)
    {
        $this->tdbmService = $tdbmService;
    }

    /**
     * Persist the KnowledgeBean instance.
     *
     * @param KnowledgeBean $obj The bean to save.
     */
    public function save(KnowledgeBean $obj)
    {
        $this->tdbmService->save($obj);
    }

    /**
     * Get all Knowledge records.
     *
     * @return KnowledgeBean[]|ResultIterator|ResultArray
     */
    public function findAll()
    {
        if ($this->defaultSort) {
            $orderBy = 'knowledge.'.$this->defaultSort.' '.$this->defaultDirection;
        } else {
            $orderBy = null;
        }
        return $this->tdbmService->findObjects('knowledge',  null, [], $orderBy);
    }
    
    /**
     * Get KnowledgeBean specified by its ID (its primary key)
     * If the primary key does not exist, an exception is thrown.
     *
     * @param string|int $id
     * @param bool $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
     * @return KnowledgeBean
     * @throws TDBMException
     */
    public function getById(int $id, $lazyLoading = false)
    {
        return $this->tdbmService->findObjectByPk('knowledge', ['id' => $id], [], $lazyLoading);
    }
    
    /**
     * Deletes the KnowledgeBean passed in parameter.
     *
     * @param KnowledgeBean $obj object to delete
     * @param bool $cascade if true, it will delete all object linked to $obj
     */
    public function delete(KnowledgeBean $obj, $cascade = false)
    {
        if ($cascade === true) {
            $this->tdbmService->deleteCascade($obj);
        } else {
            $this->tdbmService->delete($obj);
        }
    }


    /**
     * Get a list of KnowledgeBean specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param array $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return KnowledgeBean[]|ResultIterator|ResultArray
     */
    protected function find($filter = null, array $parameters = [], $orderBy=null, array $additionalTablesFetch = [], $mode = null)
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'knowledge.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjects('knowledge', $filter, $parameters, $orderBy, $additionalTablesFetch, $mode);
    }

    /**
     * Get a list of KnowledgeBean specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "knowledge JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param int $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return KnowledgeBean[]|ResultIterator|ResultArray
     */
    protected function findFromSql($from, $filter = null, array $parameters = [], $orderBy = null, $mode = null)
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'knowledge.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjectsFromSql('knowledge', $from, $filter, $parameters, $orderBy, $mode);
    }

    /**
     * Get a single KnowledgeBean specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @return KnowledgeBean
     */
    protected function findOne($filter = null, array $parameters = [])
    {
        return $this->tdbmService->findObject('knowledge', $filter, $parameters);
    }

    /**
     * Get a single KnowledgeBean specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "knowledge JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param array $parameters The parameters associated with the filter
     * @return KnowledgeBean
     */
    protected function findOneFromSql($from, $filter = null, array $parameters = [])
    {
        return $this->tdbmService->findObjectFromSql('knowledge', $from, $filter, $parameters);
    }

    /**
     * Sets the default column for default sorting.
     *
     * @param string $defaultSort
     */
    public function setDefaultSort($defaultSort)
    {
        $this->defaultSort = $defaultSort;
    }
}