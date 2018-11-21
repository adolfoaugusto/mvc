<?php
/**
 * Created by PhpStorm.
 * User: jonantah
 * Date: 31/08/18
 * Time: 17:35
 */

namespace Rtd\Suporte\Service\Form;



use Helpers\Formulario\FormType;
use Rtd\Suporte\Entity\Financeiro\Bancos;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class BancoType extends FormType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        return $builder
            ->add('niBanco',ChoiceType::class,[
                'label'=>"Instituição",
                'required'=>true,
                'attr'=>[
                    'class'=>'select2-ajax-pessoa',
                    'required'=>'required'
                ],
            ])
            ->add('codigo',NumberType::class,[
               'label'=>'Código da Instituição bancária'
            ])
            ->add('nome',TextType::class,[
                'label'=>'Nome da instituição bancária'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Bancos::class
        ]);
        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
    }

}