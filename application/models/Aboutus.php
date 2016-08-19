<?php
//model类继承数据库操作base类
class AboutusModel extends Base{
    public $table = 'aboutus';
    public $field = array(
        'id' => array('type' => "int(11) unsigned", 'comment' => 'id'),
        'pid' => array('type' => "int(11) unsigned", 'comment' => '父id'),
        'title' => array('type' => "char(100)", 'comment' => '标题'),
        'img' => array('type' => "varchar(255)", 'comment' => '图片'),
        'content' => array('type' => "text", 'comment' => '内容'),
        'intro' => array('type' => "varchar(255)", 'comment' => '介绍'),
        'time' => array('type' => "int(11)", 'comment' => '创建时间'),
        'updated' => array('type' => "int(11)", 'comment' => '更改时间'),
    );
    public $pk = 'id';
}
?>
