<?php

namespace Gleisonnanet\DataTablesBundle\Tests\DataTables;

use Gleisonnanet\DataTablesBundle\Table\AbstractTableDefinition;
use Gleisonnanet\DataTablesBundle\Table\Column\CallbackColumn;
use Gleisonnanet\DataTablesBundle\Table\Column\Column;
use Gleisonnanet\DataTablesBundle\Table\Column\EntityColumn;
use Gleisonnanet\DataTablesBundle\Table\Column\EntitiesColumn;
use Gleisonnanet\DataTablesBundle\Table\Column\EntitiesCountColumn;
use Gleisonnanet\DataTablesBundle\Table\Column\UnboundColumn;

class TestTable extends AbstractTableDefinition
{
    public function __construct()
    {
        parent::__construct('Gleisonnanet\DataTablesBundle\Tests\DataTables\Entity\TestUser', 'user');
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
            ->addColumn(new UnboundColumn('name_unbound', function(\Gleisonnanet\DataTablesBundle\Tests\DataTables\Entity\TestUser $data) {
                return '*' . $data->getName() . '*';
            }))
        ;
    }
}
