<?php
/**
 * Created by PhpStorm.
 * User: jonantah
 * Date: 31/08/18
 * Time: 17:35
 */

namespace Rtd\Suporte\Service\Form;




use DI\Annotation\Inject;
use Doctrine\ORM\EntityManager;
use Helpers\Formulario\FormType;
use Rtd\Financeiro\Entity\Central\Estados;
use Rtd\Suporte\Entity\Central\Enderecos;
use Sistema\Container\Container;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;


class EnderecoType extends FormType
{



    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        return $builder
            ->add('ni',ChoiceType::class,[
                    'label'=>'Pessoa',
                    'attr'=>[
                        'class'=>'select2-ajax-pessoa'
                    ]
                ]
            )
            ->add('enderecoAtivo',CheckboxType::class,[
                    'label'=>'Ativar endereço',
                    'required'=>false
                ]
            )
            ->add('tipo',TextType::class,[
                'label'=>'Tipo Logradouro',
                'attr'=>[
                    'placeholder'=>'Ex: rua, avenida,acampamento,avenida',
                    'maxlength'=>100
                ]
            ])
            ->add('nome',TextType::class,[
                'label'=>'Logradouro',
                'attr'=>[
                    'maxlength'=>100,
                ]
            ])
            ->add('numero',TextType::class,[
                'label'=>'Número',
                'attr'=>[
                    'maxlength'=>10,
                ]
            ])
           // ->add('pais',ChoiceType::class,(new Pais())->make())
            ->add('bairro',TextType::class,[
               'attr'=>[
                   'maxlength'=>100,
               ]
           ])
            ->add('idEstado',EstadoType::class,[
                'label'=>false
            ])
            ->add('idCidade',CidadeType::class,[
                'label'=>false
            ])
            ->add('cep',TextType::class,[
                'attr'=>[
                    'class'=>'cep',
                    'maxlength'=>10
                ]
            ]);
           /** ->add('AdicionarComplemento',ButtonType::class,[
                'label'=>'Adicionar Complemento',
                'attr'=>[
                    'class'=>'btn-warning btn-block'
                ]

            ])
            ->add('complemento',CollectionType::class,[
                'entry_type'=>ComplementoType::class,
                'label'=>false,
                'entry_options' => array('label' => false),
                'allow_add'=>true,

            ]);**/
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Enderecos::class
        ]);

        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
    }

}