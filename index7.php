<?php
  $sample = " Tutorial";
  $sample = preg_replace('/(\b[a-z])/i','<span style="color:light blue;">\1</span>', $sample);   
  echo $sample
?>