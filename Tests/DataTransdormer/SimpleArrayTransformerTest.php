<?php

namespace EmanueleMinotto\Tests\SimpleArrayBundle\Form\DataTransformer;

use EmanueleMinotto\SimpleArrayBundle\Form\DataTransformer\SimpleArrayTransformer;

class SimpleArrayTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransform()
    {
        $transformer = new SimpleArrayTransformer();
        $transformation = $transformer->transform(['ciao', 'come', 'va']);
        $this->assertSame('ciao, come, va', $transformation);
    }

    public function testTransformNull()
    {
        $transformer = new SimpleArrayTransformer();
        $transformation = $transformer->transform(null);
        $this->assertSame('', $transformation);
    }
}
