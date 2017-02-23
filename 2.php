<?php
header('Content-Type:application/json');
$o=[['label'=> '部门21', 'value'=>300],
['label'=> '部门22', 'value'=>370],
['label'=> '部门23', 'value'=>150],
['label'=> '部门24', 'value'=>400],
['label'=> '部门25', 'value'=>330],
['label'=> '部门26', 'value'=>250],
[123]
];
$u=[
['label'=> '部门21', 'value'=>300],
['label'=> '部门22', 'value'=>370],
['label'=> '部门23', 'value'=>150],
['label'=> '部门24', 'value'=>400],
['label'=> '部门25', 'value'=>330],
['label'=> '部门26', 'value'=>250],
[123]
];
echo json_encode($o);
echo json_encode($u);
$a=[['1','2','3'],[1,2,3]];
echo json_encode($a);