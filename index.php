<?php

require __DIR__ . '/model/article.php';

$articles = get_allArticles();

include __DIR__ . '/view/index.php';