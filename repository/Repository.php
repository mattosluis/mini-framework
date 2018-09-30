<?php

class Repository {

    protected $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }
}