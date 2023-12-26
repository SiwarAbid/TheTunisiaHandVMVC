<?php 
interface Crud{

    public static function getAll();
    public static function delete();
    public static function add($o);
    public static function update($o);

}    
?>