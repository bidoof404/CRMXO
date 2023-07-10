<?php

$serverName = "DESKTOP-CQR4K8L\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"CRM_Test", "UID"=>"Admin", "PWD"=>"Letmein1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established.<br />";
}else
{
    echo "Connection could not be established.<br/>";
    die( print_r( sqlsrv_errors(), true));
}
?>