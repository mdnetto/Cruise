<?php

require_once 'CruiseManager.php';

class CruiseManagerTest extends PHPUnit_Framework_TestCase {

    public function testCreateCruise() {
        $cm = new CruiseManager();
        $port = new Port("Barbados");
        $result = $cm->createCruise("CARIB", [$port]);
        $this->assertEquals(get_class($result), 'Cruise');
        $this->assertEquals($result->cruiseName, 'CARIB');
    }
}
