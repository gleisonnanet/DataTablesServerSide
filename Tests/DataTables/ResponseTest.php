<?php

namespace gleisonnanet\DataTablesBundle\Tests\DataTables;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $dtResponse = new \gleisonnanet\DataTablesBundle\DataTables\Response();

        $sfResponse = $dtResponse->create();
        $this->assertEquals('application/json', $sfResponse->headers->get('content-type'));

        $json = $sfResponse->getContent();
        $json = json_decode($json, true);

        $this->assertTrue(is_array($json));
    }
}
