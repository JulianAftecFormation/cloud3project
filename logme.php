<?php
function logg($source)
{
    $logPath = "c:\\temp\\uploads\\" . date( "Y-m-d").'-journal.log';
    file_put_contents($logPath , date( "H:i:s")." Oh une personne est venue dire bonjour :D \r\n", FILE_APPEND);
}
