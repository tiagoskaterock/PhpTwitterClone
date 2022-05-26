<?php 

session_start();

// anula todos campos da sessão
foreach ($_SESSION as $item) {
	unset($item);
}

session_destroy();

header("Location: ..");

die();