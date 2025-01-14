<div class="taulaObres">
        <?php echo" <p>Benvingut treballador/a:". $_SESSION['user']. "</p>";?>
        <table>
            <tr>
                <th>Data</th>
                <th>Tipus</th>
                <th>Vehicle</th>
                <th>Propietari</th>
                
            </tr>
            <?php
            if (!empty($multas)) {
                foreach ($multas as $multa) {
                    echo"<tr>";
                    echo "<td>" . $multa["fecha"] . "</td>";
                    echo "<td>" . $multa["tipo_multa"] . "</td>";
                    echo "<td>" . $multa["matricula"] . "</td>";
                    echo "<td>" . $multa["propietario"] . "</td>";
                    echo "<td><a>Imprimir Documento Word</a></td>";
                  
                }
            } else {
                echo "<tr><td colspan='7'>No hay registros</td></tr>";
            }
            ?>
            </table>
            <a href="index.php?controller=Logout&action=cerrarSesion">Tancar la sessió</a>
    </div>