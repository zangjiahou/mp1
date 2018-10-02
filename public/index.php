<?php
/**
 * Created by PhpStorm.
 * User: zangj
 * Date: 2018/10/2
 * Time: 8:51
 */

main::start();
class main {
    static public function start($filename) {
        $records = csv::getRecords($filename);
       foreach ($records as $record) {
           $array = $record->returnArray();
           print_r($array);
       };
    }
}
class html {
    public static function generateTable($records){
        $count = 0;
        foreach ($records as $record) {
         if($count==0){
             $array = $record->returnArray();
             $fields = array_keys($array);
             $values = array_values($array);
             print_r($fields);
             print_r($array);


         }

             $array = $record->returnArray();
             print_r($array);
         }
    }
}
class csv {
    static public function getRecords($filename) {
      $file = fopen($filename, "r");
      $fieldNames = array();
      $count = 0;
      while(! feof($file)){
           $record = fgetcsv($file);
           if($count == 0) {
               $fieldNames = $record;
           } else {
               $records[] = recordFactory::create($fieldNames, $record);
           }
           $count++;
       }
        fclose($file);
        return $records;
    }
}
class record {
    public function construct(Array $fieldNames = null, $values = null){
        $record = array_combine($fieldNames, $values);
        foreach ($record as $property => $value){
            $this->createProperty($property, $values);
        }


}
    public function returnArray(){
     $array = (array)
        return $array;

    }

    public function createProperty($name = 'first', $value = 'Keith') {
        $this->{$name} = $value;
}

}
class recordFactory{
    public static function create(Array $fieldNames = null, $record = null) {
       print_r($fieldNames);
       print_r($record);
         $record = new record($fieldNames, $record);
    return $record;
    }
}