<?php
<<<<<<< HEAD
namespace App\Form;
=======

namespace App\Form;

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
use App\Entity\Imagen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
class ImagenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fichero', FileType::class, array(
                'label' => 'Imagen',
                'mapped' => false
            ))
            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-primary float-right'),
                'label' => 'Guardar'
            ));
        ;
    }
<<<<<<< HEAD
=======

>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Imagen::class,
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> dcf9c9a2110984771503bd8ffab06a90048f7c0e
