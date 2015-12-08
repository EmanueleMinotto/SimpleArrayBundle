<?php

namespace EmanueleMinotto\SimpleArrayBundle\Tests\Form\Type;

use EmanueleMinotto\SimpleArrayBundle\Form\Type\SimpleArrayType;
use Symfony\Component\Form\Test\TypeTestCase;

class SimpleArrayTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = [
            'test' => 'test',
            'test2' => 'test2',
        ];

        $type = new SimpleArrayType();
        $form = $this->factory->create(
            method_exists($type, 'getBlockPrefix') ? get_class($type) : $type
        );

        // submit the data to the form directly
        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($formData, $form->getData());
    }
}
