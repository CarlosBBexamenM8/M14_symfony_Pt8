<?php

namespace Gestor\GestoriaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Gestor\GestoriaBundle\Entity\Tasca;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SubtascaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tasca = new Tasca();
        $builder->add('nom', TextType::class)
                ->add('tasca', EntityType::class, array(
                    'class' => Tasca::class,
                    'choice_label' => function ($tasca) {
                        return $tasca->getNom();
                    }))
                ->add('enviar', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestor\GestoriaBundle\Entity\Subtasca'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'gestor_gestoriabundle_subtasca';
    }

}
