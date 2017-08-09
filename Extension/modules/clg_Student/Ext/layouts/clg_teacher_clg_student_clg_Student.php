<?php

$layout_defs["clg_Student"]["subpanel_setup"]['clg_teacher_clg_student'] = array (
  'order' => 100,
  'module' => 'clg_Teacher',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TEACHERS',
  'get_subpanel_data' => 'clg_teacher_clg_student',
  'top_buttons' =>
  array (
    0 =>
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 =>
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
