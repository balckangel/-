<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author jiajunzhou
 */
class SampleModel {
	public $table = 'user';
	public $field = array(
        'uid' => array('type' => "int(11) unsigned", 'comment' => 'id'),
        'pid' => array('type' => "int(11) unsigned", 'comment' => '介绍人'),
        'email' => array('type' => "char(60)", 'comment' => '邮箱'),
        'name' => array('type' => "char(32)", 'comment' => '名字'),
        'cardtype' => array('type' => "tinyint(1)", 'comment' => '1、身份证     2、驾驶证 3、护照 4、军官证 5、港澳台通行证')
	);
    public function __construct() {
    }   
    
    public function selectSample() {
        return 'Hello World!';
    }

    public function insertSample($arrInfo) {
        return true;
    }
}
