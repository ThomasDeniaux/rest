<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\MyRestController' => 
  array (
  ),
),
  'controllers\\MyRestController' => array(
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\items\\rest\\RestAnnotation', ),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "path"=>"/rest","inherited"=>false,"automated"=>false,"requirements"=>[],"priority"=>0)
  ),
  'controllers\\MyRestController::all' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "{resource}/","methods"=>["get"],"priority"=>0)
  ),
  'controllers\\MyRestController::one' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'id'),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "{resource}/{id}/","methods"=>["get"],"priority"=>1000)
  ),
  'controllers\\MyRestController::delete' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource'),
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'ids'),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "{resource}/{id}/","methods"=>["delete"],"priority"=>0),
    array('#name' => 'authorization', '#type' => 'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation')
  ),
  'controllers\\MyRestController::options' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "{resource}","methods"=>["options"],"priority"=>3000)
  ),
  'controllers\\MyRestController::add' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource'),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "{resource}/","methods"=>["post"],"priority"=>0),
    array('#name' => 'authorization', '#type' => 'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation')
  ),
  'controllers\\MyRestController::update' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'resource'),
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\items\\router\\RouteAnnotation', "{resource}/{id}","methods"=>["patch"],"priority"=>0),
    array('#name' => 'authorization', '#type' => 'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation')
  ),
);

