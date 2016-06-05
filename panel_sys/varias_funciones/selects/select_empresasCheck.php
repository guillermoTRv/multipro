<?php 
	$selectEmpresas = "SELECT name_cliente,name_get FROM clientes";
    $selectEmpresas = mysqli_query($enlace,$selectEmpresas);
            
            echo "<select class='form-control select-sm_user' style='margin:0px;' id='consulta-lista-personal'>";
            echo "<option>--</option>";
            while ($arrayEmpresas = mysqli_fetch_array($selectEmpresas)) {
                $nameCliente = $arrayEmpresas['name_cliente'];
                $nameGet     = $arrayEmpresas['name_get'];
                ?>  
                    <option value='<?php echo $nameGet; ?>' ><?php echo $nameCliente; ?></option>
                <?php

            }
            echo "</select>";
?>