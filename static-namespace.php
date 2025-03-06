<?php

class test{
   public static $results = 5;
   public static function showresult(){
    return self::$results;
   }
}

echo test::showresult();
