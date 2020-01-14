<?php

namespace gleisonnanet\DataTablesBundle\DataTables;

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
     * @return \gleisonnanet\DataTablesBundle\Table\TableOptions
     */
    public function create()
    {
        $options = new \gleisonnanet\DataTablesBundle\Table\TableOptions();

        return $options;
    }

    public function getDefaultOptions()
    {
        $default = \gleisonnanet\DataTablesBundle\Table\TableOptions::getDefaultOptions($this->defaultLocale);
        $default->merge($this->configuration['table_options']);
        return $default;
    }
}
