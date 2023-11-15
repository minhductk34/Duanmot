
<?php

class BaseController
{
    const VIEW_FOLDER_NAME = 'views';
    const MODEL_FOLDER_NAME = 'Models';
    protected function view($viewPath, array $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
       

        require(self::VIEW_FOLDER_NAME . '/' . str_replace(".", "/", $viewPath) . '.php');
    }
    protected function loadModel($modelsPath, array $data = [])
    {

        // die($viewPath);
        require_once(self::MODEL_FOLDER_NAME . '/' . $modelsPath . '.php');
    }
}

?>