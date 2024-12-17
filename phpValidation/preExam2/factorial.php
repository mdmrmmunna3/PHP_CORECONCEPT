<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <form action="" method="post" id="form_container">
            <div class="input_box">
                <label for="num">Enter an Integer Number</label>
                <input type="text" name="num" id="num">
            </div>
            <div class="btn">
                <button type="submit" name="subBtn">Submit</button>
            </div>
        </form>
    </section>

    <?php
    if (isset($_POST['subBtn'])) {
        $number = $_POST['num'];
        $fact = 1;

        if (empty($number)) {
            echo "plase input your number";
        } elseif ($number === 0 || $number === 1) {
            echo "<div>$number factorial is 1</div>";
        } else {
            for ($i = 2; $i <= $number; $i++) {
                $fact *= $i;
            }
            echo "<div>$number factorial is $fact</div>";
        }
    }
    ?>
</body>

</html>