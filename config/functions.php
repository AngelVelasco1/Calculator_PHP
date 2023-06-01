<?php
class calculator
{
    public static function operations()
    {
        $numbers = "number";
        $operator = "op";
        $value1 = "";
        $value2 = "";

        (isset($_POST['number'])) ? $number = $_POST['screen'] . $_POST['number'] : $number = "";
        if (isset($_POST['op'])) {
            $value1 = $_POST['screen'];
            setcookie($numbers, $value1);

            $value2 = $_POST['op'];
            setcookie($operator, $value2);

            $number = "";
        }
        ;

        if (isset($_POST['equal'])) {
            $number = $_POST['screen'];

            switch ($_COOKIE['op']) {
                case "+":
                    $result = $_COOKIE['number'] + $number;
                    break;
                case "-":
                    $result = $_COOKIE['number'] - $number;
                    break;
                case "*":
                    $result = $_COOKIE['number'] * $number;
                    break;
                case "/":
                    $result = $_COOKIE['number'] / $number;
                    break;
            }
            $number = $result;
        }
        return $number;
    }
}
?>