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
    \ReflectionExtension::__set_state(array(
       'name' => 'tokenizer',
    )),
    'removed' => NULL,
    'version' => '8.4.0-dev',
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
    0 => 'PhpToken',
  ),
  'functions' => 
  array (
    'token_get_all' => 'token_get_all',
    'token_name' => 'token_name',
  ),
  'constants' => 
  array (
    'T_LNUMBER' => 260,
    'T_DNUMBER' => 261,
    'T_STRING' => 262,
    'T_NAME_FULLY_QUALIFIED' => 263,
    'T_NAME_RELATIVE' => 264,
    'T_NAME_QUALIFIED' => 265,
    'T_VARIABLE' => 266,
    'T_INLINE_HTML' => 267,
    'T_ENCAPSED_AND_WHITESPACE' => 268,
    'T_CONSTANT_ENCAPSED_STRING' => 269,
    'T_STRING_VARNAME' => 270,
    'T_NUM_STRING' => 271,
    'T_INCLUDE' => 272,
    'T_INCLUDE_ONCE' => 273,
    'T_EVAL' => 274,
    'T_REQUIRE' => 275,
    'T_REQUIRE_ONCE' => 276,
    'T_LOGICAL_OR' => 277,
    'T_LOGICAL_XOR' => 278,
    'T_LOGICAL_AND' => 279,
    'T_PRINT' => 280,
    'T_YIELD' => 281,
    'T_YIELD_FROM' => 282,
    'T_INSTANCEOF' => 283,
    'T_NEW' => 284,
    'T_CLONE' => 285,
    'T_EXIT' => 286,
    'T_IF' => 287,
    'T_ELSEIF' => 288,
    'T_ELSE' => 289,
    'T_ENDIF' => 290,
    'T_ECHO' => 291,
    'T_DO' => 292,
    'T_WHILE' => 293,
    'T_ENDWHILE' => 294,
    'T_FOR' => 295,
    'T_ENDFOR' => 296,
    'T_FOREACH' => 297,
    'T_ENDFOREACH' => 298,
    'T_DECLARE' => 299,
    'T_ENDDECLARE' => 300,
    'T_AS' => 301,
    'T_SWITCH' => 302,
    'T_ENDSWITCH' => 303,
    'T_CASE' => 304,
    'T_DEFAULT' => 305,
    'T_MATCH' => 306,
    'T_BREAK' => 307,
    'T_CONTINUE' => 308,
    'T_GOTO' => 309,
    'T_FUNCTION' => 310,
    'T_FN' => 311,
    'T_CONST' => 312,
    'T_RETURN' => 313,
    'T_TRY' => 314,
    'T_CATCH' => 315,
    'T_FINALLY' => 316,
    'T_THROW' => 317,
    'T_USE' => 318,
    'T_INSTEADOF' => 319,
    'T_GLOBAL' => 320,
    'T_STATIC' => 321,
    'T_ABSTRACT' => 322,
    'T_FINAL' => 323,
    'T_PRIVATE' => 324,
    'T_PROTECTED' => 325,
    'T_PUBLIC' => 326,
    'T_PRIVATE_SET' => 327,
    'T_PROTECTED_SET' => 328,
    'T_PUBLIC_SET' => 329,
    'T_READONLY' => 330,
    'T_VAR' => 331,
    'T_UNSET' => 332,
    'T_ISSET' => 333,
    'T_EMPTY' => 334,
    'T_HALT_COMPILER' => 335,
    'T_CLASS' => 336,
    'T_TRAIT' => 337,
    'T_INTERFACE' => 338,
    'T_ENUM' => 339,
    'T_EXTENDS' => 340,
    'T_IMPLEMENTS' => 341,
    'T_NAMESPACE' => 342,
    'T_LIST' => 343,
    'T_ARRAY' => 344,
    'T_CALLABLE' => 345,
    'T_LINE' => 346,
    'T_FILE' => 347,
    'T_DIR' => 348,
    'T_CLASS_C' => 349,
    'T_TRAIT_C' => 350,
    'T_METHOD_C' => 351,
    'T_FUNC_C' => 352,
    'T_PROPERTY_C' => 353,
    'T_NS_C' => 354,
    'T_ATTRIBUTE' => 355,
    'T_PLUS_EQUAL' => 356,
    'T_MINUS_EQUAL' => 357,
    'T_MUL_EQUAL' => 358,
    'T_DIV_EQUAL' => 359,
    'T_CONCAT_EQUAL' => 360,
    'T_MOD_EQUAL' => 361,
    'T_AND_EQUAL' => 362,
    'T_OR_EQUAL' => 363,
    'T_XOR_EQUAL' => 364,
    'T_SL_EQUAL' => 365,
    'T_SR_EQUAL' => 366,
    'T_COALESCE_EQUAL' => 367,
    'T_BOOLEAN_OR' => 368,
    'T_BOOLEAN_AND' => 369,
    'T_IS_EQUAL' => 370,
    'T_IS_NOT_EQUAL' => 371,
    'T_IS_IDENTICAL' => 372,
    'T_IS_NOT_IDENTICAL' => 373,
    'T_IS_SMALLER_OR_EQUAL' => 374,
    'T_IS_GREATER_OR_EQUAL' => 375,
    'T_SPACESHIP' => 376,
    'T_SL' => 377,
    'T_SR' => 378,
    'T_INC' => 379,
    'T_DEC' => 380,
    'T_INT_CAST' => 381,
    'T_DOUBLE_CAST' => 382,
    'T_STRING_CAST' => 383,
    'T_ARRAY_CAST' => 384,
    'T_OBJECT_CAST' => 385,
    'T_BOOL_CAST' => 386,
    'T_UNSET_CAST' => 387,
    'T_OBJECT_OPERATOR' => 388,
    'T_NULLSAFE_OBJECT_OPERATOR' => 389,
    'T_DOUBLE_ARROW' => 390,
    'T_COMMENT' => 391,
    'T_DOC_COMMENT' => 392,
    'T_OPEN_TAG' => 393,
    'T_OPEN_TAG_WITH_ECHO' => 394,
    'T_CLOSE_TAG' => 395,
    'T_WHITESPACE' => 396,
    'T_START_HEREDOC' => 397,
    'T_END_HEREDOC' => 398,
    'T_DOLLAR_OPEN_CURLY_BRACES' => 399,
    'T_CURLY_OPEN' => 400,
    'T_PAAMAYIM_NEKUDOTAYIM' => 401,
    'T_NS_SEPARATOR' => 402,
    'T_ELLIPSIS' => 403,
    'T_COALESCE' => 404,
    'T_POW' => 405,
    'T_POW_EQUAL' => 406,
    'T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG' => 407,
    'T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG' => 408,
    'T_BAD_CHARACTER' => 409,
    'T_DOUBLE_COLON' => 401,
    'TOKEN_PARSE' => 1,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);
