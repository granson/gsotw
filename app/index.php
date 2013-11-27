<?php
include_once 'inc/Epi.php';

Epi::setSetting('exceptions', true);
Epi::setPath('base', 'inc');
Epi::init('route');
Epi::init('api');
// Epi::init('base','cache','session');
// Epi::init('base','cache-apc','session-apc');
// Epi::init('base','cache-memcached','session-apc');

include_once 'app.php';
include_once 'api.php';

getRoute()->run();