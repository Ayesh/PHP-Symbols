<?php

return array (
  'type' => 'extension',
  'name' => 'odbc',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'odbc',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'odbc',
    )),
    'removed' => NULL,
    'version' => '7.3.33',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'odbc extension (php.net)',
        'url' => 'https://www.php.net/manual/book.odbc.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'odbc_autocommit' => 'odbc_autocommit',
    'odbc_binmode' => 'odbc_binmode',
    'odbc_close' => 'odbc_close',
    'odbc_close_all' => 'odbc_close_all',
    'odbc_columns' => 'odbc_columns',
    'odbc_commit' => 'odbc_commit',
    'odbc_connect' => 'odbc_connect',
    'odbc_cursor' => 'odbc_cursor',
    'odbc_data_source' => 'odbc_data_source',
    'odbc_execute' => 'odbc_execute',
    'odbc_error' => 'odbc_error',
    'odbc_errormsg' => 'odbc_errormsg',
    'odbc_exec' => 'odbc_exec',
    'odbc_fetch_array' => 'odbc_fetch_array',
    'odbc_fetch_object' => 'odbc_fetch_object',
    'odbc_fetch_row' => 'odbc_fetch_row',
    'odbc_fetch_into' => 'odbc_fetch_into',
    'odbc_field_len' => 'odbc_field_len',
    'odbc_field_scale' => 'odbc_field_scale',
    'odbc_field_name' => 'odbc_field_name',
    'odbc_field_type' => 'odbc_field_type',
    'odbc_field_num' => 'odbc_field_num',
    'odbc_free_result' => 'odbc_free_result',
    'odbc_gettypeinfo' => 'odbc_gettypeinfo',
    'odbc_longreadlen' => 'odbc_longreadlen',
    'odbc_next_result' => 'odbc_next_result',
    'odbc_num_fields' => 'odbc_num_fields',
    'odbc_num_rows' => 'odbc_num_rows',
    'odbc_pconnect' => 'odbc_pconnect',
    'odbc_prepare' => 'odbc_prepare',
    'odbc_result' => 'odbc_result',
    'odbc_result_all' => 'odbc_result_all',
    'odbc_rollback' => 'odbc_rollback',
    'odbc_setoption' => 'odbc_setoption',
    'odbc_specialcolumns' => 'odbc_specialcolumns',
    'odbc_statistics' => 'odbc_statistics',
    'odbc_tables' => 'odbc_tables',
    'odbc_primarykeys' => 'odbc_primarykeys',
    'odbc_columnprivileges' => 'odbc_columnprivileges',
    'odbc_tableprivileges' => 'odbc_tableprivileges',
    'odbc_foreignkeys' => 'odbc_foreignkeys',
    'odbc_procedures' => 'odbc_procedures',
    'odbc_procedurecolumns' => 'odbc_procedurecolumns',
    'odbc_do' => 'odbc_do',
    'odbc_field_precision' => 'odbc_field_precision',
  ),
  'constants' => 
  array (
    'ODBC_TYPE' => 'unixODBC',
    'ODBC_BINMODE_PASSTHRU' => 0,
    'ODBC_BINMODE_RETURN' => 1,
    'ODBC_BINMODE_CONVERT' => 2,
    'SQL_ODBC_CURSORS' => 110,
    'SQL_CUR_USE_DRIVER' => 2,
    'SQL_CUR_USE_IF_NEEDED' => 0,
    'SQL_CUR_USE_ODBC' => 1,
    'SQL_CONCURRENCY' => 7,
    'SQL_CONCUR_READ_ONLY' => 1,
    'SQL_CONCUR_LOCK' => 2,
    'SQL_CONCUR_ROWVER' => 3,
    'SQL_CONCUR_VALUES' => 4,
    'SQL_CURSOR_TYPE' => 6,
    'SQL_CURSOR_FORWARD_ONLY' => 0,
    'SQL_CURSOR_KEYSET_DRIVEN' => 1,
    'SQL_CURSOR_DYNAMIC' => 2,
    'SQL_CURSOR_STATIC' => 3,
    'SQL_KEYSET_SIZE' => 8,
    'SQL_FETCH_FIRST' => 2,
    'SQL_FETCH_NEXT' => 1,
    'SQL_CHAR' => 1,
    'SQL_VARCHAR' => 12,
    'SQL_LONGVARCHAR' => -1,
    'SQL_DECIMAL' => 3,
    'SQL_NUMERIC' => 2,
    'SQL_BIT' => -7,
    'SQL_TINYINT' => -6,
    'SQL_SMALLINT' => 5,
    'SQL_INTEGER' => 4,
    'SQL_BIGINT' => -5,
    'SQL_REAL' => 7,
    'SQL_FLOAT' => 6,
    'SQL_DOUBLE' => 8,
    'SQL_BINARY' => -2,
    'SQL_VARBINARY' => -3,
    'SQL_LONGVARBINARY' => -4,
    'SQL_DATE' => 9,
    'SQL_TIME' => 10,
    'SQL_TIMESTAMP' => 11,
    'SQL_TYPE_DATE' => 91,
    'SQL_TYPE_TIME' => 92,
    'SQL_TYPE_TIMESTAMP' => 93,
    'SQL_WCHAR' => -8,
    'SQL_WVARCHAR' => -9,
    'SQL_WLONGVARCHAR' => -10,
    'SQL_BEST_ROWID' => 1,
    'SQL_ROWVER' => 2,
    'SQL_SCOPE_CURROW' => 0,
    'SQL_SCOPE_TRANSACTION' => 1,
    'SQL_SCOPE_SESSION' => 2,
    'SQL_NO_NULLS' => 0,
    'SQL_NULLABLE' => 1,
    'SQL_INDEX_UNIQUE' => 0,
    'SQL_INDEX_ALL' => 1,
    'SQL_ENSURE' => 1,
    'SQL_QUICK' => 0,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'odbc.allow_persistent' => '1',
    'odbc.check_persistent' => '1',
    'odbc.default_cursortype' => '3',
    'odbc.default_db' => NULL,
    'odbc.default_pw' => NULL,
    'odbc.default_user' => NULL,
    'odbc.defaultbinmode' => '1',
    'odbc.defaultlrl' => '4096',
    'odbc.max_links' => '-1',
    'odbc.max_persistent' => '-1',
  ),
);
