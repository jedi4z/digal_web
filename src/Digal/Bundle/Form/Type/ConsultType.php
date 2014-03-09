<?php

namespace Digal\Bundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ConsultType
 *
 * @author jesus
 */
class ConsultType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', 'text', array('label' => 'false'))
                ->add('email', 'email', array('label' => 'false'))
                ->add('description', 'textarea')
                ->add('save', 'submit')
                ->getForm();
    }

    public function getName() {
        return 'consult';
    }

}

?>
