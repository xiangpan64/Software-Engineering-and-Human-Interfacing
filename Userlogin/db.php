<?php
   // This file is the same as example 6-7, but includes mysqlclean() and shellclean() 
   $hostName = "localhost";
   $databaseName = "lvu";
   $username = "lvu";
   $password = "grs28gmb";
   function showerror()
   {
      die("Error " . mysql_errno() . " : " . mysql_error());
   }
   function mysqlclean($array, $index, $maxlength, $connection)
   {
     if (isset($array["{$index}"]))
     {
        $input = substr($array["{$index}"], 0, $maxlength);
        $input = mysql_real_escape_string($input, $connection);
        return ($input);
     }
     return NULL;
   }
   function shellclean($array, $index, $maxlength)
   {
     if (isset($array["{$index}"]))
     {
       $input = substr($array["{$index}"], 0, $maxlength);
       $input = EscapeShellArg($input);
       return ($input);
     }
     return NULL;
   }
?>
