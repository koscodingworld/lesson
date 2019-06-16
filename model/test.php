<?php

namespace model;

use Db;

$db = new Db();
var_dump($db::connect());