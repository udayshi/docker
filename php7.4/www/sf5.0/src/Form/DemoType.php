<?php

namespace App\Form;

use App\Entity\Demo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class DemoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,['constraints'=>[new NotBlank(),new Length(['min' => 3])]])
            ->add('reference')
            ->add(

            'is_default', CheckboxType::class, [
                          'label'    => 'Checkbox',
                         'mapped'=>false
                    ])
            ->add('item_dropdown',ChoiceType::class, [
                'label'    => 'Dropdown',
                'mapped'=>false,

                'choices'  => [
                    'Select One'=>'',
                    'Maybe' => 'M',
                    'Yes' => 'Y',
                    'No' => 'N',
                ],
                    'data'=>'N' /*Default selected*/
            ]
            )
            ->add('item_checkbox',ChoiceType::class, [
                    'label'    => 'Checkbox',
                    'mapped'=>false,
                    'expanded'  => true,
                    'multiple'  => true,
                    'choices'  => [
                        'Maybe' => 'M',
                        'Yes' => 'Y',
                        'No' => 'N',
                    ],
                    'data'=>['Y','M']/*Default Checked*/
                ]
            )
        ;
    }




    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Demo::class,
        ]);
    }
}
