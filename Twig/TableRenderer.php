<?php

namespace gleisonnanet\DataTablesBundle\Twig;

use Psr\Container\ContainerInterface;

class TableRenderer
{
    private $container;

    /** @var \gleisonnanet\DataTablesBundle\Table\AbstractDataTable[] */
    private $tables;

    /** @var array[] */
    private $themes;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function setThemes(\gleisonnanet\DataTablesBundle\Table\AbstractDataTable $table, $themes)
    {
        $table->setContainer($this->container);
        if (isset($this->tables[$table->getName()])) {
            throw new \Exception();
        }
        $this->tables[$table->getName()] = $table;
        $this->themes[$table->getName()] = $themes;
    }

    public function hasTable(\gleisonnanet\DataTablesBundle\Table\AbstractDataTable $table)
    {
        return isset($this->tables[$table->getName()]);
    }

    public function getThemes(\gleisonnanet\DataTablesBundle\Table\AbstractDataTable $table)
    {
        if (false === $this->hasTable($table)) {
            return [];
        }

        return $this->themes[$table->getName()];
    }
}
