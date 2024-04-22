<?php

interface DataQueryInterface {
    public function fetch($table,$data);
    public function fetchAll($table);
    public function insert($table,$data);
    public function update($table,$data);
    public function delete($table,$data);
    public function search($table,$data);
}