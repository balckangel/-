<?php
class SafeModel extends Base{
    public $table = 'safe';
    public $field = array(
        'id' => array('type' => "int(11) unsigned", 'comment' => 'id'),
        'pid' => array('type' => "int(11) unsigned", 'comment' => '父id'),
        'title' => array('type' => "char(100)", 'comment' => '标题'),
        'img' => array('type' => "varchar(255)", 'comment' => '图片'),
        'content' => array('type' => "text", 'comment' => '内容'),
        'intro' => array('type' => "varchar(255)", 'comment' => '介绍'),
        'status' => array('type' => "int(1)", 'comment' => '显示状态'),
        'time' => array('type' => "int(11)", 'comment' => '创建时间'),
        'updated' => array('type' => "int(11)", 'comment' => '更改时间'),
    );
    public $pk = 'id';
}
?>