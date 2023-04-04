<div id="idmodal" class="modal">
    <form class="modal-content animate">
      <div class="container">
        <h2>Darse de alta en el sistema </h2>
            <label for="nombre"><b>Nombre</b></label>
            
            <label for="apellido"><b>Apellido(s) </b></label>
            <input type="text" placeholder="Introduce tu apellido" name="apellido" required>
            <label for="grupo"><b>Grupo </b></label>
            <select name="grupo" id="selector">
            <?php
                $iDb=DbGet();
                $iSql="SELECT IdGrupo,Descripcion FROM nbs_accesos.nsgrupos;";

                $iReg=DbGetReg($iSql,$iDb);
                if ($iReg!==false){        
                    while ($iRow = $iReg->fetch_assoc()) {
                        echo ('<option value="'.$iRow["IdGrupo"].'">'.$iRow["Descripcion"].'</option>');
                    }
                }
                ?>
            </select>
            <button type="submit">Enrolarse</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="togglemodal()" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
