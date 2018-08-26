<?php

require_once "BaseRepository.php";


class ArticleRepository extends BaseRepository
{


    public function __construct(Database $db)
    {
        $this->table = "articole";
        return parent::__construct($db);
    }

}