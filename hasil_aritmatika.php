<?php
        $suku1 = $_POST['suku1'];
        $suku2 = $_POST['suku2'];
        $baris = $_POST['banyakbaris'];
     
        echo "
            <table border=1>
          <tr align=center>
                <td>I</td>
                <td>X</td>
         </tr>";

          $hasil= $suku2;
        $beda = $suku2-$suku1;

            for ($i=1; $i<=$baris;$i++) {
                if($i == 1){
                 echo" <tr align=center>
                    <td>$i</td>
                    <td>$suku1</td>
                </tr>";
            } else if($i == 1){
             echo" <tr align=center>
                <td>$i</td>
                <td>$suku2</td>
            </tr>";

           } else{
            echo" <tr align=center>
               <td>$i</td>
               <td>$hasil</td>
             </tr>";
             $hasil= $hasil + $beda;

           }
        }
        
        echo "</table>";
        echo "Banyak Baris : ".$baris;
    ?>