<?php
if(isset($_GET['id']))
{
  extract($_GET);  
  switch($id)
  {
      case 1:
          ?>
            <audio controls preload="auto" autoplay loop>
            <source src="sonido1.m4a" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
<?php
          break;
      case 2:
          ?>
          <audio controls preload="auto" autoplay loop>
            <source src="sonido2.m4a" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
          <?php
          break;
      case 3:
          ?>
            <ul>
            <li>
            <audio controls>
            <source src="sonido1.m4a" type="audio/mpeg">    
            </audio>
            </li>
            <li>
            <audio controls>   
            <source src="sonido2.m4a" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
            </li>
            </ul>
        <?php
          
          
          break;
  }

?>


<?php

}

?>