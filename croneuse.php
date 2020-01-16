<?php
Class Ssh2_cronuse {
 
    private $connection;
    private $path;
    private $handle;
    private $cron_file;
 
    function __construct($host='localhost', $port='', $username='root', $password='') {


    }
 
    public function exec() {...}
 
    public function write_to_file() {...}
 
    public function remove_file() {...}
 
    public function append_cronjob() {...}
 
    public function remove_cronjob() {...}
 
    public function remove_crontab() {...}
 
    private function crontab_file_exists() {...}
 
    private function error_message() {...}



?>