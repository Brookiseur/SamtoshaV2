<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, ["label"=>"Email","attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('name', TextType::class, ["label"=>"Nom", "attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('firstname', TextType::class, ["label"=>"Prénom","attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('phoneNumber', TextType::class, ["label"=>"Numéro de téléphone", "required"=> false, "attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('address', TextType::class, ["label"=>"Adresse", "required"=> false, "attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('address2', TextType::class, ["label"=>"Complément d'adresse", "required"=> false, "attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('city', TextType::class, ["label"=>"Ville", "required"=> false,"attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('zipcode', TextType::class, ["label"=>"Code postal", "required"=> false,"attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('country', CountryType::class, ["label"=>"Pays", "required"=> false,"attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"]])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Si tu n\'ecris pas deux fois la même chose ca peux pas marcher !',
                // 'options' => ['attr' => ['class' => 'password-field']],
                'required' => false,
                'first_options'  => ['label' => 'Mot de passe',"attr"=>["class"=>"inputfield"], "label_attr"=>["class"=>"labelform"],  "help_attr"=>["class"=>"helpform"], 'help'=>"Votre mot de passe doit avoir : - entre 8 et 20 caractères - une lettre majuscule et une minuscule - un chiffre - un caractère spéciale"],
                'second_options' => ['label' => 'Confirmez le mot de passe', "label_attr"=>["class"=>"labelform"], "attr"=>["class"=>"inputfield"],],
                //'mapped' => false
            ])
            ->add('save', SubmitType::class, ["label"=>"Sauvegarder", "attr"=> ["class" => "btn"]])
            ->remove('isVerified')
            ->remove('roles')
            ->remove('password')
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
