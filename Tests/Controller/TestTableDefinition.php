<?php

namespace gleisonnanet\DataTablesBundle\Tests\Controller;

use gleisonnanet\DataTablesBundle\Table\AbstractTableDefinition;

class TestTableDefinition extends AbstractTableDefinition
{
    public function __construct()
    {
        parent::__construct('gleisonnanet\DataTablesBundle\Tests\Controller\TestTableEntity', 'test');
    }
}
