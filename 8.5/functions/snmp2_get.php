<?php

return array (
  'type' => 'function',
  'name' => 'snmp2_get',
  'meta' => 
  array (
    'type' => 'function',
    'name' => 'snmp2_get',
    'description' => '',
    'keywords' => 
    array (
    ),
    'deprecated' => false,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'snmp2_get function (php.net)',
        'url' => 'https://www.php.net/manual/function.snmp2-get.php',
      ),
    ),
  ),
  'doc' => false,
  'parameters' => 
  array (
  ),
  'return' => 
  array (
    'type' => 'ReflectionNamedType',
    'nullable' => true,
  ),
  'extension' => 'snmp',
  'toString' => 'Function [ <internal:snmp> function snmp2_get ] {

  - Parameters [5] {
    Parameter #0 [ <required> string $hostname ]
    Parameter #1 [ <required> string $community ]
    Parameter #2 [ <required> array|string $object_id ]
    Parameter #3 [ <optional> int $timeout = -1 ]
    Parameter #4 [ <optional> int $retries = -1 ]
  }
  - Return [ mixed ]
}
',
);
