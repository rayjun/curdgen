<?php
namespace Rayjun\Curd\Generator;

class BaseGenerator {


    public function get_template($templateName)
     {
        $templateName = str_replace('.', '/', $templateName);

        $path = 'templates/'.$templateName.'.stub';

        if(file_exists($path)) {
            return file_get_contents($path);
        }

        return "";
    }

    public function createFile($path, $templateData, $fileName) 
    {
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        $path = $path.'/'.$fileName;

        if(file_exists($path)) {
            unlink($path);
        }

        file_put_contents($path, $templateData);
    }
}