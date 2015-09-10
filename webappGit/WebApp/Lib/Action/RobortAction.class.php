<?php
class RobortAction extends Action{
    public function callme(){
        /*echo 'Action Active<br/>';
        $selectDate = M('Form');
        $condition['content']='nfc';
        $condition['id']=3;
        $condition['_logic']='OR';
        $outPut = $selectDate->where($condition)->select();
        echo var_dump($outPut).'<br/>';
        echo '<br/>';
        foreach ($outPut as $value) {
            foreach ($value as $subvalue){
                echo $subvalue.'<br/>';
            }
        }
        $selectData= M('Form');
        $condition['id'] = array('egt', 3);
        $outPut = $selectData->where($condition)->select();
        foreach ($outPut as $value) {
            foreach ($value as $subvalue){
                echo $subvalue.'<br/>';
            }
        }*/
        $Model = new Model();
        $outPut = $Model->query("Select * from think_form");
        echo var_dump($outPut);
        echo '<br/>';
        foreach($outPut as $val){
            foreach ($val as $subval){
                echo $subval.'<br/>';
            }
        }
    }
    public function combine(){
        
    }
}
?>
