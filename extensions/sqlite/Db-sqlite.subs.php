<?php

/**
 * @name      ElkArte Forum
 * @copyright ElkArte Forum contributors
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * This software is a derived product, based on:
 *
 * Simple Machines Forum (SMF)
 * copyright:	2011 Simple Machines (http://www.simplemachines.org)
 * license:  	BSD, See included LICENSE.TXT for terms and conditions.
 *
 * @version 1.0 Alpha
 *
 * This file has all the main functions in it that relate to the database.
 *
 */

if (!defined('ELKARTE'))
	die('No access...');

/**
 * Fix up the prefix so it doesn't require the database to be selected.
 *
 * @param string &db_prefix
 * @param string $db_name
 */
function db_fix_prefix(&$db_prefix, $db_name)
{
	global $db;

	$db->db_fix_prefix(&$db_prefix, $db_name);
}

/**
 * Callback for preg_replace_callback on the query.
 * It allows to replace on the fly a few pre-defined strings, for convenience ('query_see_board', 'query_wanna_see_board'), with
 * their current values from $user_info.
 * In addition, it performs checks and sanitization on the values sent to the database.
 *
 * @param $matches
 */
function elk_db_replacement__callback($matches)
{
	global $db;

	return $db->elk_db_replacement__callback($matches);
}

/**
 * Just like the db_query, escape and quote a string, but not executing the query.
 *
 * @param string $db_string
 * @param array $db_values
 * @param resource $connection = null
 */
function elk_db_quote($db_string, $db_values, $connection = null)
{
	global $db;

	return $db->elk_db_quote($db_string, $db_values, $connection);
}

/**
 * Do a query.  Takes care of errors too.
 *
 * @param string $identifier
 * @param string $db_string
 * @param array $db_values = array()
 * @param resource $connection = null
 */
function elk_db_query($identifier, $db_string, $db_values = array(), $connection = null)
{
	global $db;

	return $db->elk_db_query($identifier, $db_string, $db_values, $connection);
}

/**
 * affected_rows
 * @param resource $connection
 */
function elk_db_affected_rows($connection = null)
{
	global $db;

	return $db->elk_db_affected_rows($connection);
}

/**
 * insert_id
 *
 * @param string $table
 * @param string $field = null
 * @param resource $connection = null
 */
function elk_db_insert_id($table, $field = null, $connection = null)
{
	global $db;

	return $db->elk_db_insert_id($table, $field, $connection);
}

/**
 * Do a transaction.
 *
 * @param string $type - the step to perform (i.e. 'begin', 'commit', 'rollback')
 * @param resource $connection = null
 */
function elk_db_transaction($type = 'commit', $connection = null)
{
	global $db;

	return $db->elk_db_transaction($type, $connection);
}

/**
 * Database error!
 * Backtrace, log, try to fix.
 *
 * @param string $db_string
 * @param resource $connection = null
 */
function elk_db_error($db_string, $connection = null)
{
	global $db;

	return $db->elk_db_error($db_string, $connection);
}

/**
 * insert
 *
 * @param string $method - options 'replace', 'ignore', 'insert'
 * @param $table
 * @param $columns
 * @param $data
 * @param $keys
 * @param bool $disable_trans = false
 * @param resource $connection = null
 */
function elk_db_insert($method = 'replace', $table, $columns, $data, $keys, $disable_trans = false, $connection = null)
{
	global $db;

	return $db->elk_db_insert($method, $table, $columns, $data, $keys, $disable_trans, $connection);
}

/**
 * This function tries to work out additional error information from a back trace.
 *
 * @param $error_message
 * @param $log_message
 * @param $error_type
 * @param $file
 * @param $line
 */
function elk_db_error_backtrace($error_message, $log_message = '', $error_type = false, $file = null, $line = null)
{
	global $db;

	return $db->elk_db_error_backtrace($error_message, $log_message, $error_type, $file, $line);
}

/**
 * Emulate UNIX_TIMESTAMP.
 */
function elk_udf_runix_timestamp()
{
	global $db;

	return $db->elk_udf_runix_timestamp();
}

/**
 * Emulate INET_ATON.
 *
 * @param $ip
 */
function elk_udf_rinet_aton($ip)
{
	global $db;

	return $db->elk_udf_rinet_aton($ip);
}

/**
 * Emulate INET_NTOA.
 *
 * @param $n
 */
function elk_udf_rinet_ntoa($n)
{
	global $db;

	return $db->elk_udf_rinet_ntoa($n);
}

/**
 * Emulate FIND_IN_SET.
 *
 * @param $find
 * @param $groups
 */
function elk_udf_rfind_in_set($find, $groups)
{
	global $db;

	return $db->elk_udf_rfind_in_set($find, $groups);
}

/**
 * Emulate YEAR.
 *
 * @param $date
 */
function elk_udf_ryear($date)
{
	global $db;

	return $db->elk_udf_ryear($date);
}

/**
 * Emulate MONTH.
 *
 * @param $date
 */
function elk_udf_rmonth($date)
{
	global $db;

	return $db->elk_udf_rmonth($date);
}

/**
 * Emulate DAYOFMONTH.
 *
 * @param $date
 */
function elk_udf_rdayofmonth($date)
{
	global $db;

	return $db->elk_udf_rdayofmonth($date);
}

/**
 * We need this since sqlite_libversion() doesn't take any parameters.
 *
 * @param $void
 */
function elk_db_libversion($void = null)
{
	global $db;

	return $db->elk_db_libversion($void);
}

/**
 * This function uses variable argument lists so that it can handle more then two parameters.
 * Emulates the CONCAT function.
 */
function elk_udf_rconcat()
{
	global $db;

	return $db->elk_udf_rconcat();
}

/**
 * We need to use PHP to locate the position in the string.
 *
 * @param string $find
 * @param string $string
 */
function elk_udf_locate($find, $string)
{
	global $db;

	return $db->elk_udf_locate($find, $string);
}

/**
 * This is used to replace RLIKE.
 *
 * @param string $exp
 * @param string $search
 */
function elk_udf_regexp($exp, $search)
{
	global $db;

	return $db->elk_udf_regexp($exp, $search);
}

/**
 * Escape the LIKE wildcards so that they match the character and not the wildcard.
 *
 * @param $string
 * @param bool $translate_human_wildcards = false, if true, turns human readable wildcards into SQL wildcards.
 */
function elk_db_escape_wildcard_string($string, $translate_human_wildcards=false)
{
	global $db;

	return $db->elk_db_escape_wildcard_string($string, $translate_human_wildcards);
}