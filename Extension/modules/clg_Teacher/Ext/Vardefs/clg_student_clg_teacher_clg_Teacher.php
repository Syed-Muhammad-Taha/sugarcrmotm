<?php
$dictionary['clg_Teacher']['fields']['clg_student_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'clg_student_name',
    'vname'     => 'LBL_STUDENT_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'clg_student_id',
    'join_name' => 'clg_student',
    'link'      => 'clg_teacher_clg_student',
    'table'     => 'clg_student',
    'isnull'    => 'true',
    'module'    => 'clg_Student',
    );
$dictionary['clg_Teacher']['fields']['clg_student_id'] = array(
    'name'              => 'clg_student_id',
    'rname'             => 'id',
    'vname'             => 'LBL_STUDENT_ID',
    'type'              => 'id',
    'table'             => 'clg_student',
    'isnull'            => 'true',
    'module'            => 'clg_Student',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['clg_Teacher']['fields']['clg_teacher_clg_student'] = array(
  	'name'          => 'clg_teacher_clg_student',
    'type'          => 'link',
    'relationship'  => 'clg_teacher_clg_student',
    'module'        => 'clg_Student',
    'bean_name'     => 'clg_Student',
    'source'        => 'non-db',
    'vname'         => 'LBL_STUDENTS',
    );
$dictionary['clg_Teacher']['relationships']['clg_teacher_clg_student'] = array(
  'name'          => 'clg_teacher_clg_student',
    'rhs_module'		=> 'clg_Teacher',
    'rhs_table'			=> 'clg_teacher',
    'rhs_key'			=> 'clg_student_id',
    'lhs_module'		=> 'clg_Student',
    'lhs_table'			=> 'clg_student',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
