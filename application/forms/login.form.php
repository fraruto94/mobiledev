<?php

namespace Blimp;
defined('__BLIMP__') or die('Acces interdit');

use \F3il\Field;
use \F3il\Form;

class LoginForm extends Form {
    
    public function __construct($destination, $mode=Form::CREATE_MODE){
        parent::__construct($destination, $mode);
        
        $this->addFormField(new Field('login', 'Login','',true, FILTER_SANITIZE_STRING));
        $this->addFormField(new Field('motdepasse', 'Mot de passe','',true, FILTER_SANITIZE_STRING));
    }
    
    public function render(){
        if(count($this->_messages) > 0):
        ?>
            <div><?php echo $this->_messages[0][1]; ?> </div>
        <?php
        endif;
        
        ?>
            
            <form method="POST" action="<?php echo $this->_destination; ?>">
                <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($this->login);?>" placeholder="Login">
                <input type="password" id="motdepasse" name="motdepasse" value="<?php echo htmlspecialchars($this->motdepasse);?>" placeholder="Mot de passe">
                <button type="submit">Connexion</button>
                <?php                        \F3il\CsrfHelper::csrf(); ?>
            </form>
        <?php
    }   
}

