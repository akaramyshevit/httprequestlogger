<?php

function logHttpIncomingRequestLog($debug = false) {
    $httpIncomingRequestLogfile = __DIR__. '/http_incoming_request_log_'. date('Y_m_d'). '.log';
    $currentDateTime = date('Y-m-d H:i:s');
    $remoteIpAddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $httpIncomingrequestHeaders = print_r(getallheaders(), true);
    $logMessageContents = "[ {$currentDateTime} ] Remote IP Address: {$remoteIpAddress} | Remote User Agent: {$userAgent} | Remote Request Http Headers: {$httpIncomingrequestHeaders}" . PHP_EOL;

    $logResult = file_put_contents($httpIncomingRequestLogfile, $logMessageContents, FILE_APPEND | LOCK_EX );

    if ( $debug ) {
    echo '<pre>';
    $debugInitalMessage = "Writing Http Incoming Request to file: {$httpIncomingRequestLogfile}". PHP_EOL;
    printf($debugInitalMessage);
    var_dump($logMessageContents);
    printf("Log Writing Result: ");
    var_dump($logResult);
    echo '</pre>';
    }

    if ( $logResult === false ) {
        throw new Exception('Failed Writing Http Incoming Request Log!');
    }
}