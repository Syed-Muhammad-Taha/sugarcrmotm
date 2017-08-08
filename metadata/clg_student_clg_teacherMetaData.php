<?php
// created: 2017-08-08 11:28:29
$dictionary["clg_teacher_clg_student"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' =>
  array (
    'clg_teacher_clg_student' =>
    array (
      'lhs_module' => 'clg_Student',
      'lhs_table' => 'clg_student',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Teacher',
      'rhs_table' => 'clg_teacher',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
  ),
);
