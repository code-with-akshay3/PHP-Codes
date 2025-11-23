<html>
      <body>
            <?php
                function factorial($num)
                       {
                          $factorial =1;
                          for($i=1; $i<=$num; $i++)
                                {
                                      $factorial = $factorial * $i;
                                }
                                      return  $factorial;
                       }
                            $num = 10;
                            $fact =  factorial($num);
                            echo "factorial =  $fact";
            ?>
      </body>
</html>


