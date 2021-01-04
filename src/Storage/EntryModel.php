<?php

if (env('DB_CONNECTION') == 'mongodb') {
    require_once 'MongoModel.php';
} else {
    require_once 'RegularModel.php';
}
