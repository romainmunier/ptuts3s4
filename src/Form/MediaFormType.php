<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MediaFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $page = $options['attr'][0];
        if ($page == 'index') {
            $builder->add('title', TextType::class)
                ->add('description', TextareaType::class)
                ->add('medias', FileType::class, [
                    'mapped' => false,
                    'required' => false,
                ])
                ->add('submit', SubmitType::class);
        } else if ($page == 'gallery') {
            $builder->add('title', TextType::class)
                ->add('description', TextareaType::class)
                ->add('medias', FileType::class, [
                    'mapped' => false,
                    'required' => false,
                    'multiple' => true,
                ])
                ->add('category', EntityType::class, [
                    'class' => Category::class,
                    'choice_label' => 'name',
                ])
                ->add('submit', SubmitType::class);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}
