<?php
//IConnectInfo.php
interface IConnectInfo
{
	const HOST = 'localhost';
	const UNAME = 'root';
	const PW = 'chinags';
	const DBNAME = 'php_design_patterns';

	public function doConnect();
}
