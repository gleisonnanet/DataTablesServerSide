<?php

namespace gleisonnanet\DataTablesBundle\Tests\DataTables;

use gleisonnanet\DataTablesBundle\Table\AbstractTableDefinition;
use gleisonnanet\DataTablesBundle\Table\Column\CallbackColumn;
use gleisonnanet\DataTablesBundle\Table\Column\Column;
use gleisonnanet\DataTablesBundle\Table\Column\EntityColumn;
use gleisonnanet\DataTablesBundle\Table\Column\EntitiesColumn;
use gleisonnanet\DataTablesBundle\Table\Column\EntitiesCountColumn;
use gleisonnanet\DataTablesBundle\Table\Column\UnboundColumn;

class TestTable extends AbstractTableDefinition
{
    public function __construct()
    {
        parent::__construct('gleisonnanet\DataTablesBundle\Tests\DataTables\Entity\TestUser', 'user');
    }

    protected function build()
    {
        $this
            ->addColumn(new Column('id', 'id'))
            ->addColumn(new Column('name', 'name'))
            ->addColumn(new CallbackColumn('status', 'status', function($data) {
                if (123 === $data) {
                    return 'ABC';
                }
                return $data;
            }))
            ->addColumn(new EntitiesColumn('groups', 'groups', 'id'))
            ->addColumn(new UnboundColumn('name_unbound', function(\gleisonnanet\DataTablesBundle\Tests\DataTables\Entity\TestUser $data) {
                return '*' . $data->getName() . '*';
            }))
        ;
    }
}
