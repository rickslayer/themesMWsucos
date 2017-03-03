<?php

function geraTitle()
    {
      bloginfo(name);
    if(!is_home())
         echo ' | ';

         the_title();

    }
?>