<?php

namespace Tests\VectorTest;

use App\Vector;
use PHPUnit\Framework\TestCase;

class VectorTest extends TestCase
{
    public function testAddition()
    {
        $v1 = new Vector(1, 2, -8);
    
        $v2 = new Vector(7, -6, 0);

        $this->assertSame("(8, −4, −8)", $v1->add($v2)->__toString());
    }

    public function testSubtraction()
    {
        $v1 = new Vector(1, 2, -8);
    
        $v2 = new Vector(7, -6, 0);

        $this->assertSame("(−6, 8, −8)", $v1->sub($v2)->__toString());
    }

    public function testNumberProduct()
    {
        $v1 = new Vector(1, 2, -8);

        $this->assertSame("(2, 4, -16)", $v1->product(2)->__toString());
    }

    public function testScalarProduct()
    {
        $v1 = new Vector(1, 2, -8);
    
        $v2 = new Vector(7, -6, 0);

        $this->assertEquals(-5, $v1->scalarProduct($v2));
    }

    public function testVectorProduct()
    {
        $v1 = new Vector(1, 2, -8);
    
        $v2 = new Vector(7, -6, 0);

        $this->assertSame("(48, −56, −8)", $v1->vectorProduct($v2)->__toString());
    }
}
