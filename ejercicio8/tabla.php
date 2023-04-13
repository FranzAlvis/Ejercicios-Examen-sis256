<table border="1px">
    <?php
    $filas = $_GET['filas'];
    $columnas = $_GET['columnas'];
    echo '<tr style="background-color: gray">';
    echo '<td>&nbsp&nbsp&nbsp</td>';
    for ($i=1; $i <=$filas ; $i++) { 
        echo '<td style="font-weight: bold">'.$i.'</td>';
    }
    echo '</tr>';
    for ($i=1; $i <=$columnas ; $i++) { 
        echo '<tr>';
        echo '<td style="background-color: gray">'.$i.'</td>';
        for ($j=1; $j <=$filas ; $j++) { 
            echo '<td>'.($i*$j).'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>


<tr></tr>
<tr>

    <td></td>
</tr>