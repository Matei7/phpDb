<?php
/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/20/2018
 * Time: 11:37 AM
 */

class CommentsRepository extends BaseRepository
{
    public function __construct(Database $db)
    {
        $this->table = "art2comm";
        return parent::__construct($db);
    }


}