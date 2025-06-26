<?php
   $tbl = [
      "row1" => ["key11" => "val11", "key12" => "val12", "key13" => "val13"],
      "row2" => ["key21" => "val21", "key22" => "val22", "key23" => "val23"],
      "row3" => ["key31" => "val31", "key32" => "val32", "key33" => "val33"]
   ];

   echo ("\n");
   foreach ($tbl as $rk=>$rv){
      echo "$rk <br>"; 
      foreach ($rv as $k=>$v){
         echo "$k => $v <br> ";
      }
      echo "\n";
   }
?>