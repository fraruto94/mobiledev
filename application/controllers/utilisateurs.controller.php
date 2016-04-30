<?php
    namespace Blimp;
    defined('__BLIMP__') or die('Acces interdit');
    class UtilisateursController extends \F3il\Controller
    {
        public function __construct() {
            $this->setDefaultActionName('editer');
        }
        
        public function listerAction() {
            $page = \F3il\Page::getInstance();
            $page->setTemplate('application');
            $page->setView('vue1');
            //$page->nom = 'Vive moi';
            $um = new UtilisateursModel();
            
            $page->utilisateurs = $um->lister();
        }
        
        public function editerAction() {
            $page = \F3il\Page::getInstance();
            $page->setTemplate('application');
            $page->setView('utilisateursForm');
            
            $id = filter_var(\F3il\Request::get('id'), FILTER_VALIDATE_INT);
            
            if(!$id){
                \F3il\HttpHelper::redirect("?controller=utilisateurs&action=lister");
            }
            
            $um = new UtilisateursModel();            
            $data = $um->lire($id);
            
            if(!$data){
                \F3il\HttpHelper::redirect("?controller=utilisateurs&action=lister");
            }
            
            $form = new UtilisateursForm('?controller=utilisateurs&action=editer&id='.$id,\F3il\Form::EDIT_MODE);
            $page->form = $form;
            
            $form->loadData($data);
            
            
            if(!\F3il\Request::isPost()){ return;}
            if(!\F3il\CsrfHelper::checkToken()) {throw new \F3il\Error("Erreur formulaire");}
            $form->loadData($_POST);   
            
            if(!$form->validate()){ return;}
            
            $um->actualiser($id, $form->getData());
            
            \F3il\HttpHelper::redirect("?controller=utilisateurs&action=lister");
        }
        
        public function creerAction() {
            $page = \F3il\Page::getInstance();
            $page->setTemplate('application');
            $page->setView('utilisateursForm');            
            
            $form = new UtilisateursForm('?controller=utilisateurs&action=creer',\F3il\Form::CREATE_MODE);
            $page->form = $form;
            
            if(!\F3il\Request::isPost()){ return;}
            if(!\F3il\CsrfHelper::checkToken()) {throw new \F3il\Error("Erreur formulaire");}
            $form->loadData($_POST);           
            
            if(!$form->validate()){ return;}
            $utilModel = new UtilisateursModel();
            $utilModel->creer($form->getData());
            
            \F3il\HttpHelper::redirect("?controller=utilisateurs&action=lister");
        }
        
        public function test() {
            echo __METHOD__;
        }
    }

