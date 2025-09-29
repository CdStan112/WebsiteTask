<?php

$db = \core\App::get('\core\Db');
$id = $_GET['id'] ?? 0;
$page = $_GET['page'] ?? 1;

$post = $db->query("SELECT id, DATE_FORMAT(`date`, '%d.%m.%Y') as fmt, title, announce, content, image FROM news WHERE id = ? LIMIT 1", [$id])->findOrFail();

require_once VIEWS . '/posts/show.tpl.php';