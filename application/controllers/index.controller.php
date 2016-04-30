<?php

namespace Blimp;
defined('__BLIMP__') or die('Acces interdit');

class IndexController extends \F3il\Controller{
    
    public function __construct() {
        $this->setDefaultActionName('index');
    }
    
    public function indexAction(){
        $page = \F3il\Page::getInstance();
        $page->setTemplate('index');
        $page->setView('index');
        
        $form = new LoginForm('#',\F3il\Form::CREATE_MODE);
        $page->form = $form;
            
        if(!\F3il\Request::isPost()){ return;}
        if(!\F3il\CsrfHelper::checkToken()) {throw new \F3il\Error("Erreur formulaire");}
        $form->loadData($_POST); 
        
        if(!$form->validate()){ return;}
    }
}