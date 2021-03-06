<?php
/**
 * Constants for GB script
 */

define('PATH_MSG_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'gbook'
    . DIRECTORY_SEPARATOR . 'msg.json');
define('PATH_BAN_FILE', DATA_ROOT . DIRECTORY_SEPARATOR . 'gbook'
    . DIRECTORY_SEPARATOR . 'bans');

const GB_OK = 0;
const GB_ERR_NO_NICK = 1;
const GB_ERR_NO_MSG = 2;
const GB_ERR_OPEN_MSG_FILE = 3;
const GB_ERR_WRITE_POST = 4;
const GB_POST_SUCCESS = 5;

const GB_ERR_NO_SELECTED = 6;
const GB_DEL_SUCCESS = 7;
const GB_ERR_NO_MSG_FILE = 8;
const GB_ERR_CANNOT_READ = 9;
const GB_ERR_READONLY = 10;
/* vim: set ts=4 sw=4 tw=80 sts=4 fdm=marker nowrap et :*/
