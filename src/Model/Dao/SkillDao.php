<?php

/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

namespace generateur_cv\Model\Dao;

use generateur_cv\Model\Dao\Generated\SkillBaseDao;

/**
 * The SkillDao class will maintain the persistence of SkillBean class into the skill table.
 */
class SkillDao extends SkillBaseDao
{
    /**
     * return skill data for last inserted user
     * @param int $id
     * @return array
     */
    public function getSkillUser($id){
        $link = mysqli_connect("localhost","root","","cv") or die($link);
        $sql = mysqli_query($link,'SELECT * FROM skill WHERE user = '.$id);
        $return = mysqli_fetch_all($sql,MYSQLI_ASSOC);
        return $return;



        $link = mysqli_connect("localhost","root","","cv") or die($link);
        $sql = mysqli_query($link,'SELECT MAX(id) as max_id FROM user');
        $return = mysqli_fetch_all($sql,MYSQLI_ASSOC);
        return $return;
    }
}
