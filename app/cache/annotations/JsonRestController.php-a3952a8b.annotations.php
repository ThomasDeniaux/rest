<?php

return array(
  '#namespace' => 'Ubiquity\\controllers\\rest\\api\\json',
  '#uses' => array (
  'JsonRequestFormatter' => 'Ubiquity\\controllers\\rest\\formatters\\JsonRequestFormatter',
  'RequestFormatter' => 'Ubiquity\\controllers\\rest\\formatters\\RequestFormatter',
  'ResponseFormatter' => 'Ubiquity\\controllers\\rest\\formatters\\ResponseFormatter',
  'RestBaseController' => 'Ubiquity\\controllers\\rest\\RestBaseController',
  'DynamicResourceTrait' => 'Ubiquity\\controllers\\rest\\traits\\DynamicResourceTrait',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\controllers\\rest\\api\\json\\JsonRestController' => 
  array (
  ),
),
  'Ubiquity\\controllers\\rest\\api\\json\\JsonRestController::_getApiVersion' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'string')
  ),
  'Ubiquity\\controllers\\rest\\api\\json\\JsonRestController::_getTemplateFile' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'string')
  ),
);

