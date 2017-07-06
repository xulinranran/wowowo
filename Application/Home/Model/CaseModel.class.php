<?php
namespace Home\Model;
use Think\Model\RelationModel;
class CaseModel extends RelationModel{   
	protected $_link = array(         	
			'caseimg' => array(    
				'mapping_type'  => self::HAS_MANY, //定义主表(商品表也就是你操作的表)与副表(你要关联的表)的关系   
				'class_name'    => 'caseimg',   //要关联的副表名称
				'foreign_key'   => 'case_id' //关联的条件也就是外键外键指的是主表存储副表的外键字段名 
			)
	);
}
?>