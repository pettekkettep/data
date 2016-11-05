<?php

$query = require 'bootstrap.php';

$users = $query -> selectAll('users');

require 'index.view.php';
