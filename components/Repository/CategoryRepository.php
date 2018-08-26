<?php

class CategoryRepository extends BaseRepository
{
    public function __construct(Database $db)
    {
        $this->table = "categorii";
        return parent::__construct($db);
    }

}