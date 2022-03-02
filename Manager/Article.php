<?php

namespace App\Manager;

use App\Entity\Article as ArticleEntity;

class Article
{

    public function __construct() {

    }

    public function save(ArticleEntity $article): string {
        return 'Saved !';
    }
}