<?php

namespace Gleisonnanet\DataTablesBundle\Tests\Controller;

use Gleisonnanet\DataTablesBundle\Table\AbstractTableDefinition;

class TestTableDefinition extends AbstractTableDefinition
{
    public function __construct()
    {
        parent::__construct('Gleisonnanet\DataTablesBundle\Tests\Controller\TestTableEntity', 'test');
    }
}
