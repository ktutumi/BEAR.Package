<?php
/**
 * Global namespace debug function for short cut typing
 *
 * @package BEAR.Package
 */

/**
 * p - debug print function
 *
 */
use BEAR\Package\Debug\Debug;

/**
 * Debug print
 *
 * @package BEAR.Package
 *
 * @param $var
 */
function p($var = null, $level = 2)
{
    Debug::printR(debug_backtrace(), $var, $level);
}
