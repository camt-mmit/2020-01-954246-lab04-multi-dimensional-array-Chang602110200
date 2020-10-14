<?php
//60200-200 chang
 Printf("Input number of student: ");
  $sn=trim(fgets(STDIN));
 printf("Input the number of chapter: ");
  $cn=trim(fgets(STDIN));
  $format="%s";
  $students = [];
  
  for($j = 0; $j < $sn; $j++)
    {$students[$j]= [];
      printf("\nStudent %d  name and score  ",$j+1);
    for($i = 0; $i< $cn; $i++)
    { $format .="%f"; }
    $format=trim($format);
    for($i = 0; $i < $cn; $i++)
    {printf("(chapter %d ",$i+1);
  }
  echo");"; 
  $students[$j] = fscanf(STDIN,trim($format));
}
  for($j = 0; $j < count($students); $j++)
  {
    printf("%s : ",$students[$j][0]);
    $total = 0;
    for($i = 1; $i < $cn+1; $i++)
    {
    printf("%.2f ",$students[$i][$j]);
    $total +=$students[$i][$j];
    }
    printf(" %.2f\n ",$total);
  }