<h3>demo/demo - user (only read), admin/admin - admin (CRUD)</h3>
<h3>You need to login to use library!</h3>
<?php
	if (Yii::$app->user->identity->username) {
		echo "you are admin";
	}
	// class table extends \yii\base\Model
	// {

	// }
?>