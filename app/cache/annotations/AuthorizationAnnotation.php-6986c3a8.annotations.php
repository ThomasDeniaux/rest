<?php

return array(
  '#namespace' => 'Ubiquity\\annotations\\items\\rest',
  '#uses' => array (
  'BaseAnnotation' => 'Ubiquity\\annotations\\items\\BaseAnnotation',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation' => 
  array (
  ),
),
  'Ubiquity\\annotations\\items\\rest\\AuthorizationAnnotation' => array(
    array('#name' => 'usage', '#type' => 'mindplay\\annotations\\UsageAnnotation', 'method'=>true, 'inherited'=>true)
  ),
);

