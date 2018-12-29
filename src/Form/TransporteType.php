<?php
namespace App\Form;
use App\Entity\Transporte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class TransporteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('titulo')
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Transporte::class,
        ]);
    }
}