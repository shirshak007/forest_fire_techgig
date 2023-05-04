<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen('php://stdin', 'r');
  fscanf($fp, "%d %d\n", $n, $x);
  $p = fscanf($fp, str_repeat("%d ", $n). "\n");
  fclose($fp);

  if($x > $n) {
    fwrite(STDOUT, -1);
    return 0;
  } elseif($x==$n) {
    fwrite(STDOUT, min($p));
    return 0;
  } else {
    sort($p);
  }

  if ($p[$n-$x] == $p[$n-$x-1]){
    echo -1 ;
  } else {
    echo $p[$n-$x];
  }
?>
