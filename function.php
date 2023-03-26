<?php
    function multiply($num1, $num2, $num3 = 5) {
        $answer = $num1 * $num2 * $num3;
        return $answer;
    }
    echo multiply(4, 6);
?>

    <P></P>

    <?Php
    include 'experiment.php';
    ?>

    <?php
           if ($sy_connect) {
            echo "Connected";
        } else {
            echo "Not Connected";
        }
    ?>