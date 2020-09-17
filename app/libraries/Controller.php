<?php
/*
* Base Controller
* Loads the models and views
*/

class Controller
{
    // Check if array is associative-array
    private static function is_assoc($arr)
    {
        return array_keys($arr) !== range(0, count($arr) - 1);
    }

    // Load model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instantiate model
        // ex: return new Posts()
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        if (!self::is_assoc($data)) {
            die('Data passed should be associative-array');
        }

        foreach ($data as $variable_name => $variable_value) {
            $$variable_name = $variable_value;
        }
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // View does not exists
            die('View does not exist');
        }
    }
}
