<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CalculationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstNumber', NumberType::class,['input'=>'string','scale'=>2])
            ->add('operand', ChoiceType::class, array(
                'choices' => array(
                    '+' => 'add',
                    '-' => 'subtract',
                    '*' => 'multiply',
                    '/' => 'divide'
                )
            ))
            ->add('secondNumber', NumberType::class,['input'=>'string','scale'=>2])
            ->add('Calculate', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
