<?php

namespace Gestor\GestoriaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Gestor\GestoriaBundle\Entity\Subtasca;

class UsuariType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $subtasca = new Subtasca();
        $builder->add('dni', TextType::class)
                ->add('nom', TextType::class)
                ->add('cognoms', TextType::class)
                ->add('subtasca', EntityType::class, array(
                    'class' => Subtasca::class,
                    'choice_label' => function ($subtasca) {
                        return $subtasca->getNom();
                    }))
                ->add('enviar', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestor\GestoriaBundle\Entity\Usuari'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'gestor_gestoriabundle_usuari';
    }

}
