<?php


$db = \core\App::get('\core\Db');


$page = $_GET['page'] ?? 1;
$start = 0;
$per_page = 4;
$offset = ($page - 1) * $per_page;

$fresh_news = $db->query("SELECT image, id, title,announce, DATE_FORMAT(`date`, '%d.%m.%Y') as fmt FROM news ORDER BY date DESC LIMIT 1")->find();

$total = $db->query("SELECT COUNT(*) FROM news")->getColumn();

$posts = $db->query("SELECT id, announce, title, DATE_FORMAT(`date`, '%d.%m.%Y') as fmt FROM news ORDER BY date desc LIMIT $offset,$per_page")->findAll();

$pagination = new \core\Pagination((int) $page, $per_page, $total);


require_once VIEWS . '/posts/index.tpl.php';