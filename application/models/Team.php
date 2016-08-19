<?php
class TeamModel extends Base{
    public $table = 'team';
    public $field = array(
        'id' => array('type' => "int(11) unsigned", 'comment' => 'id'),
        'title' => array('type' => "char(100)", 'comment' => '标题'),
        'img' => array('type' => "varchar(255)", 'comment' => '图片'),
        'content' => array('type' => "text", 'comment' => '内容'),
        'time' => array('type' => "int(11)", 'comment' => '创建时间'),
        'updated' => array('type' => "int(11)", 'comment' => '更改时间'),
        'status' => array('type' => "int(1)", 'comment' => '0:隐藏；1显示'),
    );
    public $pk = 'id';
}
?>