<?php

namespace App\Form;

use App\Entity\Actualite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ActualiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('imageFile', FileType::class, ["label"=>"Image", "required"=>$options["imageRequired"]])
        ->add('isActive', CheckboxType::class, ["label"=>"Page visible ?", "row_attr"=>["class"=> "form-switch"], "required"=>false])
        ->add('tag', ChoiceType::class, ["label"=>"Tag", "choices"=>[
            "carousel1"=>"carousel1",
            "carousel2"=>"carousel2",
            ], "required"=>true])
        ->remove('updatedAt')
        ->remove('title')
        ->remove('imageName')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actualite::class,
            'imageRequired'=> true,
        ]);
    }
}
