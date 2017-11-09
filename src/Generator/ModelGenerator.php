<?php

namespace Rayjun\Curd\Generator;

class ModelGenerator extends BaseGenerator {

    public function generate() 
    {
       $templateData = $this->get_template('model.model'); 

       $templateData = $this->fillTemplate($templateData);
    
       $this->createFile('App\Models', $templateData, 'User.php');

    }

    public function fillTemplate($templateData) {
        $templateData = str_replace('$NAMESPACE_MODEL$','App\Models', $templateData);
        $templateData = str_replace('$NAMESPACE_MODEL_EXTEND$', "Illuminate\Database\Eloquent\Model", $templateData);
        $templateData = str_replace('$MODEL_NAME$', 'User', $templateData);
        $templateData = str_replace('$TABLE_NAME$', 'users', $templateData);

        return $templateData;
    }
}