<?php

namespace EmanueleMinotto\SimpleArrayBundle\Form;

use Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser as BaseDoctrineOrmTypeGuesser;
use Symfony\Component\Form\Guess\Guess;
use Symfony\Component\Form\Guess\TypeGuess;

class DoctrineOrmTypeGuesser extends BaseDoctrineOrmTypeGuesser
{
    /**
     * Returns a field guess for a property name of a class.
     *
     * @param string $class    The fully qualified class name.
     * @param string $property The name of the property to guess for.
     *
     * @return TypeGuess|null A guess for the field's type and options.
     */
    public function guessType($class, $property)
    {
        if (!$ret = $this->getMetadata($class)) {
            $type = method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix')
                ? 'Symfony\Component\Form\Extension\Core\Type\TextType'
                : 'text';
            return new TypeGuess($type, [], Guess::LOW_CONFIDENCE);
        }

        $metadata = $ret[0];

        if ('simple_array' == $metadata->getTypeOfField($property)) {
            $type = method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix')
                ? 'EmanueleMinotto\SimpleArrayBundle\Form\Type\SimpleArrayType'
                : 'simple_array';
            return new TypeGuess($type, [], Guess::MEDIUM_CONFIDENCE);
        }

        return parent::guessType($class, $property);
    }
}
