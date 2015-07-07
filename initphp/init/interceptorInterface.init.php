<?php
if (!defined('IS_INITPHP')) exit('Access Denied!');
/*********************************************************************************
 * InitPHP 3.8.2 国产PHP开发框架  - 框架拦截器interface
 *-------------------------------------------------------------------------------
 * 版权所有: CopyRight By initphp.com
 * 您可以自由使用该源码，但是在使用过程中，请保留作者信息。尊重他人劳动成果就是尊重自己
 *-------------------------------------------------------------------------------
 * Author:zhuli Dtime:2014-11-25
 ***********************************************************************************/
interface interceptorInterface {

	/**
	 * 前置拦截器，在所有Action运行全会进行拦截
	 * 如果返回true，则拦截通过;如果返回false，则拦截
	 * @return boolean 返回布尔类型，如果返回false，则截断
	 */
	public function preHandle();

	/**
	 * 后置拦截器，在所有操作进行完毕之后进行拦截
	 */
	public function postHandle();
}