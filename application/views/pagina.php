<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo $head;

?>

    <body>
        <form action="" method="POST" id="formulario" name="formulario">
           
            <div>
                <label for="">Mi nombre es <?php echo $nombre?> y soy mayor de edad</label>
                <input type="checkbox" name="mayor" id="mayor">
            </div>

        </form>
        
        <a href="home">Home</a>
        <div id="form"></div>
        
        <!-- Tabs -->
        <h2 class="demoHeaders">Dialog</h2>
        <p>
            <button id="dialog-link" class="ui-button ui-corner-all ui-widget">
                <span class="ui-icon ui-icon-newwin"></span>Open Dialog
            </button>
        </p>   
 </body>

</html>