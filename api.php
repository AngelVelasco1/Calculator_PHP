<?php
/* Headers */
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        $result = (isset($_POST['equal'])) ? calculator::operations() : $_POST['screen'];
        break;
    default:
        echo "ERROR";
}

class calculator
{
    public static function operations()
    {
        $numbers = "number";
        $operator = "op";
        $value1 = "";
        $value2 = "";

        $number =(isset($_POST['number'])) ? $number = $_POST['screen'] . $_POST['number'] : $number = "";
        if (isset($_POST['op'])) {
            $value1 = $_POST['screen'];
            setcookie($numbers, $value1);

            $value2 = $_POST['op'];
            setcookie($operator, $value2);

            $number = "";
        }

        if (isset($_POST['equal'])) {
            $number = $_POST['screen'];

           
            $value1 = isset($_COOKIE[$numbers]) ? $_COOKIE[$numbers] : 0;
            $value2 = isset($_COOKIE[$operator]) ? $_COOKIE[$operator] : '';

            switch ($value2) {
                case "+":
                    $result = $value1 + $number;
                    break;
                case "-":
                    $result = $value1 - $number;
                    break;
                case "*":
                    $result = $value1 * $number;
                    break;
                case "/":
                    $result = $value1 / $number;
                    break;
                default:
                    $result = $number;
            }

            $number = $result;
        }

        return $number;
        }

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>The Best Calculator</h1>
    <div id="calculator">
        <form action="" method="POST">
            <input type="text" id="mainScreen" name="screen" value="<?php echo calculator::operations() ?>"> <br>
            <input type="submit" class="numbtn" name="number" value="7" />
            <input type="submit" class="numbtn" name="number" value="8" />
            <input type="submit" class="numbtn" name="number" value="9" />
            <input type="submit" class="operation" name="op" value="+" /> <br>
            <input type="submit" class="numbtn" name="number" value="4" />
            <input type="submit" class="numbtn" name="number" value="5" />
            <input type="submit" class="numbtn" name="number" value="6" />
            <input type="submit" class="operation" name="op" value="-" /><br>
            <input type="submit" class="numbtn" name="number" value="1" />
            <input type="submit" class="numbtn" name="number" value="2" />
            <input type="submit" class="numbtn" name="number" value="3" />
            <input type="submit" class="operation" name="op" value="*" /><br>
            <input type="submit" class="numbtn" name="number" value="0" />
            <input type="submit" class="numbtn" name="number" value="C" />
            <input type="submit" class="result" name="equal" value="=" />
            <input type="submit" class="operation" name="op" value="/" /></br>

        </form>
    </div>
</body>

</html>