<?php

namespace EmanueleMinotto\SimpleArrayBundle\Tests\Form\DataTransformer;

use EmanueleMinotto\SimpleArrayBundle\Form\DataTransformer\SimpleArrayTransformer;
use PHPUnit_Framework_TestCase;

class SimpleArrayTransformerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var SimpleArrayTransformer
     */
    protected $object;

    public function setUp()
    {
        $this->object = new SimpleArrayTransformer();
    }

    public function testTransform()
    {
        $value = range('a', 'z');
        shuffle($value);

        $transformation = $this->object->transform($value);
        $this->assertSame(implode(', ', $value), $transformation);
    }

    public function testTransformNull()
    {
        $transformation = $this->object->transform(null);
        $this->assertSame('', $transformation);
    }
}
