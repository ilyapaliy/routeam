<h3>demo/demo - user (only read), admin/admin - admin (CRUD)</h3>
<h3>You need to login to use library!</h3>
<?php
	// if (Yii::$app->user->identity->username) {
	// 	echo "you are admin";
	// }
	// echo "you are admin?";
	echo Yii::$app->user->identity->username;
	echo date('d.m.Y');
	// $library->name;
	foreach ($library as $library) { ?>
		<li><b><?=$library->name?></b></li>

	<?php }
	// $sql = "INSERT INTO `library`(`book_ID`, `autor`, `name`, `createDate`, `changeDate`) VALUES (1,'William Shakespeare','King Lear','2011-10-01',CURRENT_DATE());";
	// class table extends \yii\base\Model
	// {

	// }
?>
<!-- 
Yii::$app->db
# 1 William Shakespeare King Lear
INSERT INTO 'library' ('autor', 'name', 'createDate') VALUES ('William Shakespeare', 'King Lear', '2011-10-01');
INSERT INTO `library`(`book_ID`, `autor`, `name`, `createDate`, `changeDate`) VALUES (1,'William Shakespeare','King Lear','2011-10-01','2011-10-01');
INSERT INTO `library`(`book_ID`, `autor`, `name`, `createDate`, `changeDate`) VALUES (1,'William Shakespeare','King Lear','2011-10-01',CURRENT_DATE());
DELETE FROM `library` WHERE `library`.`book_ID` = 1;
 -->