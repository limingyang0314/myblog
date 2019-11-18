<?php
require_once("./config.php");
require_once("./Function.class.php");

class ClassTable extends Func{
    public $columnTitle;
    public $data;
    public $rowTitle;

    public function __construct($columnTitle,$rowTitle){
        $this->columnTitle = $columnTitle;
        $this->rowTitle = $rowTitle;
        $this->data = $this->getClassTableData();
    }

    public function getClassTableData(){
        $sql = "SELECT * FROM course";
        return $this->select($sql);
    }

    public function getOneCourse($weekday,$time){
        $sql = "SELECT * FROM course WHERE weekday ='$weekday' AND time = '$time'";
        $res = $this->select($sql);
        if(empty($res)){
            return null;
        }else{
            return $res[0];
        }
    }

    public function showTable(){
        echo '<table class="hovertable"  width="100%">';
        echo '<tr>';
        echo '<th> </th>';
        //echo count($this->columnTitle);
        foreach($this->columnTitle as $one){
            echo '<th>' . $one . '</th>';
        }
        echo '</tr>';

        $count = count($this->rowTitle);
        for($i = 0 ; $i < $count ; ++ $i){
            echo '<tr>';
            echo '<th>' . $this->rowTitle[$i] . '</th>';
            foreach($this->columnTitle as $key => $value){
                $course = $this->getOneCourse($key + 1, $i + 1);
                if($course != null)
                    echo '<td>' . $course->course_name . "<br>老师：". $course->teacher_name . '</td>';
                else 
                    echo '<td>没课</td>';
               ;
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}