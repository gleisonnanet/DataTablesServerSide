<?php

namespace Gleisonnanet\DataTablesBundle\DataTables;

class TableOptionsFactory
{
    private $configuration;

    private $defaultLocale;

    public function __construct($configuration, $defaultLocale)
    {
        $this->configuration = $configuration;
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * @return \Gleisonnanet\DataTablesBundle\Table\TableOptions
     */
    public function create()
    {
        $options = new \Gleisonnanet\DataTablesBundle\Table\TableOptions();

        return $options;
    }

    public function getDefaultOptions()
    {
        $default = \Gleisonnanet\DataTablesBundle\Table\TableOptions::getDefaultOptions($this->defaultLocale);
        $default->merge($this->configuration['table_options']);
        return $default;
    }
}
