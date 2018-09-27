<?php
declare(strict_types=1);

use Acme\Name;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    public function testGetName(): void
    {
        $name = new Name('michel');
        $this->assertEquals('michel', $name->getName());
    }

    public function testGetNameProphecy(): void
    {
        $prophet = new Prophecy\Prophet;
        $prophecy = $prophet->prophesize();
        $prophecy->willExtend('Acme\Name');
        $prophecy->getName()->willReturn('michel');
        $prophecy->getLastName()->willReturn('michel');                
        $this->assertEquals('michel', $prophecy->reveal()->getName());
    }

    public function testGetNamePhpUnitProphecy(): void
    {
        $prophecy = $this->prophesize(Name::class);
        $prophecy->getName()->willReturn('michel');
        $this->assertEquals('michel', $prophecy->reveal()->getName());
    }
}
