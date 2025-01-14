<div>
        <?php echo" <p>Consulta multes del vehicle amb matricula: ". $_SESSION['matricula']. "</p>";?>
        <table>
            <tr>
                <th>Data</th>
                <th>Tipus De Multa</th>
                <th>Estat</th>
            </tr>
            <?php
            if ($multas) {
                foreach ($multas as $multa) {
                    echo"<tr>";
                    echo "<td>" . $multa['fecha'] . "</td>";
                    echo "<td>" . $multa['tipo_multa'] . "</td>";
                    if($multa['pagada'] == 1){
                        echo "<td><p>Pagada</p></td>";
                    }else {
                        echo"<td><a href='index.php?controller=Multa&action=editarMultaPagament'>Fer el pagament</a></td>"; 
                    }
                    echo"</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No hay registros</td></tr>";
            }
            ?>
            </table>
            <a href="index.php?controller=Logout&action=cerrarSesion">Tancar la sessió</a>
    </div>