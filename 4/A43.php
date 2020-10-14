<?php

echo "Input size (n >=1): ";
fscanf(STDIN, "%d",$n);
for($i=$n; $i>=1; $i--){//循环行数
    for($j=1; $j<=$i; $j++){//循环列数
        if($i==1||$i==$n)
           echo $array[$i][$j]=1;
           else echo  $array[$i][$j]=$array[$i+1][$j]+$array[$i][$j-1];
        printf("\t");
    }
  printf("\n");
} 
