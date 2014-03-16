<?php

ini_set("enable_dl", "On");
require_once 'wiringpi.php';

/**
 * Class to manage local buzzer
 *
 * @author spozoga
 */
class Buzzer {

    const BUZZER_PIN = 14;
    
    function buzzStart() {
        wiringpi::pinMode(self::BUZZER_PIN, 1);
        wiringpi::digitalWrite(self::BUZZER_PIN, 1);
    }
    
    function buzzStop() {
        wiringpi::pinMode(self::BUZZER_PIN, 1);
        wiringpi::digitalWrite(self::BUZZER_PIN, 0);
    }

}
