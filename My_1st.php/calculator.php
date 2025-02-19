
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="number" name="'num01" placeholder="Number one">
        <select name="operator" id="">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="'num02" placeholder="Number two">

        <button>Calculate</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // GRAB DATA
        //! This way it is hackable, because here we are not sanitizing the data, and it can be allow JS to come in.
        // $num01 = $_POST['num01'];
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST['operator']);
        
        // ERROOR HANDLERS
        $errors = false;

        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "Fill in all Fields";
            $errors = true;
        }

        if (is_numeric($num01) || is_numeric($num02)) {
            echo "Only Write Numbers";
            $errors = true;
        }

        // Calculate the numbers if no errors
        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "Something Went Horribly Wrong";
                                
            }

            echo "Result = " . $value;
        }

    }
    ?>

</body>
</html>