<?php

return array (
  'type' => 'extension',
  'name' => 'interbase',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'interbase',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'interbase',
    )),
    'removed' => NULL,
    'version' => '7.2.34-52+ubuntu24.04.1+deb.sury.org+1',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'interbase extension (php.net)',
        'url' => 'https://www.php.net/manual/book.interbase.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'ibase_connect' => 'ibase_connect',
    'ibase_pconnect' => 'ibase_pconnect',
    'ibase_close' => 'ibase_close',
    'ibase_drop_db' => 'ibase_drop_db',
    'ibase_query' => 'ibase_query',
    'ibase_fetch_row' => 'ibase_fetch_row',
    'ibase_fetch_assoc' => 'ibase_fetch_assoc',
    'ibase_fetch_object' => 'ibase_fetch_object',
    'ibase_free_result' => 'ibase_free_result',
    'ibase_name_result' => 'ibase_name_result',
    'ibase_prepare' => 'ibase_prepare',
    'ibase_execute' => 'ibase_execute',
    'ibase_free_query' => 'ibase_free_query',
    'ibase_gen_id' => 'ibase_gen_id',
    'ibase_num_fields' => 'ibase_num_fields',
    'ibase_num_params' => 'ibase_num_params',
    'ibase_affected_rows' => 'ibase_affected_rows',
    'ibase_field_info' => 'ibase_field_info',
    'ibase_param_info' => 'ibase_param_info',
    'ibase_trans' => 'ibase_trans',
    'ibase_commit' => 'ibase_commit',
    'ibase_rollback' => 'ibase_rollback',
    'ibase_commit_ret' => 'ibase_commit_ret',
    'ibase_rollback_ret' => 'ibase_rollback_ret',
    'ibase_blob_info' => 'ibase_blob_info',
    'ibase_blob_create' => 'ibase_blob_create',
    'ibase_blob_add' => 'ibase_blob_add',
    'ibase_blob_cancel' => 'ibase_blob_cancel',
    'ibase_blob_close' => 'ibase_blob_close',
    'ibase_blob_open' => 'ibase_blob_open',
    'ibase_blob_get' => 'ibase_blob_get',
    'ibase_blob_echo' => 'ibase_blob_echo',
    'ibase_blob_import' => 'ibase_blob_import',
    'ibase_errmsg' => 'ibase_errmsg',
    'ibase_errcode' => 'ibase_errcode',
    'ibase_add_user' => 'ibase_add_user',
    'ibase_modify_user' => 'ibase_modify_user',
    'ibase_delete_user' => 'ibase_delete_user',
    'ibase_service_attach' => 'ibase_service_attach',
    'ibase_service_detach' => 'ibase_service_detach',
    'ibase_backup' => 'ibase_backup',
    'ibase_restore' => 'ibase_restore',
    'ibase_maintain_db' => 'ibase_maintain_db',
    'ibase_db_info' => 'ibase_db_info',
    'ibase_server_info' => 'ibase_server_info',
    'ibase_wait_event' => 'ibase_wait_event',
    'ibase_set_event_handler' => 'ibase_set_event_handler',
    'ibase_free_event_handler' => 'ibase_free_event_handler',
    'fbird_connect' => 'fbird_connect',
    'fbird_pconnect' => 'fbird_pconnect',
    'fbird_close' => 'fbird_close',
    'fbird_drop_db' => 'fbird_drop_db',
    'fbird_query' => 'fbird_query',
    'fbird_fetch_row' => 'fbird_fetch_row',
    'fbird_fetch_assoc' => 'fbird_fetch_assoc',
    'fbird_fetch_object' => 'fbird_fetch_object',
    'fbird_free_result' => 'fbird_free_result',
    'fbird_name_result' => 'fbird_name_result',
    'fbird_prepare' => 'fbird_prepare',
    'fbird_execute' => 'fbird_execute',
    'fbird_free_query' => 'fbird_free_query',
    'fbird_gen_id' => 'fbird_gen_id',
    'fbird_num_fields' => 'fbird_num_fields',
    'fbird_num_params' => 'fbird_num_params',
    'fbird_affected_rows' => 'fbird_affected_rows',
    'fbird_field_info' => 'fbird_field_info',
    'fbird_param_info' => 'fbird_param_info',
    'fbird_trans' => 'fbird_trans',
    'fbird_commit' => 'fbird_commit',
    'fbird_rollback' => 'fbird_rollback',
    'fbird_commit_ret' => 'fbird_commit_ret',
    'fbird_rollback_ret' => 'fbird_rollback_ret',
    'fbird_blob_info' => 'fbird_blob_info',
    'fbird_blob_create' => 'fbird_blob_create',
    'fbird_blob_add' => 'fbird_blob_add',
    'fbird_blob_cancel' => 'fbird_blob_cancel',
    'fbird_blob_close' => 'fbird_blob_close',
    'fbird_blob_open' => 'fbird_blob_open',
    'fbird_blob_get' => 'fbird_blob_get',
    'fbird_blob_echo' => 'fbird_blob_echo',
    'fbird_blob_import' => 'fbird_blob_import',
    'fbird_errmsg' => 'fbird_errmsg',
    'fbird_errcode' => 'fbird_errcode',
    'fbird_add_user' => 'fbird_add_user',
    'fbird_modify_user' => 'fbird_modify_user',
    'fbird_delete_user' => 'fbird_delete_user',
    'fbird_service_attach' => 'fbird_service_attach',
    'fbird_service_detach' => 'fbird_service_detach',
    'fbird_backup' => 'fbird_backup',
    'fbird_restore' => 'fbird_restore',
    'fbird_maintain_db' => 'fbird_maintain_db',
    'fbird_db_info' => 'fbird_db_info',
    'fbird_server_info' => 'fbird_server_info',
    'fbird_wait_event' => 'fbird_wait_event',
    'fbird_set_event_handler' => 'fbird_set_event_handler',
    'fbird_free_event_handler' => 'fbird_free_event_handler',
  ),
  'constants' => 
  array (
    'IBASE_DEFAULT' => 0,
    'IBASE_CREATE' => 0,
    'IBASE_TEXT' => 1,
    'IBASE_FETCH_BLOBS' => 1,
    'IBASE_FETCH_ARRAYS' => 2,
    'IBASE_UNIXTIME' => 4,
    'IBASE_WRITE' => 1,
    'IBASE_READ' => 2,
    'IBASE_COMMITTED' => 8,
    'IBASE_CONSISTENCY' => 16,
    'IBASE_CONCURRENCY' => 4,
    'IBASE_REC_VERSION' => 64,
    'IBASE_REC_NO_VERSION' => 32,
    'IBASE_NOWAIT' => 256,
    'IBASE_WAIT' => 128,
    'IBASE_BKP_IGNORE_CHECKSUMS' => 1,
    'IBASE_BKP_IGNORE_LIMBO' => 2,
    'IBASE_BKP_METADATA_ONLY' => 4,
    'IBASE_BKP_NO_GARBAGE_COLLECT' => 8,
    'IBASE_BKP_OLD_DESCRIPTIONS' => 16,
    'IBASE_BKP_NON_TRANSPORTABLE' => 32,
    'IBASE_BKP_CONVERT' => 64,
    'IBASE_RES_DEACTIVATE_IDX' => 256,
    'IBASE_RES_NO_SHADOW' => 512,
    'IBASE_RES_NO_VALIDITY' => 1024,
    'IBASE_RES_ONE_AT_A_TIME' => 2048,
    'IBASE_RES_REPLACE' => 4096,
    'IBASE_RES_CREATE' => 8192,
    'IBASE_RES_USE_ALL_SPACE' => 16384,
    'IBASE_PRP_PAGE_BUFFERS' => 5,
    'IBASE_PRP_SWEEP_INTERVAL' => 6,
    'IBASE_PRP_SHUTDOWN_DB' => 7,
    'IBASE_PRP_DENY_NEW_TRANSACTIONS' => 10,
    'IBASE_PRP_DENY_NEW_ATTACHMENTS' => 9,
    'IBASE_PRP_RESERVE_SPACE' => 11,
    'IBASE_PRP_RES_USE_FULL' => 35,
    'IBASE_PRP_RES' => 36,
    'IBASE_PRP_WRITE_MODE' => 12,
    'IBASE_PRP_WM_ASYNC' => 37,
    'IBASE_PRP_WM_SYNC' => 38,
    'IBASE_PRP_ACCESS_MODE' => 13,
    'IBASE_PRP_AM_READONLY' => 39,
    'IBASE_PRP_AM_READWRITE' => 40,
    'IBASE_PRP_SET_SQL_DIALECT' => 14,
    'IBASE_PRP_ACTIVATE' => 256,
    'IBASE_PRP_DB_ONLINE' => 512,
    'IBASE_RPR_CHECK_DB' => 16,
    'IBASE_RPR_IGNORE_CHECKSUM' => 32,
    'IBASE_RPR_KILL_SHADOWS' => 64,
    'IBASE_RPR_MEND_DB' => 4,
    'IBASE_RPR_VALIDATE_DB' => 1,
    'IBASE_RPR_FULL' => 128,
    'IBASE_RPR_SWEEP_DB' => 2,
    'IBASE_STS_DATA_PAGES' => 1,
    'IBASE_STS_DB_LOG' => 2,
    'IBASE_STS_HDR_PAGES' => 4,
    'IBASE_STS_IDX_PAGES' => 8,
    'IBASE_STS_SYS_RELATIONS' => 16,
    'IBASE_SVC_SERVER_VERSION' => 55,
    'IBASE_SVC_IMPLEMENTATION' => 56,
    'IBASE_SVC_GET_ENV' => 59,
    'IBASE_SVC_GET_ENV_LOCK' => 60,
    'IBASE_SVC_GET_ENV_MSG' => 61,
    'IBASE_SVC_USER_DBPATH' => 58,
    'IBASE_SVC_SVR_DB_INFO' => 50,
    'IBASE_SVC_GET_USERS' => 68,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'ibase.allow_persistent' => '1',
    'ibase.dateformat' => '%Y-%m-%d',
    'ibase.default_charset' => NULL,
    'ibase.default_db' => NULL,
    'ibase.default_password' => NULL,
    'ibase.default_user' => NULL,
    'ibase.max_links' => '-1',
    'ibase.max_persistent' => '-1',
    'ibase.timeformat' => '%H:%M:%S',
    'ibase.timestampformat' => '%Y-%m-%d %H:%M:%S',
  ),
);
