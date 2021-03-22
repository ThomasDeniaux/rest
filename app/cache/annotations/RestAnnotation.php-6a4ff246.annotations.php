<?php

return array(
  '#namespace' => 'Ubiquity\\annotations\\items\\rest',
  '#uses' => array (
  'BaseAnnotation' => 'Ubiquity\\annotations\\items\\BaseAnnotation',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\annotations\\items\\rest\\RestAnnotation' => 
  array (
  ),
),
  'Ubiquity\\annotations\\items\\rest\\RestAnnotation' => array(
    array('#name' => 'usage', '#type' => 'mindplay\\annotations\\UsageAnnotation', 'class'=>true, 'inherited'=>true)
  ),
);

