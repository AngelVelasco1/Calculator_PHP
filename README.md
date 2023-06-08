# Calculadora en PHP

Esta es una calculadora básica desarrollada en PHP que permite realizar operaciones de suma, resta, multiplicación y división. Utiliza una estructura de control `switch` para determinar qué operación realizar en función de la selección del usuario.

## Cómo utilizar la calculadora

1. Clona o descarga el repositorio de la calculadora en tu entorno de desarrollo local.
2. Abre el archivo `calculator.php` en tu editor de código favorito.
3. Ejecuta el archivo `calculator.php` en un servidor web local. Puedes usar una herramienta como XAMPP o WAMP para configurar un entorno de desarrollo local con PHP.
4. En tu navegador web, accede a la URL correspondiente para ejecutar el archivo `calculator.php`.
5. Se mostrará una interfaz simple de calculadora en tu navegador.
6. Ingresa los números y selecciona la operación que deseas realizar.
7. Haz clic en el botón "Calcular" para obtener el resultado de la operación.

## Estructura del código

El archivo `calculator.php` contiene el código de la calculadora. A continuación, se muestra un ejemplo de cómo se implementa la lógica de cálculo utilizando un `switch`:

```
php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = 'Error: No se puede dividir por cero.';
            }
            break;
        default:
            $result = 'Error: Operador inválido.';
            break;
    }
}
?>
```

En el ejemplo anterior, se verifica el método de solicitud del formulario (`POST`) y se obtienen los números y el operador seleccionados por el usuario. Luego, el `switch` determina qué operación realizar y asigna el resultado correspondiente a la variable `$result`.

## Contribuciones

Siéntete libre de contribuir a este proyecto mejorando la funcionalidad existente, agregando nuevas características o corrigiendo errores. Cualquier aporte es bienvenido.