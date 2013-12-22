<?php
$error_view_name = 'error'.$code;
$error_view = Yii::app()->viewPath.DIRECTORY_SEPARATOR.'error'.DIRECTORY_SEPARATOR.$error_view_name.'.php';
if (is_file($error_view)) {
	$this->renderPartial('//error/'.$error_view_name, array('code' => $code, 'message' => $message));
} else {
	$this->renderPartial('//error/error', array('code' => $code, 'message' => $message));
}
?>