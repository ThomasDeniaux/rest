<?php

return array(
  '#namespace' => 'Ubiquity\\controllers\\rest\\traits',
  '#uses' => array (
  'RequestFormatter' => 'Ubiquity\\controllers\\rest\\formatters\\RequestFormatter',
  'ResponseFormatter' => 'Ubiquity\\controllers\\rest\\formatters\\ResponseFormatter',
  'RestServer' => 'Ubiquity\\controllers\\rest\\RestServer',
  'DAO' => 'Ubiquity\\orm\\DAO',
  'UString' => 'Ubiquity\\utils\\base\\UString',
  'URequest' => 'Ubiquity\\utils\\http\\URequest',
  'ValidatorsManager' => 'Ubiquity\\contents\\validation\\ValidatorsManager',
  'ConstraintViolation' => 'Ubiquity\\contents\\validation\\validators\\ConstraintViolation',
  'OrmUtils' => 'Ubiquity\\orm\\OrmUtils',
  'Reflexion' => 'Ubiquity\\orm\\parser\\Reflexion',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait' => 
  array (
  ),
),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait' => array(
    array('#name' => 'property', '#type' => 'mindplay\\annotations\\standard\\PropertyAnnotation', 'type' => 'ResponseFormatter', 'name' => 'responseFormatter'),
    array('#name' => 'property', '#type' => 'mindplay\\annotations\\standard\\PropertyAnnotation', 'type' => 'RequestFormatter', 'name' => 'requestFormatter'),
    array('#name' => 'property', '#type' => 'mindplay\\annotations\\standard\\PropertyAnnotation', 'type' => 'RestServer', 'name' => 'server'),
    array('#name' => 'property', '#type' => 'mindplay\\annotations\\standard\\PropertyAnnotation', 'type' => 'string', 'name' => 'model')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::getRequestParam' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'param'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string|boolean', 'name' => 'default'),
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'string|boolean')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::_getResponseFormatter' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => '\\Ubiquity\\controllers\\rest\\formatters\\ResponseFormatter')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::getResponseFormatter' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => '\\Ubiquity\\controllers\\rest\\formatters\\ResponseFormatter')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::_getRequestFormatter' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => '\\Ubiquity\\controllers\\rest\\formatters\\RequestFormatter')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::getRequestFormatter' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => '\\Ubiquity\\controllers\\rest\\formatters\\RequestFormatter')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::getRestServer' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => '\\Ubiquity\\controllers\\rest\\RestServer')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::_setValuesToObject' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'object', 'name' => 'instance'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'array', 'name' => 'values')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::getInclude' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string|boolean', 'name' => 'include'),
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'array|boolean')
  ),
  'Ubiquity\\controllers\\rest\\traits\\RestControllerUtilitiesTrait::getAssociatedMemberValues_' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'ids'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'callable', 'name' => 'getDatas'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'member'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean|string', 'name' => 'include'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean', 'name' => 'useCache'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'boolean', 'name' => 'multiple')
  ),
);

