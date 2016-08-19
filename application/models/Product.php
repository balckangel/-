<?php
class ProductModel extends Base {
    public $table = 'product';
    public $field = array(
        'id' => array('type' => "int(11) unsigned", 'comment' => 'id'),
        'pid' => array('type' => "int(11) unsigned", 'comment' => '父id'),
        'name' => array('type' => "char(100)", 'comment' => '标题'),
        'other' => array('type' => "char(100)", 'comment' => '其他名称'),
        'img' => array('type' => "varchar(255)", 'comment' => '图片'),
        'content' => array('type' => "text", 'comment' => '内容'),
        'intro' => array('type' => "varchar(255)", 'comment' => '介绍'),
        'time' => array('type' => "int(11)", 'comment' => '创建时间'),
        'updated' => array('type' => "int(11)", 'comment' => '更改时间'),
        'status' => array('type' => "int(1)", 'comment' => '0:显示；1不显示'),
    );
    public $pk = 'id';
}
?>