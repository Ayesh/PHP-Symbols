<?php

return array (
  'type' => 'class',
  'name' => 'ZendTestChildClassWithMethodWithParameterAttribute',
  'meta' => 
  array (
    'type' => 'class',
    'name' => 'ZendTestChildClassWithMethodWithParameterAttribute',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => NULL,
    'removed' => NULL,
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'ZendTestChildClassWithMethodWithParameterAttribute class (php.net)',
        'url' => 'https://www.php.net/manual/class.zendtestchildclasswithmethodwithparameterattribute.php',
      ),
    ),
  ),
  'interfaces' => 
  array (
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    'override' => 
    array (
      'name' => 'override',
      'class' => 'ZendTestChildClassWithMethodWithParameterAttribute',
      'parameters' => 
      array (
        'parameter' => 
        array (
          'position' => 0,
          'name' => 'parameter',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
    'no_override' => 
    array (
      'name' => 'no_override',
      'class' => 'ZendTestClassWithMethodWithParameterAttribute',
      'parameters' => 
      array (
        'parameter' => 
        array (
          'position' => 0,
          'name' => 'parameter',
          'type' => 'string',
          'is_optional' => false,
          'has_default_value' => false,
          'default_value' => NULL,
          'has_default_value_constant' => false,
          'default_value_constant' => NULL,
        ),
      ),
      'return_type' => 'int',
      'has_return_type' => true,
      'is_static' => false,
      'is_public' => true,
      'is_protected' => false,
      'is_private' => false,
    ),
  ),
  'traits' => 
  array (
  ),
  'is_abstract' => false,
  'is_anonymous' => false,
  'is_cloneable' => true,
  'is_final' => false,
  'is_read_only' => false,
  'toString' => 'Class [ <internal:zend_test> class ZendTestChildClassWithMethodWithParameterAttribute extends ZendTestClassWithMethodWithParameterAttribute ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [2] {
    Method [ <internal:zend_test, overwrites ZendTestClassWithMethodWithParameterAttribute, prototype ZendTestClassWithMethodWithParameterAttribute> public method override ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $parameter ]
      }
      - Return [ int ]
    }

    Method [ <internal:zend_test, inherits ZendTestClassWithMethodWithParameterAttribute> final public method no_override ] {

      - Parameters [1] {
        Parameter #0 [ <required> string $parameter ]
      }
      - Return [ int ]
    }
  }
}
',
);
