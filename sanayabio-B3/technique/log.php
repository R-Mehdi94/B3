<?php

function sbauthentification($log){
    $file='/var/log/sbateliers/access.log';
    file_put_contents($file,$log, FILE_APPEND | LOCK_EX);
}
?>

<?php

function sbinscription($log){
    $file='/var/log/sbateliers/err_input.log';
    file_put_contents($file,$log, FILE_APPEND | LOCK_EX);
}
?>