<?php

return array (
  'type' => 'extension',
  'name' => 'tokenizer',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'tokenizer',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'tokenizer',
    )),
    'removed' => NULL,
    'version' => '7.3.33',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'tokenizer extension (php.net)',
        'url' => 'https://www.php.net/manual/book.tokenizer.php',
      ),
    ),
  ),
  'classes' => 
  array (
  ),
  'functions' => 
  array (
    'token_get_all' => 'token_get_all',
    'token_name' => 'token_name',
  ),
  'constants' => 
  array (
    'T_INCLUDE' => 258,
    'T_INCLUDE_ONCE' => 259,
    'T_EVAL' => 260,
    'T_REQUIRE' => 261,
    'T_REQUIRE_ONCE' => 262,
    'T_LOGICAL_OR' => 263,
    'T_LOGICAL_XOR' => 264,
    'T_LOGICAL_AND' => 265,
    'T_PRINT' => 266,
    'T_YIELD' => 267,
    'T_DOUBLE_ARROW' => 268,
    'T_YIELD_FROM' => 269,
    'T_PLUS_EQUAL' => 270,
    'T_MINUS_EQUAL' => 271,
    'T_MUL_EQUAL' => 272,
    'T_DIV_EQUAL' => 273,
    'T_CONCAT_EQUAL' => 274,
    'T_MOD_EQUAL' => 275,
    'T_AND_EQUAL' => 276,
    'T_OR_EQUAL' => 277,
    'T_XOR_EQUAL' => 278,
    'T_SL_EQUAL' => 279,
    'T_SR_EQUAL' => 280,
    'T_POW_EQUAL' => 281,
    'T_COALESCE' => 282,
    'T_BOOLEAN_OR' => 283,
    'T_BOOLEAN_AND' => 284,
    'T_IS_EQUAL' => 285,
    'T_IS_NOT_EQUAL' => 286,
    'T_IS_IDENTICAL' => 287,
    'T_IS_NOT_IDENTICAL' => 288,
    'T_SPACESHIP' => 289,
    'T_IS_SMALLER_OR_EQUAL' => 290,
    'T_IS_GREATER_OR_EQUAL' => 291,
    'T_SL' => 292,
    'T_SR' => 293,
    'T_INSTANCEOF' => 294,
    'T_INC' => 295,
    'T_DEC' => 296,
    'T_INT_CAST' => 297,
    'T_DOUBLE_CAST' => 298,
    'T_STRING_CAST' => 299,
    'T_ARRAY_CAST' => 300,
    'T_OBJECT_CAST' => 301,
    'T_BOOL_CAST' => 302,
    'T_UNSET_CAST' => 303,
    'T_POW' => 304,
    'T_NEW' => 305,
    'T_CLONE' => 306,
    'T_ELSEIF' => 308,
    'T_ELSE' => 309,
    'T_ENDIF' => 310,
    'T_STATIC' => 311,
    'T_ABSTRACT' => 312,
    'T_FINAL' => 313,
    'T_PRIVATE' => 314,
    'T_PROTECTED' => 315,
    'T_PUBLIC' => 316,
    'T_LNUMBER' => 317,
    'T_DNUMBER' => 318,
    'T_STRING' => 319,
    'T_VARIABLE' => 320,
    'T_INLINE_HTML' => 321,
    'T_ENCAPSED_AND_WHITESPACE' => 322,
    'T_CONSTANT_ENCAPSED_STRING' => 323,
    'T_STRING_VARNAME' => 324,
    'T_NUM_STRING' => 325,
    'T_EXIT' => 326,
    'T_IF' => 327,
    'T_ECHO' => 328,
    'T_DO' => 329,
    'T_WHILE' => 330,
    'T_ENDWHILE' => 331,
    'T_FOR' => 332,
    'T_ENDFOR' => 333,
    'T_FOREACH' => 334,
    'T_ENDFOREACH' => 335,
    'T_DECLARE' => 336,
    'T_ENDDECLARE' => 337,
    'T_AS' => 338,
    'T_SWITCH' => 339,
    'T_ENDSWITCH' => 340,
    'T_CASE' => 341,
    'T_DEFAULT' => 342,
    'T_BREAK' => 343,
    'T_CONTINUE' => 344,
    'T_GOTO' => 345,
    'T_FUNCTION' => 346,
    'T_CONST' => 347,
    'T_RETURN' => 348,
    'T_TRY' => 349,
    'T_CATCH' => 350,
    'T_FINALLY' => 351,
    'T_THROW' => 352,
    'T_USE' => 353,
    'T_INSTEADOF' => 354,
    'T_GLOBAL' => 355,
    'T_VAR' => 356,
    'T_UNSET' => 357,
    'T_ISSET' => 358,
    'T_EMPTY' => 359,
    'T_HALT_COMPILER' => 360,
    'T_CLASS' => 361,
    'T_TRAIT' => 362,
    'T_INTERFACE' => 363,
    'T_EXTENDS' => 364,
    'T_IMPLEMENTS' => 365,
    'T_OBJECT_OPERATOR' => 366,
    'T_LIST' => 367,
    'T_ARRAY' => 368,
    'T_CALLABLE' => 369,
    'T_LINE' => 370,
    'T_FILE' => 371,
    'T_DIR' => 372,
    'T_CLASS_C' => 373,
    'T_TRAIT_C' => 374,
    'T_METHOD_C' => 375,
    'T_FUNC_C' => 376,
    'T_COMMENT' => 377,
    'T_DOC_COMMENT' => 378,
    'T_OPEN_TAG' => 379,
    'T_OPEN_TAG_WITH_ECHO' => 380,
    'T_CLOSE_TAG' => 381,
    'T_WHITESPACE' => 382,
    'T_START_HEREDOC' => 383,
    'T_END_HEREDOC' => 384,
    'T_DOLLAR_OPEN_CURLY_BRACES' => 385,
    'T_CURLY_OPEN' => 386,
    'T_PAAMAYIM_NEKUDOTAYIM' => 387,
    'T_NAMESPACE' => 388,
    'T_NS_C' => 389,
    'T_NS_SEPARATOR' => 390,
    'T_ELLIPSIS' => 391,
    'T_DOUBLE_COLON' => 387,
    'TOKEN_PARSE' => 1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
