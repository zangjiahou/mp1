<?php
/**
 * Created by PhpStorm.
 * User: zangj
 * Date: 2018/10/2
 * Time: 8:51
 */

main::start();
class main {
    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }
}
class csv {
    static public function getRecords() {
        $make = 'Lambo';
        $model = 'Bling Wagon';
        $car = AutomobileFactory::create($make, $model);
        $records[] = $car;
        print_r($records);
        return $records;
    }
}
class html {
    static public function generateTable($records) {
        $table = $records;
        return $table;
    }
}
class system {
    static public function printPage($page) {
        echo $page;
    }
}
class Automobile
{
    private $vehicleMake;
    private $vehicleModel;
    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }
    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}
class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}