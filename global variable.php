<?php
      $name="sanaya sharma";
      function global_var()
           {
               global $name;
               echo"variable inside the function:". $name;
               echo"</br>";
           }
               global_var();
               echo"variable outside the function:".$name;
   ?>