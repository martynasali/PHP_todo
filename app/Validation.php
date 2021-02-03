<?php


namespace TaskManager;


class Validation
{
    private static $errors = [];

    public static function validation($data)
    {
        self::validateSubject($data);
        self::validatePriority($data);
        self::validateDate($data);
        return self::$errors;
    }

    private function validateSubject()
    {
        if (empty($_POST['subject']) || !preg_match('/\w{5,255}$/', $_POST['subject'])) {
            self::$errors[] = "Neįvesta užuotis";
        }
    }

    private function validatePriority()
    {
        if ($_POST['priority'] == "Prioritetas") {
            self::$errors[] = "Nepasirinktas prioritetas";
        }
    }

    private function validateDate()
    {
        if ($_POST['dueDate'] < date("Y-m-d")) {
            self::$errors[] = "Blogai pasirinkta arba nepasirinkta data";
        }
    }
}