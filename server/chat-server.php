<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/chat.php';

use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

	$server = IoServer::factory(
		new WsServer(
        		new Chat()
		)
		, 8000
	);

$server->run();

?>
