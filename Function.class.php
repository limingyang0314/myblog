<?php
class Func{
    public function getDataAsArray($temp){
        $result = [];
        while ($fieldinfo = mysqli_fetch_object($temp)) {
            $result[] = $fieldinfo;
        }
        return $result;
    }
    
    public function select($query){
        global $conn;
        $temp = mysqli_query($conn,$query);
        $result = $this->getDataAsArray($temp);
        return $result;
    }
    
    public function delete($query){
        global $conn;
        $temp = mysqli_query($conn,$query);
        $result = $temp;
        return $result;
    }
    
    public function middle_code($res){
        if(!empty($res)){
            return array('error_code' => -1, 'message'=> 'success', 'data' => $res);
        }else{
            return array('error_code' => 1, 'message'=> 'failed', 'data' => []);
        }
    }
}

