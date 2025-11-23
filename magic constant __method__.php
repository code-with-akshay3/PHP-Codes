<?php
       class company
          {
               public function city()
                   {
                          return __method__;
                   }
          }
                   $obj=new company;
                   echo $obj->city();
  ?>