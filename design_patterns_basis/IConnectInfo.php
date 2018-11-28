<?php

Interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "root";
    const DBNAME = "test";
    const PW = "chinags01MYSQL";
    public function testConnection();
}
