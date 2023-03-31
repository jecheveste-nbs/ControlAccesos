<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password],select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    option{
        background-color:#025537;
        color:white;

    }

    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
      margin-inline: auto;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
      max-width:800px;
    }
    h2{
        display:flex;
        flex-direction:row;
        justify-content: center;

    }
    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
    
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
</style>
</head>
<body>

<h2>Darse de alta en el sistema </h2>



<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Darse de alta</button>

<div id="id01" class="modal">
  
    <form class="modal-content animate" action="/action_page.php" method="post">
        

        <div class="container">
        <h2>Darse de alta en el sistema </h2>
            <label for="nombre"><b>Nombre</b></label>
            <input type="text" placeholder="Introduce tu nombre" name="nombre" required>
            <label for="apellido"><b>Apellido(s) </b></label>
            <input type="text" placeholder="Introduce tu apellido" name="apellido" required>
            <label for="grupo"><b>Grupo </b></label>
            <select name="grupo" id="selector">
            <?php
                require_once("/var/www/html/nbs/plt/nsLoader.php");

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
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>