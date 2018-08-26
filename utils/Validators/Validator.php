<?php

/**
 * Created by PhpStorm.
 * User: PC-1076
 * Date: 8/20/2018
 * Time: 1:24 PM
 */
class Validator
{
    private $rules;

    /**
     * Validator constructor.
     * @param $rules
     */
    public function __construct($rules)
    {
        $this->rules = $rules;
    }


    public function validate($array)
    {
        foreach ($array as $field => $argument) {
            $currentRules = explode(",", $this->rules[$field]);
            foreach ($currentRules as $rule) {
                $rule = trim($rule);
                if (strpos($rule, "min") !== false) {
                    $complexRule = explode("-", $rule);
                    $rule = $complexRule[0];
                    $size = (int)$complexRule[1];
                } elseif (strpos($rule, "max") !== false) {
                    $complexRule = explode("-", $rule);
                    $rule = $complexRule[0];
                    $size = (int)$complexRule[1];
                } elseif (strpos($rule, "size") !== false) {
                    $complexRule = explode("-", $rule);
                    $rule = $complexRule[0];
                    $size = (int)$complexRule[1];
                }
                switch ($rule) {
                    case "required":
                        if (empty($argument)) {
                            return "Please enter " . $field;
                        }
                        break;
                    case "password":
                        $r1 = '/[A-Z]/';  //Uppercase
                        $r2 = '/[a-z]/';  //lowercase
                        $r3 = '/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
                        $r4 = '/[0-9]/';  //numbers
                        if (empty($argument)) {
                            return "Please enter password";
                        } elseif (!preg_match_all($r1, $argument)) {
                            return "Password must contain uppercase";
                        } elseif (!preg_match_all($r2, $argument)) {
                            return "Password must contain lowercase";
                        } elseif (!preg_match_all($r3, $argument)) {
                            return "Password must contain special cahrs";
                        } elseif (!preg_match_all($r4, $argument)) {
                            return "Password must contain numbers";
                        } elseif (strlen($argument) < 8) {
                            return "Password must contains at least 8 chars";
                        }
                        break;
                    case "email":
                        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
                        if (empty($argument)) {
                            return "Please enter email";
                        } elseif (!preg_match($pattern, $argument)) {
                            return "Invalid email. Check it again";
                        }
                        break;
                    case "min":
                        if (strlen($argument) < $size) {
                            return $field . " needs to be at least " . $size . " chars long";
                        }
                        break;
                    case "max":
                        if (strlen($argument) > $size) {
                            return $field . " needs to be maximum " . $size . " chars long";
                        }
                        break;
                    case "size":
                        if (count($argument) <= $size) {
                            return $field . " needs to have more than  " . $size . " entries";
                        }
                        break;
                }
            }

        }
        return "valid";

    }
}