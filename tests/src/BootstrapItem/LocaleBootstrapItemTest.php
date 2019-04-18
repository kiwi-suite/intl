<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Test\Intl\BootstrapItem;

use Ixocreate\Application\ConfiguratorInterface;
use Ixocreate\Package\Intl\BootstrapItem\LocaleBootstrapItem;
use PHPUnit\Framework\TestCase;

class LocaleBootstrapItemTest extends TestCase
{
    public function setUp()
    {
        $this->local = new LocaleBootstrapItem();
    }

    /**
     * @covers \Ixocreate\Package\Intl\BootstrapItem\LocaleBootstrapItem
     */
    public function testLocaleBootstrapItem()
    {
        $this->assertSame($this->local->getVariableName(), 'locale');
        $this->assertSame($this->local->getFileName(), 'locale.php');
        $this->assertInstanceOf(ConfiguratorInterface::class, $this->local->getConfigurator());
    }
}