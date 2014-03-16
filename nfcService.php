<?php

//no close
//ignore_user_abort(true);
set_time_limit(0);

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'DB.php';
require 'raspi/Buzzer.php';
require 'raspi/Diode.php';

//scan card
$buzzer = new Buzzer();
$buzzer->buzzStop();
$diode = new Diode();
$diode->off();

while (true) {
    echo "Wait for card...\n";
    do {
        $uid = getNfcUID();
    } while ($uid == NULL);
    echo "Insert $uid card\n";
    $newCard = new stdClass();
    $newCard->cardid = $uid;
    addCard($newCard);
    $buzzer->buzzStart();
    $diode->on();
    sleep(1);
    $buzzer->buzzStop();
    echo "Remember take card back...\n";
    while ($uid != NULL && getNfcUID() == $uid);
    $diode->off();
}

function getNfcUID() {
    sleep(1);
    try {
        $match = [];
        $lsnfc = shell_exec('sudo lsnfc');
        if (preg_match('/UID\=[a-zA-Z0-9]*/', $lsnfc, $match)) {
            return substr($match[0], 4);
        }
    } catch (Exception $e) {
        echo 'error:' . $e->getMessage();
    }
    return NULL;
}
