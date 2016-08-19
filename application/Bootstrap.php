<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{

	private $_config;
	public function _initConfig() {
		//把配置保存起来
		$this->_config = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $this->_config);
	}
	public function _initRoute(Yaf_Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由
		//print_r( $routes = Yaf_Dispatcher::getInstance()->getRouter()->getRoute("default"));
		Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
				"simple", new Yaf_Route_simple('m', 'c', 'a')
		);
		$route  = new Yaf_Route_Rewrite(
		//"/product/list/:id/:name",
				"/index/get",
				array(
						"controller" => "item",
						"action"     => "get",
				)
		);
		Yaf_Dispatcher::getInstance()->getRouter()->addRoute(
				"product", $route
		);
	}
	public function _initView(Yaf_Dispatcher $dispatcher){
		//在这里注册自己的view控制器，例如smarty,firekylin
		Yaf_Registry::set('dispatcher', $dispatcher);
	}
	public function _initSession($dispatcher)
	{
		//session_start();
		//不使用这个了，因为要使用 Yaf_Session::getInstance()->start();
		Yaf_Session::getInstance()->start();
	}
}
