<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\ReMarkableConnector\AppInfo\Application::APP_ID, OCA\ReMarkableConnector\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\ReMarkableConnector\AppInfo\Application::APP_ID, OCA\ReMarkableConnector\AppInfo\Application::APP_ID . '-main');

?>

<div id="remarkableconnector"></div>
