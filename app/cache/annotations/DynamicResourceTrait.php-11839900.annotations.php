<?php

return array(
  '#namespace' => 'Ubiquity\\controllers\\rest\\traits',
  '#uses' => array (
  'CRUDHelper' => 'Ubiquity\\controllers\\crud\\CRUDHelper',
  'RestError' => 'Ubiquity\\controllers\\rest\\RestError',
  'Startup' => 'Ubiquity\\controllers\\Startup',
  'DAO' => 'Ubiquity\\orm\\DAO',
  'OrmUtils' => 'Ubiquity\\orm\\OrmUtils',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\controllers\\rest\\traits\\DynamicResourceTrait' => 
  array (
  ),
),
  'Ubiquity\\controllers\\rest\\traits\\DynamicResourceTrait::getRelationShip_' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'id'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'member')
  ),
  'Ubiquity\\controllers\\rest\\traits\\DynamicResourceTrait::getOne_' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'id')
  ),
  'Ubiquity\\controllers\\rest\\traits\\DynamicResourceTrait::add_' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource')
  ),
  'Ubiquity\\controllers\\rest\\traits\\DynamicResourceTrait::update_' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource')
  ),
  'Ubiquity\\controllers\\rest\\traits\\DynamicResourceTrait::delete_' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'ids')
  ),
);

