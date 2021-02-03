<?php


namespace TaskManager;


 class Validation
{
    static public $validation = [];
    static public $data;


    public static function validateName($data)
    {
        self::$data;

        if (empty($data['subject']) || !preg_match('/\w{5,255}$/', $data['subject'])) {
            self::$validation[] = 'Nepasirinkote skrydžio numerio';
        }

    }

    static public function validationErr($validation){
       foreach ($validation as $error){
    echo "<div class='col alert alert-danger' role='alert'>";
    echo "$error";
    echo "</div>";}
    }
}