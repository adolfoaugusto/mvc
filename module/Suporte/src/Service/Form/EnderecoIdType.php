<?php
/**
 * Created by PhpStorm.
 * User: jonantah
 * Date: 31/08/18
 * Time: 17:35
 */

namespace Rtd\Suporte\Service\Form;


use Helpers\Formulario\FormType;
use Rtd\Suporte\Entity\Central\Enderecos;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class EnderecoIdType extends FormType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        return $builder
            ->add('idEndereco',HiddenType::class,[
                'label'=>false,
            ]);
    }


    public function getBlockPrefix()
    {
        return false;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
            'data_class'=>Enderecos::class
        ]);

        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
    }


}