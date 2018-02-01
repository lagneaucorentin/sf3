<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 31/01/18
 * Time: 17:10
 */

namespace AppBundle\Forms\Types;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class TicketPropositionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('auctionText', TextareaType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Votre message'
            ])
            ->add('auctionPrice', NumberType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0
                ],
                'label' => 'Votre prix'
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-info'],
                'label' => 'Envoyer'
            ])
        ;
    }
}