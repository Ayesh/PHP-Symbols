<?php

return array (
  'type' => 'extension',
  'name' => 'curl',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'curl',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'curl',
    )),
    'removed' => NULL,
    'version' => '8.3.16',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'curl extension (php.net)',
        'url' => 'https://www.php.net/manual/book.curl.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'CurlHandle',
    1 => 'CurlMultiHandle',
    2 => 'CurlShareHandle',
    3 => 'CURLFile',
    4 => 'CURLStringFile',
  ),
  'functions' => 
  array (
    'curl_close' => 'curl_close',
    'curl_copy_handle' => 'curl_copy_handle',
    'curl_errno' => 'curl_errno',
    'curl_error' => 'curl_error',
    'curl_escape' => 'curl_escape',
    'curl_unescape' => 'curl_unescape',
    'curl_multi_setopt' => 'curl_multi_setopt',
    'curl_exec' => 'curl_exec',
    'curl_file_create' => 'curl_file_create',
    'curl_getinfo' => 'curl_getinfo',
    'curl_init' => 'curl_init',
    'curl_upkeep' => 'curl_upkeep',
    'curl_multi_add_handle' => 'curl_multi_add_handle',
    'curl_multi_close' => 'curl_multi_close',
    'curl_multi_errno' => 'curl_multi_errno',
    'curl_multi_exec' => 'curl_multi_exec',
    'curl_multi_getcontent' => 'curl_multi_getcontent',
    'curl_multi_info_read' => 'curl_multi_info_read',
    'curl_multi_init' => 'curl_multi_init',
    'curl_multi_remove_handle' => 'curl_multi_remove_handle',
    'curl_multi_select' => 'curl_multi_select',
    'curl_multi_strerror' => 'curl_multi_strerror',
    'curl_pause' => 'curl_pause',
    'curl_reset' => 'curl_reset',
    'curl_setopt_array' => 'curl_setopt_array',
    'curl_setopt' => 'curl_setopt',
    'curl_share_close' => 'curl_share_close',
    'curl_share_errno' => 'curl_share_errno',
    'curl_share_init' => 'curl_share_init',
    'curl_share_setopt' => 'curl_share_setopt',
    'curl_share_strerror' => 'curl_share_strerror',
    'curl_strerror' => 'curl_strerror',
    'curl_version' => 'curl_version',
  ),
  'constants' => 
  array (
    'CURLOPT_AUTOREFERER' => 58,
    'CURLOPT_BINARYTRANSFER' => 19914,
    'CURLOPT_BUFFERSIZE' => 98,
    'CURLOPT_CAINFO' => 10065,
    'CURLOPT_CAPATH' => 10097,
    'CURLOPT_CONNECTTIMEOUT' => 78,
    'CURLOPT_COOKIE' => 10022,
    'CURLOPT_COOKIEFILE' => 10031,
    'CURLOPT_COOKIEJAR' => 10082,
    'CURLOPT_COOKIESESSION' => 96,
    'CURLOPT_CRLF' => 27,
    'CURLOPT_CUSTOMREQUEST' => 10036,
    'CURLOPT_DNS_CACHE_TIMEOUT' => 92,
    'CURLOPT_DNS_USE_GLOBAL_CACHE' => 91,
    'CURLOPT_EGDSOCKET' => 10077,
    'CURLOPT_ENCODING' => 10102,
    'CURLOPT_FAILONERROR' => 45,
    'CURLOPT_FILE' => 10001,
    'CURLOPT_FILETIME' => 69,
    'CURLOPT_FOLLOWLOCATION' => 52,
    'CURLOPT_FORBID_REUSE' => 75,
    'CURLOPT_FRESH_CONNECT' => 74,
    'CURLOPT_FTPAPPEND' => 50,
    'CURLOPT_FTPLISTONLY' => 48,
    'CURLOPT_FTPPORT' => 10017,
    'CURLOPT_FTP_USE_EPRT' => 106,
    'CURLOPT_FTP_USE_EPSV' => 85,
    'CURLOPT_HEADER' => 42,
    'CURLOPT_HEADERFUNCTION' => 20079,
    'CURLOPT_HTTP200ALIASES' => 10104,
    'CURLOPT_HTTPGET' => 80,
    'CURLOPT_HTTPHEADER' => 10023,
    'CURLOPT_HTTPPROXYTUNNEL' => 61,
    'CURLOPT_HTTP_VERSION' => 84,
    'CURLOPT_INFILE' => 10009,
    'CURLOPT_INFILESIZE' => 14,
    'CURLOPT_INTERFACE' => 10062,
    'CURLOPT_KRB4LEVEL' => 10063,
    'CURLOPT_LOW_SPEED_LIMIT' => 19,
    'CURLOPT_LOW_SPEED_TIME' => 20,
    'CURLOPT_MAXCONNECTS' => 71,
    'CURLOPT_MAXREDIRS' => 68,
    'CURLOPT_NETRC' => 51,
    'CURLOPT_NOBODY' => 44,
    'CURLOPT_NOPROGRESS' => 43,
    'CURLOPT_NOSIGNAL' => 99,
    'CURLOPT_PORT' => 3,
    'CURLOPT_POST' => 47,
    'CURLOPT_POSTFIELDS' => 10015,
    'CURLOPT_POSTQUOTE' => 10039,
    'CURLOPT_PREQUOTE' => 10093,
    'CURLOPT_PRIVATE' => 10103,
    'CURLOPT_PROGRESSFUNCTION' => 20056,
    'CURLOPT_PROXY' => 10004,
    'CURLOPT_PROXYPORT' => 59,
    'CURLOPT_PROXYTYPE' => 101,
    'CURLOPT_PROXYUSERPWD' => 10006,
    'CURLOPT_PUT' => 54,
    'CURLOPT_QUOTE' => 10028,
    'CURLOPT_RANDOM_FILE' => 10076,
    'CURLOPT_RANGE' => 10007,
    'CURLOPT_READDATA' => 10009,
    'CURLOPT_READFUNCTION' => 20012,
    'CURLOPT_REFERER' => 10016,
    'CURLOPT_RESUME_FROM' => 21,
    'CURLOPT_RETURNTRANSFER' => 19913,
    'CURLOPT_SHARE' => 10100,
    'CURLOPT_SSLCERT' => 10025,
    'CURLOPT_SSLCERTPASSWD' => 10026,
    'CURLOPT_SSLCERTTYPE' => 10086,
    'CURLOPT_SSLENGINE' => 10089,
    'CURLOPT_SSLENGINE_DEFAULT' => 90,
    'CURLOPT_SSLKEY' => 10087,
    'CURLOPT_SSLKEYPASSWD' => 10026,
    'CURLOPT_SSLKEYTYPE' => 10088,
    'CURLOPT_SSLVERSION' => 32,
    'CURLOPT_SSL_CIPHER_LIST' => 10083,
    'CURLOPT_SSL_VERIFYHOST' => 81,
    'CURLOPT_SSL_VERIFYPEER' => 64,
    'CURLOPT_STDERR' => 10037,
    'CURLOPT_TELNETOPTIONS' => 10070,
    'CURLOPT_TIMECONDITION' => 33,
    'CURLOPT_TIMEOUT' => 13,
    'CURLOPT_TIMEVALUE' => 34,
    'CURLOPT_TRANSFERTEXT' => 53,
    'CURLOPT_UNRESTRICTED_AUTH' => 105,
    'CURLOPT_UPLOAD' => 46,
    'CURLOPT_URL' => 10002,
    'CURLOPT_USERAGENT' => 10018,
    'CURLOPT_USERPWD' => 10005,
    'CURLOPT_VERBOSE' => 41,
    'CURLOPT_WRITEFUNCTION' => 20011,
    'CURLOPT_WRITEHEADER' => 10029,
    'CURLOPT_XFERINFOFUNCTION' => 20219,
    'CURLE_ABORTED_BY_CALLBACK' => 42,
    'CURLE_BAD_CALLING_ORDER' => 44,
    'CURLE_BAD_CONTENT_ENCODING' => 61,
    'CURLE_BAD_DOWNLOAD_RESUME' => 36,
    'CURLE_BAD_FUNCTION_ARGUMENT' => 43,
    'CURLE_BAD_PASSWORD_ENTERED' => 46,
    'CURLE_COULDNT_CONNECT' => 7,
    'CURLE_COULDNT_RESOLVE_HOST' => 6,
    'CURLE_COULDNT_RESOLVE_PROXY' => 5,
    'CURLE_FAILED_INIT' => 2,
    'CURLE_FILE_COULDNT_READ_FILE' => 37,
    'CURLE_FTP_ACCESS_DENIED' => 9,
    'CURLE_FTP_BAD_DOWNLOAD_RESUME' => 36,
    'CURLE_FTP_CANT_GET_HOST' => 15,
    'CURLE_FTP_CANT_RECONNECT' => 16,
    'CURLE_FTP_COULDNT_GET_SIZE' => 32,
    'CURLE_FTP_COULDNT_RETR_FILE' => 19,
    'CURLE_FTP_COULDNT_SET_ASCII' => 29,
    'CURLE_FTP_COULDNT_SET_BINARY' => 17,
    'CURLE_FTP_COULDNT_STOR_FILE' => 25,
    'CURLE_FTP_COULDNT_USE_REST' => 31,
    'CURLE_FTP_PARTIAL_FILE' => 18,
    'CURLE_FTP_PORT_FAILED' => 30,
    'CURLE_FTP_QUOTE_ERROR' => 21,
    'CURLE_FTP_USER_PASSWORD_INCORRECT' => 10,
    'CURLE_FTP_WEIRD_227_FORMAT' => 14,
    'CURLE_FTP_WEIRD_PASS_REPLY' => 11,
    'CURLE_FTP_WEIRD_PASV_REPLY' => 13,
    'CURLE_FTP_WEIRD_SERVER_REPLY' => 8,
    'CURLE_FTP_WEIRD_USER_REPLY' => 12,
    'CURLE_FTP_WRITE_ERROR' => 20,
    'CURLE_FUNCTION_NOT_FOUND' => 41,
    'CURLE_GOT_NOTHING' => 52,
    'CURLE_HTTP_NOT_FOUND' => 22,
    'CURLE_HTTP_PORT_FAILED' => 45,
    'CURLE_HTTP_POST_ERROR' => 34,
    'CURLE_HTTP_RANGE_ERROR' => 33,
    'CURLE_HTTP_RETURNED_ERROR' => 22,
    'CURLE_LDAP_CANNOT_BIND' => 38,
    'CURLE_LDAP_SEARCH_FAILED' => 39,
    'CURLE_LIBRARY_NOT_FOUND' => 40,
    'CURLE_MALFORMAT_USER' => 24,
    'CURLE_OBSOLETE' => 50,
    'CURLE_OK' => 0,
    'CURLE_OPERATION_TIMEDOUT' => 28,
    'CURLE_OPERATION_TIMEOUTED' => 28,
    'CURLE_OUT_OF_MEMORY' => 27,
    'CURLE_PARTIAL_FILE' => 18,
    'CURLE_READ_ERROR' => 26,
    'CURLE_RECV_ERROR' => 56,
    'CURLE_SEND_ERROR' => 55,
    'CURLE_SHARE_IN_USE' => 57,
    'CURLE_SSL_CACERT' => 60,
    'CURLE_SSL_CERTPROBLEM' => 58,
    'CURLE_SSL_CIPHER' => 59,
    'CURLE_SSL_CONNECT_ERROR' => 35,
    'CURLE_SSL_ENGINE_NOTFOUND' => 53,
    'CURLE_SSL_ENGINE_SETFAILED' => 54,
    'CURLE_SSL_PEER_CERTIFICATE' => 60,
    'CURLE_SSL_PINNEDPUBKEYNOTMATCH' => 90,
    'CURLE_TELNET_OPTION_SYNTAX' => 49,
    'CURLE_TOO_MANY_REDIRECTS' => 47,
    'CURLE_UNKNOWN_TELNET_OPTION' => 48,
    'CURLE_UNSUPPORTED_PROTOCOL' => 1,
    'CURLE_URL_MALFORMAT' => 3,
    'CURLE_URL_MALFORMAT_USER' => 4,
    'CURLE_WRITE_ERROR' => 23,
    'CURLINFO_CONNECT_TIME' => 3145733,
    'CURLINFO_CONTENT_LENGTH_DOWNLOAD' => 3145743,
    'CURLINFO_CONTENT_LENGTH_UPLOAD' => 3145744,
    'CURLINFO_CONTENT_TYPE' => 1048594,
    'CURLINFO_EFFECTIVE_URL' => 1048577,
    'CURLINFO_FILETIME' => 2097166,
    'CURLINFO_HEADER_OUT' => 2,
    'CURLINFO_HEADER_SIZE' => 2097163,
    'CURLINFO_HTTP_CODE' => 2097154,
    'CURLINFO_LASTONE' => 64,
    'CURLINFO_NAMELOOKUP_TIME' => 3145732,
    'CURLINFO_PRETRANSFER_TIME' => 3145734,
    'CURLINFO_PRIVATE' => 1048597,
    'CURLINFO_REDIRECT_COUNT' => 2097172,
    'CURLINFO_REDIRECT_TIME' => 3145747,
    'CURLINFO_REQUEST_SIZE' => 2097164,
    'CURLINFO_SIZE_DOWNLOAD' => 3145736,
    'CURLINFO_SIZE_UPLOAD' => 3145735,
    'CURLINFO_SPEED_DOWNLOAD' => 3145737,
    'CURLINFO_SPEED_UPLOAD' => 3145738,
    'CURLINFO_SSL_VERIFYRESULT' => 2097165,
    'CURLINFO_STARTTRANSFER_TIME' => 3145745,
    'CURLINFO_TOTAL_TIME' => 3145731,
    'CURLINFO_EFFECTIVE_METHOD' => 1048634,
    'CURLINFO_CAPATH' => 1048638,
    'CURLINFO_CAINFO' => 1048637,
    'CURLMSG_DONE' => 1,
    'CURLVERSION_NOW' => 10,
    'CURLM_BAD_EASY_HANDLE' => 2,
    'CURLM_BAD_HANDLE' => 1,
    'CURLM_CALL_MULTI_PERFORM' => -1,
    'CURLM_INTERNAL_ERROR' => 4,
    'CURLM_OK' => 0,
    'CURLM_OUT_OF_MEMORY' => 3,
    'CURLM_ADDED_ALREADY' => 7,
    'CURLPROXY_HTTP' => 0,
    'CURLPROXY_SOCKS4' => 4,
    'CURLPROXY_SOCKS5' => 5,
    'CURLSHOPT_NONE' => 0,
    'CURLSHOPT_SHARE' => 1,
    'CURLSHOPT_UNSHARE' => 2,
    'CURL_HTTP_VERSION_1_0' => 1,
    'CURL_HTTP_VERSION_1_1' => 2,
    'CURL_HTTP_VERSION_NONE' => 0,
    'CURL_LOCK_DATA_COOKIE' => 2,
    'CURL_LOCK_DATA_DNS' => 3,
    'CURL_LOCK_DATA_SSL_SESSION' => 4,
    'CURL_NETRC_IGNORED' => 0,
    'CURL_NETRC_OPTIONAL' => 1,
    'CURL_NETRC_REQUIRED' => 2,
    'CURL_SSLVERSION_DEFAULT' => 0,
    'CURL_SSLVERSION_SSLv2' => 2,
    'CURL_SSLVERSION_SSLv3' => 3,
    'CURL_SSLVERSION_TLSv1' => 1,
    'CURL_TIMECOND_IFMODSINCE' => 1,
    'CURL_TIMECOND_IFUNMODSINCE' => 2,
    'CURL_TIMECOND_LASTMOD' => 3,
    'CURL_TIMECOND_NONE' => 0,
    'CURL_VERSION_ASYNCHDNS' => 128,
    'CURL_VERSION_CONV' => 4096,
    'CURL_VERSION_DEBUG' => 64,
    'CURL_VERSION_GSSNEGOTIATE' => 32,
    'CURL_VERSION_IDN' => 1024,
    'CURL_VERSION_IPV6' => 1,
    'CURL_VERSION_KERBEROS4' => 2,
    'CURL_VERSION_LARGEFILE' => 512,
    'CURL_VERSION_LIBZ' => 8,
    'CURL_VERSION_NTLM' => 16,
    'CURL_VERSION_SPNEGO' => 256,
    'CURL_VERSION_SSL' => 4,
    'CURL_VERSION_SSPI' => 2048,
    'CURLOPT_HTTPAUTH' => 107,
    'CURLAUTH_ANY' => -17,
    'CURLAUTH_ANYSAFE' => -18,
    'CURLAUTH_BASIC' => 1,
    'CURLAUTH_DIGEST' => 2,
    'CURLAUTH_GSSNEGOTIATE' => 4,
    'CURLAUTH_NONE' => 0,
    'CURLAUTH_NTLM' => 8,
    'CURLINFO_HTTP_CONNECTCODE' => 2097174,
    'CURLOPT_FTP_CREATE_MISSING_DIRS' => 110,
    'CURLOPT_PROXYAUTH' => 111,
    'CURLE_FILESIZE_EXCEEDED' => 63,
    'CURLE_LDAP_INVALID_URL' => 62,
    'CURLINFO_HTTPAUTH_AVAIL' => 2097175,
    'CURLINFO_RESPONSE_CODE' => 2097154,
    'CURLINFO_PROXYAUTH_AVAIL' => 2097176,
    'CURLOPT_FTP_RESPONSE_TIMEOUT' => 112,
    'CURLOPT_IPRESOLVE' => 113,
    'CURLOPT_MAXFILESIZE' => 114,
    'CURL_IPRESOLVE_V4' => 1,
    'CURL_IPRESOLVE_V6' => 2,
    'CURL_IPRESOLVE_WHATEVER' => 0,
    'CURLE_FTP_SSL_FAILED' => 64,
    'CURLFTPSSL_ALL' => 3,
    'CURLFTPSSL_CONTROL' => 2,
    'CURLFTPSSL_NONE' => 0,
    'CURLFTPSSL_TRY' => 1,
    'CURLOPT_FTP_SSL' => 119,
    'CURLOPT_NETRC_FILE' => 10118,
    'CURLOPT_MAXFILESIZE_LARGE' => 30117,
    'CURLOPT_TCP_NODELAY' => 121,
    'CURLFTPAUTH_DEFAULT' => 0,
    'CURLFTPAUTH_SSL' => 1,
    'CURLFTPAUTH_TLS' => 2,
    'CURLOPT_FTPSSLAUTH' => 129,
    'CURLOPT_FTP_ACCOUNT' => 10134,
    'CURLINFO_OS_ERRNO' => 2097177,
    'CURLINFO_NUM_CONNECTS' => 2097178,
    'CURLINFO_SSL_ENGINES' => 4194331,
    'CURLINFO_COOKIELIST' => 4194332,
    'CURLOPT_COOKIELIST' => 10135,
    'CURLOPT_IGNORE_CONTENT_LENGTH' => 136,
    'CURLOPT_FTP_SKIP_PASV_IP' => 137,
    'CURLOPT_FTP_FILEMETHOD' => 138,
    'CURLOPT_CONNECT_ONLY' => 141,
    'CURLOPT_LOCALPORT' => 139,
    'CURLOPT_LOCALPORTRANGE' => 140,
    'CURLFTPMETHOD_DEFAULT' => 0,
    'CURLFTPMETHOD_MULTICWD' => 1,
    'CURLFTPMETHOD_NOCWD' => 2,
    'CURLFTPMETHOD_SINGLECWD' => 3,
    'CURLINFO_FTP_ENTRY_PATH' => 1048606,
    'CURLOPT_FTP_ALTERNATIVE_TO_USER' => 10147,
    'CURLOPT_MAX_RECV_SPEED_LARGE' => 30146,
    'CURLOPT_MAX_SEND_SPEED_LARGE' => 30145,
    'CURLE_SSL_CACERT_BADFILE' => 77,
    'CURLOPT_SSL_SESSIONID_CACHE' => 150,
    'CURLMOPT_PIPELINING' => 3,
    'CURLE_SSH' => 79,
    'CURLOPT_FTP_SSL_CCC' => 154,
    'CURLOPT_SSH_AUTH_TYPES' => 151,
    'CURLOPT_SSH_PRIVATE_KEYFILE' => 10153,
    'CURLOPT_SSH_PUBLIC_KEYFILE' => 10152,
    'CURLFTPSSL_CCC_ACTIVE' => 2,
    'CURLFTPSSL_CCC_NONE' => 0,
    'CURLFTPSSL_CCC_PASSIVE' => 1,
    'CURLOPT_CONNECTTIMEOUT_MS' => 156,
    'CURLOPT_HTTP_CONTENT_DECODING' => 158,
    'CURLOPT_HTTP_TRANSFER_DECODING' => 157,
    'CURLOPT_TIMEOUT_MS' => 155,
    'CURLMOPT_MAXCONNECTS' => 6,
    'CURLOPT_KRBLEVEL' => 10063,
    'CURLOPT_NEW_DIRECTORY_PERMS' => 160,
    'CURLOPT_NEW_FILE_PERMS' => 159,
    'CURLOPT_APPEND' => 50,
    'CURLOPT_DIRLISTONLY' => 48,
    'CURLOPT_USE_SSL' => 119,
    'CURLUSESSL_ALL' => 3,
    'CURLUSESSL_CONTROL' => 2,
    'CURLUSESSL_NONE' => 0,
    'CURLUSESSL_TRY' => 1,
    'CURLOPT_SSH_HOST_PUBLIC_KEY_MD5' => 10162,
    'CURLOPT_PROXY_TRANSFER_MODE' => 166,
    'CURLPAUSE_ALL' => 5,
    'CURLPAUSE_CONT' => 0,
    'CURLPAUSE_RECV' => 1,
    'CURLPAUSE_RECV_CONT' => 0,
    'CURLPAUSE_SEND' => 4,
    'CURLPAUSE_SEND_CONT' => 0,
    'CURL_READFUNC_PAUSE' => 268435457,
    'CURL_WRITEFUNC_PAUSE' => 268435457,
    'CURLPROXY_SOCKS4A' => 6,
    'CURLPROXY_SOCKS5_HOSTNAME' => 7,
    'CURLINFO_REDIRECT_URL' => 1048607,
    'CURLINFO_APPCONNECT_TIME' => 3145761,
    'CURLINFO_PRIMARY_IP' => 1048608,
    'CURLOPT_ADDRESS_SCOPE' => 171,
    'CURLOPT_CRLFILE' => 10169,
    'CURLOPT_ISSUERCERT' => 10170,
    'CURLOPT_KEYPASSWD' => 10026,
    'CURLSSH_AUTH_ANY' => -1,
    'CURLSSH_AUTH_DEFAULT' => -1,
    'CURLSSH_AUTH_HOST' => 4,
    'CURLSSH_AUTH_KEYBOARD' => 8,
    'CURLSSH_AUTH_NONE' => 0,
    'CURLSSH_AUTH_PASSWORD' => 2,
    'CURLSSH_AUTH_PUBLICKEY' => 1,
    'CURLINFO_CERTINFO' => 4194338,
    'CURLOPT_CERTINFO' => 172,
    'CURLOPT_PASSWORD' => 10174,
    'CURLOPT_POSTREDIR' => 161,
    'CURLOPT_PROXYPASSWORD' => 10176,
    'CURLOPT_PROXYUSERNAME' => 10175,
    'CURLOPT_USERNAME' => 10173,
    'CURL_REDIR_POST_301' => 1,
    'CURL_REDIR_POST_302' => 2,
    'CURL_REDIR_POST_ALL' => 7,
    'CURLAUTH_DIGEST_IE' => 16,
    'CURLINFO_CONDITION_UNMET' => 2097187,
    'CURLOPT_NOPROXY' => 10177,
    'CURLOPT_PROTOCOLS' => 181,
    'CURLOPT_REDIR_PROTOCOLS' => 182,
    'CURLOPT_SOCKS5_GSSAPI_NEC' => 180,
    'CURLOPT_SOCKS5_GSSAPI_SERVICE' => 10179,
    'CURLOPT_TFTP_BLKSIZE' => 178,
    'CURLPROTO_ALL' => -1,
    'CURLPROTO_DICT' => 512,
    'CURLPROTO_FILE' => 1024,
    'CURLPROTO_FTP' => 4,
    'CURLPROTO_FTPS' => 8,
    'CURLPROTO_HTTP' => 1,
    'CURLPROTO_HTTPS' => 2,
    'CURLPROTO_LDAP' => 128,
    'CURLPROTO_LDAPS' => 256,
    'CURLPROTO_SCP' => 16,
    'CURLPROTO_SFTP' => 32,
    'CURLPROTO_TELNET' => 64,
    'CURLPROTO_TFTP' => 2048,
    'CURLPROXY_HTTP_1_0' => 1,
    'CURLFTP_CREATE_DIR' => 1,
    'CURLFTP_CREATE_DIR_NONE' => 0,
    'CURLFTP_CREATE_DIR_RETRY' => 2,
    'CURL_VERSION_CURLDEBUG' => 8192,
    'CURLOPT_SSH_KNOWNHOSTS' => 10183,
    'CURLKHMATCH_OK' => 0,
    'CURLKHMATCH_MISMATCH' => 1,
    'CURLKHMATCH_MISSING' => 2,
    'CURLKHMATCH_LAST' => 3,
    'CURLINFO_RTSP_CLIENT_CSEQ' => 2097189,
    'CURLINFO_RTSP_CSEQ_RECV' => 2097191,
    'CURLINFO_RTSP_SERVER_CSEQ' => 2097190,
    'CURLINFO_RTSP_SESSION_ID' => 1048612,
    'CURLOPT_FTP_USE_PRET' => 188,
    'CURLOPT_MAIL_FROM' => 10186,
    'CURLOPT_MAIL_RCPT' => 10187,
    'CURLOPT_RTSP_CLIENT_CSEQ' => 193,
    'CURLOPT_RTSP_REQUEST' => 189,
    'CURLOPT_RTSP_SERVER_CSEQ' => 194,
    'CURLOPT_RTSP_SESSION_ID' => 10190,
    'CURLOPT_RTSP_STREAM_URI' => 10191,
    'CURLOPT_RTSP_TRANSPORT' => 10192,
    'CURLPROTO_IMAP' => 4096,
    'CURLPROTO_IMAPS' => 8192,
    'CURLPROTO_POP3' => 16384,
    'CURLPROTO_POP3S' => 32768,
    'CURLPROTO_RTSP' => 262144,
    'CURLPROTO_SMTP' => 65536,
    'CURLPROTO_SMTPS' => 131072,
    'CURL_RTSPREQ_ANNOUNCE' => 3,
    'CURL_RTSPREQ_DESCRIBE' => 2,
    'CURL_RTSPREQ_GET_PARAMETER' => 8,
    'CURL_RTSPREQ_OPTIONS' => 1,
    'CURL_RTSPREQ_PAUSE' => 6,
    'CURL_RTSPREQ_PLAY' => 5,
    'CURL_RTSPREQ_RECEIVE' => 11,
    'CURL_RTSPREQ_RECORD' => 10,
    'CURL_RTSPREQ_SET_PARAMETER' => 9,
    'CURL_RTSPREQ_SETUP' => 4,
    'CURL_RTSPREQ_TEARDOWN' => 7,
    'CURLINFO_LOCAL_IP' => 1048617,
    'CURLINFO_LOCAL_PORT' => 2097194,
    'CURLINFO_PRIMARY_PORT' => 2097192,
    'CURLOPT_FNMATCH_FUNCTION' => 20200,
    'CURLOPT_WILDCARDMATCH' => 197,
    'CURLPROTO_RTMP' => 524288,
    'CURLPROTO_RTMPE' => 2097152,
    'CURLPROTO_RTMPS' => 8388608,
    'CURLPROTO_RTMPT' => 1048576,
    'CURLPROTO_RTMPTE' => 4194304,
    'CURLPROTO_RTMPTS' => 16777216,
    'CURL_FNMATCHFUNC_FAIL' => 2,
    'CURL_FNMATCHFUNC_MATCH' => 0,
    'CURL_FNMATCHFUNC_NOMATCH' => 1,
    'CURLPROTO_GOPHER' => 33554432,
    'CURLAUTH_ONLY' => 2147483648,
    'CURLOPT_RESOLVE' => 10203,
    'CURLOPT_TLSAUTH_PASSWORD' => 10205,
    'CURLOPT_TLSAUTH_TYPE' => 10206,
    'CURLOPT_TLSAUTH_USERNAME' => 10204,
    'CURL_TLSAUTH_SRP' => 1,
    'CURL_VERSION_TLSAUTH_SRP' => 16384,
    'CURLOPT_ACCEPT_ENCODING' => 10102,
    'CURLOPT_TRANSFER_ENCODING' => 207,
    'CURLAUTH_NTLM_WB' => 32,
    'CURLGSSAPI_DELEGATION_FLAG' => 2,
    'CURLGSSAPI_DELEGATION_POLICY_FLAG' => 1,
    'CURLOPT_GSSAPI_DELEGATION' => 210,
    'CURL_VERSION_NTLM_WB' => 32768,
    'CURLOPT_ACCEPTTIMEOUT_MS' => 212,
    'CURLOPT_DNS_SERVERS' => 10211,
    'CURLOPT_MAIL_AUTH' => 10217,
    'CURLOPT_SSL_OPTIONS' => 216,
    'CURLOPT_TCP_KEEPALIVE' => 213,
    'CURLOPT_TCP_KEEPIDLE' => 214,
    'CURLOPT_TCP_KEEPINTVL' => 215,
    'CURLSSLOPT_ALLOW_BEAST' => 1,
    'CURL_REDIR_POST_303' => 4,
    'CURLSSH_AUTH_AGENT' => 16,
    'CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE' => 30010,
    'CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE' => 30009,
    'CURLMOPT_MAX_HOST_CONNECTIONS' => 7,
    'CURLMOPT_MAX_PIPELINE_LENGTH' => 8,
    'CURLMOPT_MAX_TOTAL_CONNECTIONS' => 13,
    'CURLOPT_SASL_IR' => 218,
    'CURLOPT_DNS_INTERFACE' => 10221,
    'CURLOPT_DNS_LOCAL_IP4' => 10222,
    'CURLOPT_DNS_LOCAL_IP6' => 10223,
    'CURLOPT_XOAUTH2_BEARER' => 10220,
    'CURL_HTTP_VERSION_2_0' => 3,
    'CURL_VERSION_HTTP2' => 65536,
    'CURLOPT_LOGIN_OPTIONS' => 10224,
    'CURL_SSLVERSION_TLSv1_0' => 4,
    'CURL_SSLVERSION_TLSv1_1' => 5,
    'CURL_SSLVERSION_TLSv1_2' => 6,
    'CURLOPT_EXPECT_100_TIMEOUT_MS' => 227,
    'CURLOPT_SSL_ENABLE_ALPN' => 226,
    'CURLOPT_SSL_ENABLE_NPN' => 225,
    'CURLHEADER_SEPARATE' => 1,
    'CURLHEADER_UNIFIED' => 0,
    'CURLOPT_HEADEROPT' => 229,
    'CURLOPT_PROXYHEADER' => 10228,
    'CURLAUTH_NEGOTIATE' => 4,
    'CURL_VERSION_GSSAPI' => 131072,
    'CURLOPT_PINNEDPUBLICKEY' => 10230,
    'CURLOPT_UNIX_SOCKET_PATH' => 10231,
    'CURLPROTO_SMB' => 67108864,
    'CURLPROTO_SMBS' => 134217728,
    'CURL_VERSION_KERBEROS5' => 262144,
    'CURL_VERSION_UNIX_SOCKETS' => 524288,
    'CURLOPT_SSL_VERIFYSTATUS' => 232,
    'CURLOPT_PATH_AS_IS' => 234,
    'CURLOPT_SSL_FALSESTART' => 233,
    'CURL_HTTP_VERSION_2' => 3,
    'CURLOPT_PIPEWAIT' => 237,
    'CURLOPT_PROXY_SERVICE_NAME' => 10235,
    'CURLOPT_SERVICE_NAME' => 10236,
    'CURLPIPE_NOTHING' => 0,
    'CURLPIPE_HTTP1' => 1,
    'CURLPIPE_MULTIPLEX' => 2,
    'CURLSSLOPT_NO_REVOKE' => 2,
    'CURLOPT_DEFAULT_PROTOCOL' => 10238,
    'CURLOPT_STREAM_WEIGHT' => 239,
    'CURLMOPT_PUSHFUNCTION' => 20014,
    'CURL_PUSH_OK' => 0,
    'CURL_PUSH_DENY' => 1,
    'CURL_HTTP_VERSION_2TLS' => 4,
    'CURL_VERSION_PSL' => 1048576,
    'CURLOPT_TFTP_NO_OPTIONS' => 242,
    'CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE' => 5,
    'CURLOPT_CONNECT_TO' => 10243,
    'CURLOPT_TCP_FASTOPEN' => 244,
    'CURLINFO_HTTP_VERSION' => 2097198,
    'CURLE_WEIRD_SERVER_REPLY' => 8,
    'CURLOPT_KEEP_SENDING_ON_ERROR' => 245,
    'CURL_SSLVERSION_TLSv1_3' => 7,
    'CURL_VERSION_HTTPS_PROXY' => 2097152,
    'CURLINFO_PROTOCOL' => 2097200,
    'CURLINFO_PROXY_SSL_VERIFYRESULT' => 2097199,
    'CURLINFO_SCHEME' => 1048625,
    'CURLOPT_PRE_PROXY' => 10262,
    'CURLOPT_PROXY_CAINFO' => 10246,
    'CURLOPT_PROXY_CAPATH' => 10247,
    'CURLOPT_PROXY_CRLFILE' => 10260,
    'CURLOPT_PROXY_KEYPASSWD' => 10258,
    'CURLOPT_PROXY_PINNEDPUBLICKEY' => 10263,
    'CURLOPT_PROXY_SSL_CIPHER_LIST' => 10259,
    'CURLOPT_PROXY_SSL_OPTIONS' => 261,
    'CURLOPT_PROXY_SSL_VERIFYHOST' => 249,
    'CURLOPT_PROXY_SSL_VERIFYPEER' => 248,
    'CURLOPT_PROXY_SSLCERT' => 10254,
    'CURLOPT_PROXY_SSLCERTTYPE' => 10255,
    'CURLOPT_PROXY_SSLKEY' => 10256,
    'CURLOPT_PROXY_SSLKEYTYPE' => 10257,
    'CURLOPT_PROXY_SSLVERSION' => 250,
    'CURLOPT_PROXY_TLSAUTH_PASSWORD' => 10252,
    'CURLOPT_PROXY_TLSAUTH_TYPE' => 10253,
    'CURLOPT_PROXY_TLSAUTH_USERNAME' => 10251,
    'CURLPROXY_HTTPS' => 2,
    'CURL_MAX_READ_SIZE' => 10485760,
    'CURLOPT_ABSTRACT_UNIX_SOCKET' => 10264,
    'CURL_SSLVERSION_MAX_DEFAULT' => 65536,
    'CURL_SSLVERSION_MAX_NONE' => 0,
    'CURL_SSLVERSION_MAX_TLSv1_0' => 262144,
    'CURL_SSLVERSION_MAX_TLSv1_1' => 327680,
    'CURL_SSLVERSION_MAX_TLSv1_2' => 393216,
    'CURL_SSLVERSION_MAX_TLSv1_3' => 458752,
    'CURLOPT_SUPPRESS_CONNECT_HEADERS' => 265,
    'CURLAUTH_GSSAPI' => 4,
    'CURLINFO_CONTENT_LENGTH_DOWNLOAD_T' => 6291471,
    'CURLINFO_CONTENT_LENGTH_UPLOAD_T' => 6291472,
    'CURLINFO_SIZE_DOWNLOAD_T' => 6291464,
    'CURLINFO_SIZE_UPLOAD_T' => 6291463,
    'CURLINFO_SPEED_DOWNLOAD_T' => 6291465,
    'CURLINFO_SPEED_UPLOAD_T' => 6291466,
    'CURLOPT_REQUEST_TARGET' => 10266,
    'CURLOPT_SOCKS5_AUTH' => 267,
    'CURLOPT_SSH_COMPRESSION' => 268,
    'CURL_VERSION_MULTI_SSL' => 4194304,
    'CURL_VERSION_BROTLI' => 8388608,
    'CURL_LOCK_DATA_CONNECT' => 5,
    'CURLSSH_AUTH_GSSAPI' => 32,
    'CURLINFO_FILETIME_T' => 6291470,
    'CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS' => 271,
    'CURLOPT_TIMEVALUE_LARGE' => 30270,
    'CURLOPT_DNS_SHUFFLE_ADDRESSES' => 275,
    'CURLOPT_HAPROXYPROTOCOL' => 274,
    'CURL_LOCK_DATA_PSL' => 6,
    'CURLAUTH_BEARER' => 64,
    'CURLINFO_APPCONNECT_TIME_T' => 6291512,
    'CURLINFO_CONNECT_TIME_T' => 6291508,
    'CURLINFO_NAMELOOKUP_TIME_T' => 6291507,
    'CURLINFO_PRETRANSFER_TIME_T' => 6291509,
    'CURLINFO_REDIRECT_TIME_T' => 6291511,
    'CURLINFO_STARTTRANSFER_TIME_T' => 6291510,
    'CURLINFO_TOTAL_TIME_T' => 6291506,
    'CURLOPT_DISALLOW_USERNAME_IN_URL' => 278,
    'CURLOPT_PROXY_TLS13_CIPHERS' => 10277,
    'CURLOPT_TLS13_CIPHERS' => 10276,
    'CURLOPT_DOH_URL' => 10279,
    'CURLOPT_UPKEEP_INTERVAL_MS' => 281,
    'CURLOPT_UPLOAD_BUFFERSIZE' => 280,
    'CURLOPT_HTTP09_ALLOWED' => 285,
    'CURLALTSVC_H1' => 8,
    'CURLALTSVC_H2' => 16,
    'CURLALTSVC_H3' => 32,
    'CURLALTSVC_READONLYFILE' => 4,
    'CURLOPT_ALTSVC' => 10287,
    'CURLOPT_ALTSVC_CTRL' => 286,
    'CURL_VERSION_ALTSVC' => 16777216,
    'CURLOPT_MAXAGE_CONN' => 288,
    'CURLOPT_SASL_AUTHZID' => 10289,
    'CURL_VERSION_HTTP3' => 33554432,
    'CURLINFO_RETRY_AFTER' => 6291513,
    'CURLMOPT_MAX_CONCURRENT_STREAMS' => 16,
    'CURLSSLOPT_NO_PARTIALCHAIN' => 4,
    'CURLOPT_MAIL_RCPT_ALLLOWFAILS' => 290,
    'CURLSSLOPT_REVOKE_BEST_EFFORT' => 8,
    'CURLOPT_ISSUERCERT_BLOB' => 40295,
    'CURLOPT_PROXY_ISSUERCERT' => 10296,
    'CURLOPT_PROXY_ISSUERCERT_BLOB' => 40297,
    'CURLOPT_PROXY_SSLCERT_BLOB' => 40293,
    'CURLOPT_PROXY_SSLKEY_BLOB' => 40294,
    'CURLOPT_SSLCERT_BLOB' => 40291,
    'CURLOPT_SSLKEY_BLOB' => 40292,
    'CURLPROTO_MQTT' => 268435456,
    'CURLSSLOPT_NATIVE_CA' => 16,
    'CURL_VERSION_UNICODE' => 134217728,
    'CURL_VERSION_ZSTD' => 67108864,
    'CURLE_PROXY' => 97,
    'CURLINFO_PROXY_ERROR' => 2097211,
    'CURLOPT_SSL_EC_CURVES' => 10298,
    'CURLPX_BAD_ADDRESS_TYPE' => 1,
    'CURLPX_BAD_VERSION' => 2,
    'CURLPX_CLOSED' => 3,
    'CURLPX_GSSAPI' => 4,
    'CURLPX_GSSAPI_PERMSG' => 5,
    'CURLPX_GSSAPI_PROTECTION' => 6,
    'CURLPX_IDENTD' => 7,
    'CURLPX_IDENTD_DIFFER' => 8,
    'CURLPX_LONG_HOSTNAME' => 9,
    'CURLPX_LONG_PASSWD' => 10,
    'CURLPX_LONG_USER' => 11,
    'CURLPX_NO_AUTH' => 12,
    'CURLPX_OK' => 0,
    'CURLPX_RECV_ADDRESS' => 13,
    'CURLPX_RECV_AUTH' => 14,
    'CURLPX_RECV_CONNECT' => 15,
    'CURLPX_RECV_REQACK' => 16,
    'CURLPX_REPLY_ADDRESS_TYPE_NOT_SUPPORTED' => 17,
    'CURLPX_REPLY_COMMAND_NOT_SUPPORTED' => 18,
    'CURLPX_REPLY_CONNECTION_REFUSED' => 19,
    'CURLPX_REPLY_GENERAL_SERVER_FAILURE' => 20,
    'CURLPX_REPLY_HOST_UNREACHABLE' => 21,
    'CURLPX_REPLY_NETWORK_UNREACHABLE' => 22,
    'CURLPX_REPLY_NOT_ALLOWED' => 23,
    'CURLPX_REPLY_TTL_EXPIRED' => 24,
    'CURLPX_REPLY_UNASSIGNED' => 25,
    'CURLPX_REQUEST_FAILED' => 26,
    'CURLPX_RESOLVE_HOST' => 27,
    'CURLPX_SEND_AUTH' => 28,
    'CURLPX_SEND_CONNECT' => 29,
    'CURLPX_SEND_REQUEST' => 30,
    'CURLPX_UNKNOWN_FAIL' => 31,
    'CURLPX_UNKNOWN_MODE' => 32,
    'CURLPX_USER_REJECTED' => 33,
    'CURLHSTS_ENABLE' => 1,
    'CURLHSTS_READONLYFILE' => 2,
    'CURLOPT_HSTS' => 10300,
    'CURLOPT_HSTS_CTRL' => 299,
    'CURL_VERSION_HSTS' => 268435456,
    'CURLAUTH_AWS_SIGV4' => 128,
    'CURLOPT_AWS_SIGV4' => 10305,
    'CURLINFO_REFERER' => 1048636,
    'CURLOPT_DOH_SSL_VERIFYHOST' => 307,
    'CURLOPT_DOH_SSL_VERIFYPEER' => 306,
    'CURLOPT_DOH_SSL_VERIFYSTATUS' => 308,
    'CURL_VERSION_GSASL' => 536870912,
    'CURLOPT_CAINFO_BLOB' => 40309,
    'CURLOPT_PROXY_CAINFO_BLOB' => 40310,
    'CURLSSLOPT_AUTO_CLIENT_CERT' => 32,
    'CURLOPT_MAXLIFETIME_CONN' => 314,
    'CURLOPT_SSH_HOST_PUBLIC_KEY_SHA256' => 10311,
    'CURLOPT_MIME_OPTIONS' => 315,
    'CURLMIMEOPT_FORMESCAPE' => 1,
    'CURLOPT_SSH_HOSTKEYFUNCTION' => 20316,
    'CURLOPT_PROTOCOLS_STR' => 10318,
    'CURLOPT_REDIR_PROTOCOLS_STR' => 10319,
    'CURLOPT_WS_OPTIONS' => 320,
    'CURLWS_RAW_MODE' => 1,
    'CURLOPT_CA_CACHE_TIMEOUT' => 321,
    'CURLOPT_QUICK_EXIT' => 322,
    'CURLOPT_SAFE_UPLOAD' => -1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
    'curl.cainfo' => '',
  ),
);
