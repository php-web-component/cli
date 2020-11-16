<?php namespace PWC;

class CLI extends \GetOpt\Command {
    protected $_config = [];

    public function setConfig($config = [])
    {
        $this->_config = $config;
        return $this;
    }
}
