<?php

return array (
  'type' => 'extension',
  'name' => 'pcntl',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'pcntl',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'pcntl',
    )),
    'removed' => NULL,
    'version' => '7.0.33',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'pcntl extension (php.net)',
        'url' => 'https://www.php.net/manual/book.pcntl.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'pcntl_fork' => 'pcntl_fork',
    'pcntl_waitpid' => 'pcntl_waitpid',
    'pcntl_wait' => 'pcntl_wait',
    'pcntl_signal' => 'pcntl_signal',
    'pcntl_signal_dispatch' => 'pcntl_signal_dispatch',
    'pcntl_wifexited' => 'pcntl_wifexited',
    'pcntl_wifstopped' => 'pcntl_wifstopped',
    'pcntl_wifsignaled' => 'pcntl_wifsignaled',
    'pcntl_wexitstatus' => 'pcntl_wexitstatus',
    'pcntl_wtermsig' => 'pcntl_wtermsig',
    'pcntl_wstopsig' => 'pcntl_wstopsig',
    'pcntl_exec' => 'pcntl_exec',
    'pcntl_alarm' => 'pcntl_alarm',
    'pcntl_get_last_error' => 'pcntl_get_last_error',
    'pcntl_errno' => 'pcntl_errno',
    'pcntl_strerror' => 'pcntl_strerror',
    'pcntl_getpriority' => 'pcntl_getpriority',
    'pcntl_setpriority' => 'pcntl_setpriority',
    'pcntl_sigprocmask' => 'pcntl_sigprocmask',
    'pcntl_sigwaitinfo' => 'pcntl_sigwaitinfo',
    'pcntl_sigtimedwait' => 'pcntl_sigtimedwait',
    'pcntl_wifcontinued' => 'pcntl_wifcontinued',
  ),
  'constants' => 
  array (
    'WNOHANG' => 1,
    'WUNTRACED' => 2,
    'WCONTINUED' => 8,
    'SIG_IGN' => 1,
    'SIG_DFL' => 0,
    'SIG_ERR' => -1,
    'SIGHUP' => 1,
    'SIGINT' => 2,
    'SIGQUIT' => 3,
    'SIGILL' => 4,
    'SIGTRAP' => 5,
    'SIGABRT' => 6,
    'SIGIOT' => 6,
    'SIGBUS' => 7,
    'SIGFPE' => 8,
    'SIGKILL' => 9,
    'SIGUSR1' => 10,
    'SIGSEGV' => 11,
    'SIGUSR2' => 12,
    'SIGPIPE' => 13,
    'SIGALRM' => 14,
    'SIGTERM' => 15,
    'SIGSTKFLT' => 16,
    'SIGCLD' => 17,
    'SIGCHLD' => 17,
    'SIGCONT' => 18,
    'SIGSTOP' => 19,
    'SIGTSTP' => 20,
    'SIGTTIN' => 21,
    'SIGTTOU' => 22,
    'SIGURG' => 23,
    'SIGXCPU' => 24,
    'SIGXFSZ' => 25,
    'SIGVTALRM' => 26,
    'SIGPROF' => 27,
    'SIGWINCH' => 28,
    'SIGPOLL' => 29,
    'SIGIO' => 29,
    'SIGPWR' => 30,
    'SIGSYS' => 31,
    'SIGBABY' => 31,
    'PRIO_PGRP' => 1,
    'PRIO_USER' => 2,
    'PRIO_PROCESS' => 0,
    'SIG_BLOCK' => 0,
    'SIG_UNBLOCK' => 1,
    'SIG_SETMASK' => 2,
    'SI_USER' => 0,
    'SI_KERNEL' => 128,
    'SI_QUEUE' => -1,
    'SI_TIMER' => -2,
    'SI_MESGQ' => -3,
    'SI_ASYNCIO' => -4,
    'SI_SIGIO' => -5,
    'SI_TKILL' => -6,
    'CLD_EXITED' => 1,
    'CLD_KILLED' => 2,
    'CLD_DUMPED' => 3,
    'CLD_TRAPPED' => 4,
    'CLD_STOPPED' => 5,
    'CLD_CONTINUED' => 6,
    'TRAP_BRKPT' => 1,
    'TRAP_TRACE' => 2,
    'POLL_IN' => 1,
    'POLL_OUT' => 2,
    'POLL_MSG' => 3,
    'POLL_ERR' => 4,
    'POLL_PRI' => 5,
    'POLL_HUP' => 6,
    'ILL_ILLOPC' => 1,
    'ILL_ILLOPN' => 2,
    'ILL_ILLADR' => 3,
    'ILL_ILLTRP' => 4,
    'ILL_PRVOPC' => 5,
    'ILL_PRVREG' => 6,
    'ILL_COPROC' => 7,
    'ILL_BADSTK' => 8,
    'FPE_INTDIV' => 1,
    'FPE_INTOVF' => 2,
    'FPE_FLTDIV' => 3,
    'FPE_FLTOVF' => 4,
    'FPE_FLTUND' => 7,
    'FPE_FLTRES' => 6,
    'FPE_FLTINV' => 7,
    'FPE_FLTSUB' => 8,
    'SEGV_MAPERR' => 1,
    'SEGV_ACCERR' => 2,
    'BUS_ADRALN' => 1,
    'BUS_ADRERR' => 2,
    'BUS_OBJERR' => 3,
    'PCNTL_EINTR' => 4,
    'PCNTL_ECHILD' => 10,
    'PCNTL_EINVAL' => 22,
    'PCNTL_EAGAIN' => 11,
    'PCNTL_ESRCH' => 3,
    'PCNTL_EACCES' => 13,
    'PCNTL_EPERM' => 1,
    'PCNTL_ENOMEM' => 12,
    'PCNTL_E2BIG' => 7,
    'PCNTL_EFAULT' => 14,
    'PCNTL_EIO' => 5,
    'PCNTL_EISDIR' => 21,
    'PCNTL_ELIBBAD' => 80,
    'PCNTL_ELOOP' => 40,
    'PCNTL_EMFILE' => 24,
    'PCNTL_ENAMETOOLONG' => 36,
    'PCNTL_ENFILE' => 23,
    'PCNTL_ENOENT' => 2,
    'PCNTL_ENOEXEC' => 8,
    'PCNTL_ENOTDIR' => 20,
    'PCNTL_ETXTBSY' => 26,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
