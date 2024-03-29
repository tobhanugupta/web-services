<?php

namespace Affiliate\AffiliateManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class MembersinfoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
               /* ->add('Userinfo', 'entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Userinfo',
                    'property' => 'email',
                    'required' => true,
                    'empty_value' => 'Choose an option',
                ))*/
                
                 ->add('Userinfo', 'entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Userinfo',
                    'property' => 'email',
                    'required' => false,
                    'empty_value' => 'Choose an option',
                    'query_builder' => function(EntityRepository $er) {
                return $er
                        ->createQueryBuilder('U')
                        ->select('U')
                        ->where("U.userType = 'affiliate'")                        
                      ;
                  },
                ))
            ->add('fName','text',array('required'=>true))
            ->add('lName','text',array('required'=>true))
            ->add('email','email',array('required'=>true))
            ->add('state','text',array('required'=>true))
            ->add('country','text',array('required'=>true))
            ->add('zipCode','text',array('required'=>true))
            ->add('mobile','text',array('required'=>true))
            ->add('Userinfo','entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Userinfo',
                    'property' => 'email',
                    'required' => true,
                    'empty_value' => 'Choose an option',
                ))
           
            ->add('deviceToken','text',array('required'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Affiliate\AffiliateManagementBundle\Entity\Membersinfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'affiliate_affiliatemanagementbundle_membersinfo';
    }
}
