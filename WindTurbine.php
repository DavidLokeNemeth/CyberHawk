<?php
/**
 * Created by PhpStorm.
 * User: lokel
 * Date: 04/10/2020
 * Time: 17:10
 */

class WindTurbine
{
    protected $itemList=array();

    public function __construct()
    {
        $itemList = [];
        for ($i=1;$i<=100; $i++){
            $itemList[] = $i;
        }
        $this->itemList = $itemList;
    }

    public function getItemList(): array
    {
        return $this->itemList;
    }

}