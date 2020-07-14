<?php

require_once 'App.php';
require_once 'ThirdPartyLib.php';

use DanCharousek\Library\App as ThirdPartyApp;

(new App)->run();
(new ThirdPartyApp())->run();