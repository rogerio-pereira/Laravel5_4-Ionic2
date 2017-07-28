<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ProductForm extends Form
{
    public function buildForm()
    {
        $this
            ->add(
                'name', 
                'text', 
                [
                    'label' => 'Nome', 
                    'wrapper' => [
                        'class' => 'form-group col-md-6'
                    ]
                ]
            )
            ->add(
                'value', 
                'text', 
                [
                    'label' => 'Valor', 
                    'wrapper' => [
                        'class' => 'form-group col-md-6'
                    ]
                ]
            )
            ->add(
                'description', 
                'textarea', 
                [
                    'label' => 'Descrição', 
                    'wrapper' => [
                        'class' => 'form-group col-md-12'
                    ]
                ]
            )
            ->add('submit', 
                'submit', 
                [
                    'label' => '<span class="glyphicon glyphicon-floppy-disk" aria=hidden="true"></span> Salvar',
                    'wrapper' => [
                        'class' => 'form-group col-md-4 col-md-offset-4 text-center'
                    ],
                    'attr' => [
                        'class' => 'btn btn-primary'
                    ]
                ]
            );
    }
}
