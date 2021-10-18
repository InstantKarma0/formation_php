<div>
    <form method = 'POST' action='../controller/receveurs.php'>
        <select name = 'formReceveur'>
            <option value='' disabled selected hidden> Selectionner un groupe sanguin </option>

            <?php
                $path = __DIR__;
                require $path. '/../controller/groupe_sanguin.php';
                $tab = getAllGroupeName();
                foreach ($tab as $value) {
                    echo "<option value=" . $value['nom'] . "> ". $value['nom'] ."</option>";
                } // EO foreach
            ?>
        </select>
        <input type = "submit" value = 'Valider' name = "submit">
    </form>

    <?php

    ?>
</div>