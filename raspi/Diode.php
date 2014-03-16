<?php

ini_set("enable_dl", "On");
require_once 'wiringpi.php';

/**
 * Class to manage local diode
 *
 * @author spozoga
 */
class Diode {
    
    //GPIO7 (PHYS pin 26)
    const DIODE_PIN =7;
    
    function on() {
        wiringpi::pinMode(self::DIODE_PIN, 1);
        return wiringpi::digitalWrite(self::DIODE_PIN, 1);
    }

    function off() {
        wiringpi::pinMode(self::DIODE_PIN, 1);
        return wiringpi::digitalWrite(self::DIODE_PIN, 0);
    }

}
