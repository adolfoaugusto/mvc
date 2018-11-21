<?php
/**
 * Created by PhpStorm.
 * User: jonantah
 * Date: 31/08/18
 * Time: 17:35
 */

namespace Rtd\Suporte\Service\Form;



use Helpers\FormType\Choices\Cidades;
use Helpers\FormType\Choices\Estados;
use Helpers\Formulario\FormType;
use Rtd\Suporte\Entity\Central\Endereco;
use Rtd\Suporte\Entity\Central\Enderecos;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UpdateEnderecoType extends FormType
{



    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        return $builder
            ->add('idEndereco',HiddenType::class)
            ->add('ni',PessoaNiType::class,[
                'label'=>false,
                'required'=>false
            ])
            ->add('enderecoAtivo',CheckboxType::class,[
                    'label'=>'Ativar endereço',
                    'required'=>false
                ]
            )
            ->add('tipo',TextType::class,[
                'label'=>'Tipo Logradouro',
                'attr'=>[
                    'placeholder'=>'Ex: rua, avenida,acampamento,avenida'
                ]
            ])
            ->add('nome',TextType::class,[
                'label'=>'Logradouro'
            ])
            ->add('numero',TextType::class,[
                'label'=>'Número'
            ])
           // ->add('pais',ChoiceType::class,(new Pais())->make())
            ->add('bairro',TextType::class)
            ->add('idEstado',EstadoType::class,[
                'label'=>false
            ])
            ->add('idCidade',CidadeType::class,[
                'label'=>false,
                'data'=> $builder->getForm()->getData()->getIdCidade(),
            ])
            ->add('cep',TextType::class,[
                'attr'=>[
                    'class'=>'cep'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
            'data_class'=>Enderecos::class,
            ''
        ]);

        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
    }

}