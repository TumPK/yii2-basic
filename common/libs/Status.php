<?php
namespace common\libs;
class Status{
	
	const OPEN = 1;
    const CLOSE = 2;
    const CANCEL = 3;
    
    public static $arrStatus = array(
    	self::OPEN => "เปิด",
   		self::CLOSE => "ปิด",
   		self::CANCEL => "ยกเลิก",
    );
	
}
?>