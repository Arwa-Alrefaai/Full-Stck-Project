<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\TextType;
=======
>>>>>>> dc6b2ed6a7b70594db6375eba9fdf4f82355459b
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('first_name', TextType::class, ["attr" => ["placeholder" => "First name", "class" => "form-control m-1"]])
            ->add('last_name', TextType::class, ["attr" => ["placeholder" => "Last name", "class" => "form-control m-1"]])
            ->add('email', TextType::class, ["attr" => ["placeholder" => "Email", "class" => "form-control m-1"]])
            ->add('address', TextType::class, ["attr" => ["placeholder" => "Address", "class" => "form-control m-1"]])
            ->add('phone', TextType::class, ["attr" => ["placeholder" => "Phone", "class" => "form-control m-1"]])
            ->add('agreeTerms', CheckboxType::class, [
                "attr" => ["class" => "form-check-input m-1", "type" => "checkbox", "value" => "", "id" => "flexCheckDefault"],
=======
            ->add('first_name')
            ->add('last_name')
            ->add('email')
            ->add('address')
            ->add('phone')
            ->add('agreeTerms', CheckboxType::class, [
>>>>>>> dc6b2ed6a7b70594db6375eba9fdf4f82355459b
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
<<<<<<< HEAD
                'attr' => ['autocomplete' => 'new-password', "placeholder" => "Password", "class" => "form-control m-1"],
=======
                'attr' => ['autocomplete' => 'new-password'],
>>>>>>> dc6b2ed6a7b70594db6375eba9fdf4f82355459b
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
<<<<<<< HEAD
            ]);
=======
            ])
        ;
>>>>>>> dc6b2ed6a7b70594db6375eba9fdf4f82355459b
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
