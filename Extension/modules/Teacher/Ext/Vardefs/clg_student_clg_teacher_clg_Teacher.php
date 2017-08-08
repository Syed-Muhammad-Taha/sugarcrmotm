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
    'link'      => 'clg_student',
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
$dictionary['clg_Teacher']['fields']['clg_student'] = array(
  	'name'          => 'clg_student',
    'type'          => 'link',
    'relationship'  => 'clg_teacher_clg_student',
    'module'        => 'clg_Student',
    'bean_name'     => 'Student',
    'source'        => 'non-db',
    'vname'         => 'LBL_STUDENTS',
    );
$dictionary['clg_Teacher']['relationships']['clg_teacher_clg_student'] = array(
    'lhs_module'		=> 'clg_Teacher',
    'lhs_table'			=> 'test_flexparent',
    'lhs_key'			=> 'student_id',
    'rhs_module'		=> 'clg_Student',
    'rhs_table'			=> 'clg_student',
    'rhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
