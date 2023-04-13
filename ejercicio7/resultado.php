<table border="1px">
    <tr>
        <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        echo '<td>'.$num1.'</td>';
        echo '<td>+</td>';
        echo '<td>'.$num2.'</td>';
        echo '<td>=</td>';
        echo '<td>'.($num1+$num2).'</td>';
        ?>
    </tr>
</table>