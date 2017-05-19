<?php

namespace Runn\tests\Core\ConfigAwareTrait;

use Runn\Core\Config;
use Runn\Core\ConfigAwareInterface;
use Runn\Core\ConfigAwareTrait;

class ConfigAwareTraitTest extends \PHPUnit_Framework_TestCase
{

    public function testTrait()
    {
        $obj = new class implements ConfigAwareInterface{ use ConfigAwareTrait; };
        // @todo: uncomment in PHP 7.1
        //$this->assertNull($obj->getConfig());

        $config = new Config(['foo' => 'bar']);

        $obj->setConfig($config);
        $this->assertSame($config, $obj->getConfig());
    }

}