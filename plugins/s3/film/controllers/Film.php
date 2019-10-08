<?php namespace S3\Film\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Film extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('S3.Film', 'main-menu-item', 'side-menu-item');
    }
}
