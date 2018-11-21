<?php
/**
 * Created by PhpStorm.
 * User: jonantah
 * Date: 31/08/18
 * Time: 17:35
 */

namespace Rtd\Suporte\Service\Form;


use Helpers\FormType\Choices\Estados;
use Helpers\Formulario\FormType;
use Rtd\Suporte\Entity\Central\PessoaJuridica;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UpdatePessoaJuridicaType extends FormType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        return $builder
            ->add('ni',PessoaNiType::class,[
                'label'=>false,
                ]
            )
            ->add('nacionalidadeCapital',ChoiceType::class,(new \Helpers\FormType\Choices\Nacionalidade())->make())
            ->add('pais',ChoiceType::class,(new \Helpers\FormType\Choices\Pais())->make())
            ->add('autorizacaoFuncionamento',TextType::class,[
                'required'=>false
            ])
            ->add('participacaoCapital',TextType::class,[
                'attr'=>[
                    'class'=>'money'
                ]
            ])
            ->add('dataAbertura',DateType::class,[
                'widget'=>'single_text',
                'format'=>'yyyy-MM-dd',
                'attr'=>[
                    'class'=>'data'
                ]
            ])
            ->add('ufSede',ChoiceType::class,(new Estados())->make());
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
           'data_class'=>PessoaJuridica::class
        ]);
        parent::configureOptions($resolver); // TODO: Change the autogenerated stub
    }

}