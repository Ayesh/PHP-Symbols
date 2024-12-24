<?php

return array (
  'type' => 'extension',
  'name' => 'sockets',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'sockets',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    \ReflectionExtension::__set_state(array(
       'name' => 'sockets',
    )),
    'removed' => NULL,
    'version' => '8.2.27',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sockets extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sockets.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'Socket',
    1 => 'AddressInfo',
  ),
  'functions' => 
  array (
    'socket_select' => 'socket_select',
    'socket_create_listen' => 'socket_create_listen',
    'socket_accept' => 'socket_accept',
    'socket_set_nonblock' => 'socket_set_nonblock',
    'socket_set_block' => 'socket_set_block',
    'socket_listen' => 'socket_listen',
    'socket_close' => 'socket_close',
    'socket_write' => 'socket_write',
    'socket_read' => 'socket_read',
    'socket_getsockname' => 'socket_getsockname',
    'socket_getpeername' => 'socket_getpeername',
    'socket_create' => 'socket_create',
    'socket_connect' => 'socket_connect',
    'socket_strerror' => 'socket_strerror',
    'socket_bind' => 'socket_bind',
    'socket_recv' => 'socket_recv',
    'socket_send' => 'socket_send',
    'socket_recvfrom' => 'socket_recvfrom',
    'socket_sendto' => 'socket_sendto',
    'socket_get_option' => 'socket_get_option',
    'socket_getopt' => 'socket_getopt',
    'socket_set_option' => 'socket_set_option',
    'socket_setopt' => 'socket_setopt',
    'socket_create_pair' => 'socket_create_pair',
    'socket_shutdown' => 'socket_shutdown',
    'socket_last_error' => 'socket_last_error',
    'socket_clear_error' => 'socket_clear_error',
    'socket_import_stream' => 'socket_import_stream',
    'socket_export_stream' => 'socket_export_stream',
    'socket_sendmsg' => 'socket_sendmsg',
    'socket_recvmsg' => 'socket_recvmsg',
    'socket_cmsg_space' => 'socket_cmsg_space',
    'socket_addrinfo_lookup' => 'socket_addrinfo_lookup',
    'socket_addrinfo_connect' => 'socket_addrinfo_connect',
    'socket_addrinfo_bind' => 'socket_addrinfo_bind',
    'socket_addrinfo_explain' => 'socket_addrinfo_explain',
  ),
  'constants' => 
  array (
    'AF_UNIX' => 1,
    'AF_INET' => 2,
    'AF_INET6' => 10,
    'SOCK_STREAM' => 1,
    'SOCK_DGRAM' => 2,
    'SOCK_RAW' => 3,
    'SOCK_SEQPACKET' => 5,
    'SOCK_RDM' => 4,
    'MSG_OOB' => 1,
    'MSG_WAITALL' => 256,
    'MSG_CTRUNC' => 8,
    'MSG_TRUNC' => 32,
    'MSG_PEEK' => 2,
    'MSG_DONTROUTE' => 4,
    'MSG_EOR' => 128,
    'MSG_EOF' => 512,
    'MSG_CONFIRM' => 2048,
    'MSG_ERRQUEUE' => 8192,
    'MSG_NOSIGNAL' => 16384,
    'MSG_DONTWAIT' => 64,
    'MSG_MORE' => 32768,
    'MSG_WAITFORONE' => 65536,
    'MSG_CMSG_CLOEXEC' => 1073741824,
    'MSG_ZEROCOPY' => 67108864,
    'SO_DEBUG' => 1,
    'SO_REUSEADDR' => 2,
    'SO_REUSEPORT' => 15,
    'SO_KEEPALIVE' => 9,
    'SO_DONTROUTE' => 5,
    'SO_LINGER' => 13,
    'SO_BROADCAST' => 6,
    'SO_OOBINLINE' => 10,
    'SO_SNDBUF' => 7,
    'SO_RCVBUF' => 8,
    'SO_SNDLOWAT' => 19,
    'SO_RCVLOWAT' => 18,
    'SO_SNDTIMEO' => 21,
    'SO_RCVTIMEO' => 20,
    'SO_TYPE' => 3,
    'SO_ERROR' => 4,
    'SO_BINDTODEVICE' => 25,
    'SOL_SOCKET' => 1,
    'SOMAXCONN' => 4096,
    'SO_MARK' => 36,
    'SO_INCOMING_CPU' => 49,
    'SO_MEMINFO' => 55,
    'SO_BPF_EXTENSIONS' => 48,
    'SKF_AD_OFF' => -4096,
    'SKF_AD_PROTOCOL' => 0,
    'SKF_AD_PKTTYPE' => 4,
    'SKF_AD_IFINDEX' => 8,
    'SKF_AD_NLATTR' => 12,
    'SKF_AD_NLATTR_NEST' => 16,
    'SKF_AD_MARK' => 20,
    'SKF_AD_QUEUE' => 24,
    'SKF_AD_HATYPE' => 28,
    'SKF_AD_RXHASH' => 32,
    'SKF_AD_CPU' => 36,
    'SKF_AD_ALU_XOR_X' => 40,
    'SKF_AD_VLAN_TAG' => 44,
    'SKF_AD_VLAN_TAG_PRESENT' => 48,
    'SKF_AD_PAY_OFFSET' => 52,
    'SKF_AD_RANDOM' => 56,
    'SKF_AD_VLAN_TPID' => 60,
    'SKF_AD_MAX' => 64,
    'TCP_CONGESTION' => 13,
    'SO_ZEROCOPY' => 60,
    'TCP_NODELAY' => 1,
    'TCP_NOTSENT_LOWAT' => 25,
    'TCP_DEFER_ACCEPT' => 9,
    'TCP_KEEPIDLE' => 4,
    'TCP_KEEPINTVL' => 5,
    'TCP_KEEPCNT' => 6,
    'PHP_NORMAL_READ' => 1,
    'PHP_BINARY_READ' => 2,
    'MCAST_JOIN_GROUP' => 42,
    'MCAST_LEAVE_GROUP' => 45,
    'MCAST_BLOCK_SOURCE' => 43,
    'MCAST_UNBLOCK_SOURCE' => 44,
    'MCAST_JOIN_SOURCE_GROUP' => 46,
    'MCAST_LEAVE_SOURCE_GROUP' => 47,
    'IP_MULTICAST_IF' => 32,
    'IP_MULTICAST_TTL' => 33,
    'IP_MULTICAST_LOOP' => 34,
    'IPV6_MULTICAST_IF' => 17,
    'IPV6_MULTICAST_HOPS' => 18,
    'IPV6_MULTICAST_LOOP' => 19,
    'IPV6_V6ONLY' => 26,
    'SOCKET_EPERM' => 1,
    'SOCKET_ENOENT' => 2,
    'SOCKET_EINTR' => 4,
    'SOCKET_EIO' => 5,
    'SOCKET_ENXIO' => 6,
    'SOCKET_E2BIG' => 7,
    'SOCKET_EBADF' => 9,
    'SOCKET_EAGAIN' => 11,
    'SOCKET_ENOMEM' => 12,
    'SOCKET_EACCES' => 13,
    'SOCKET_EFAULT' => 14,
    'SOCKET_ENOTBLK' => 15,
    'SOCKET_EBUSY' => 16,
    'SOCKET_EEXIST' => 17,
    'SOCKET_EXDEV' => 18,
    'SOCKET_ENODEV' => 19,
    'SOCKET_ENOTDIR' => 20,
    'SOCKET_EISDIR' => 21,
    'SOCKET_EINVAL' => 22,
    'SOCKET_ENFILE' => 23,
    'SOCKET_EMFILE' => 24,
    'SOCKET_ENOTTY' => 25,
    'SOCKET_ENOSPC' => 28,
    'SOCKET_ESPIPE' => 29,
    'SOCKET_EROFS' => 30,
    'SOCKET_EMLINK' => 31,
    'SOCKET_EPIPE' => 32,
    'SOCKET_ENAMETOOLONG' => 36,
    'SOCKET_ENOLCK' => 37,
    'SOCKET_ENOSYS' => 38,
    'SOCKET_ENOTEMPTY' => 39,
    'SOCKET_ELOOP' => 40,
    'SOCKET_EWOULDBLOCK' => 11,
    'SOCKET_ENOMSG' => 42,
    'SOCKET_EIDRM' => 43,
    'SOCKET_ECHRNG' => 44,
    'SOCKET_EL2NSYNC' => 45,
    'SOCKET_EL3HLT' => 46,
    'SOCKET_EL3RST' => 47,
    'SOCKET_ELNRNG' => 48,
    'SOCKET_EUNATCH' => 49,
    'SOCKET_ENOCSI' => 50,
    'SOCKET_EL2HLT' => 51,
    'SOCKET_EBADE' => 52,
    'SOCKET_EBADR' => 53,
    'SOCKET_EXFULL' => 54,
    'SOCKET_ENOANO' => 55,
    'SOCKET_EBADRQC' => 56,
    'SOCKET_EBADSLT' => 57,
    'SOCKET_ENOSTR' => 60,
    'SOCKET_ENODATA' => 61,
    'SOCKET_ETIME' => 62,
    'SOCKET_ENOSR' => 63,
    'SOCKET_ENONET' => 64,
    'SOCKET_EREMOTE' => 66,
    'SOCKET_ENOLINK' => 67,
    'SOCKET_EADV' => 68,
    'SOCKET_ESRMNT' => 69,
    'SOCKET_ECOMM' => 70,
    'SOCKET_EPROTO' => 71,
    'SOCKET_EMULTIHOP' => 72,
    'SOCKET_EBADMSG' => 74,
    'SOCKET_ENOTUNIQ' => 76,
    'SOCKET_EBADFD' => 77,
    'SOCKET_EREMCHG' => 78,
    'SOCKET_ERESTART' => 85,
    'SOCKET_ESTRPIPE' => 86,
    'SOCKET_EUSERS' => 87,
    'SOCKET_ENOTSOCK' => 88,
    'SOCKET_EDESTADDRREQ' => 89,
    'SOCKET_EMSGSIZE' => 90,
    'SOCKET_EPROTOTYPE' => 91,
    'SOCKET_ENOPROTOOPT' => 92,
    'SOCKET_EPROTONOSUPPORT' => 93,
    'SOCKET_ESOCKTNOSUPPORT' => 94,
    'SOCKET_EOPNOTSUPP' => 95,
    'SOCKET_EPFNOSUPPORT' => 96,
    'SOCKET_EAFNOSUPPORT' => 97,
    'SOCKET_EADDRINUSE' => 98,
    'SOCKET_EADDRNOTAVAIL' => 99,
    'SOCKET_ENETDOWN' => 100,
    'SOCKET_ENETUNREACH' => 101,
    'SOCKET_ENETRESET' => 102,
    'SOCKET_ECONNABORTED' => 103,
    'SOCKET_ECONNRESET' => 104,
    'SOCKET_ENOBUFS' => 105,
    'SOCKET_EISCONN' => 106,
    'SOCKET_ENOTCONN' => 107,
    'SOCKET_ESHUTDOWN' => 108,
    'SOCKET_ETOOMANYREFS' => 109,
    'SOCKET_ETIMEDOUT' => 110,
    'SOCKET_ECONNREFUSED' => 111,
    'SOCKET_EHOSTDOWN' => 112,
    'SOCKET_EHOSTUNREACH' => 113,
    'SOCKET_EALREADY' => 114,
    'SOCKET_EINPROGRESS' => 115,
    'SOCKET_EISNAM' => 120,
    'SOCKET_EREMOTEIO' => 121,
    'SOCKET_EDQUOT' => 122,
    'SOCKET_ENOMEDIUM' => 123,
    'SOCKET_EMEDIUMTYPE' => 124,
    'IPPROTO_IP' => 0,
    'IPPROTO_IPV6' => 41,
    'SOL_TCP' => 6,
    'SOL_UDP' => 17,
    'IPV6_UNICAST_HOPS' => 16,
    'AI_PASSIVE' => 1,
    'AI_CANONNAME' => 2,
    'AI_NUMERICHOST' => 4,
    'AI_V4MAPPED' => 8,
    'AI_ALL' => 16,
    'AI_ADDRCONFIG' => 32,
    'AI_IDN' => 64,
    'AI_CANONIDN' => 128,
    'AI_NUMERICSERV' => 1024,
    'IPV6_RECVPKTINFO' => 49,
    'IPV6_PKTINFO' => 50,
    'IPV6_RECVHOPLIMIT' => 51,
    'IPV6_HOPLIMIT' => 52,
    'IPV6_RECVTCLASS' => 66,
    'IPV6_TCLASS' => 67,
    'SCM_RIGHTS' => 1,
    'SCM_CREDENTIALS' => 2,
    'SO_PASSCRED' => 16,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
