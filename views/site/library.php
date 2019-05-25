<h3>You need to be admin to make changes!</h3>
<!-- <div class="input btn btn-outline-secondary">ololo</div> -->
<?php
	// if (Yii::$app->user->identity->username) {
	// 	echo "you are admin";
	// }
	// echo "you are admin?";
	echo Yii::$app->user->identity->username;
	echo date('d.m.Y');
?>
	<!-- $library->name; -->

<div id='tablo' class='container modal-content'>
	<div class="row">
		<div class="col tblElem"><b>book_ID</b></div>
		<div class="col tblElem"><b>autor</b></div>
		<div class="col tblElem"><b>name</b></div>
		<div class="col tblElem"><b>createDate</b></div>
		<div class="col tblElem"><b>changeDate</b></div>
		<div class="col tblElem"><b>sum of books</b></div>
		<div class="col tblElem"><b></b></div>
	</div>
	<?php
	foreach ($library as $library) { ?>
		<div class="row">
			<div class="col tblElem"><?=$library->book_ID?></div>
			<div class="col tblElem"><?=$library->autor?></div>
			<div class="col tblElem"><?=$library->name?></div>
			<div class="col tblElem"><?=$library->createDate?></div>
			<div class="col tblElem"><?=$library->changeDate?></div>
			<div class="col tblElem"></div>
			<div class="col tblElem"></div>
		</div>
		<!-- <li><b><?=$library->name?></b></li> -->
	<?php } ?>
	<div class="row">
		<div class="col tblElem"><b></b></div>
		<div class="col tblElem"><b></b></div>
		<div class="col tblElem"><b></b></div>
		<div class="col tblElem"><b></b></div>
		<div class="col tblElem"><b>add or edit</b></div>
	</div>
	<div class="row">
		<div class="col tblElem"><b>filter by</b></div>
		<div class="col tblElem">autor</div>
		<div class="col tblElem">sum of books</div>
		<div class="col tblElem">name</div>
		<div class="col tblElem">createDate</div>
	</div>
</div>
	<!--  $sql = "INSERT INTO `library`(`book_ID`, `autor`, `name`, `createDate`, `changeDate`) VALUES (1,'William Shakespeare','King Lear','2011-10-01',CURRENT_DATE());";
	 class table extends \yii\base\Model
	 {

	 } -->
<!-- 
Yii::$app->db
# 1 William Shakespeare King Lear
INSERT INTO 'library' ('autor', 'name', 'createDate') VALUES ('William Shakespeare', 'King Lear', '2011-10-01');
INSERT INTO `library`(`book_ID`, `autor`, `name`, `createDate`, `changeDate`) VALUES (1,'William Shakespeare','King Lear','2011-10-01','2011-10-01');
INSERT INTO `library`(`book_ID`, `autor`, `name`, `createDate`, `changeDate`) VALUES (1,'William Shakespeare','King Lear','2011-10-01',CURRENT_DATE());
DELETE FROM `library` WHERE `library`.`book_ID` = 1;
 -->

<!--  <div class="container">
  <div class="row">
    <div class="col-sm">
      Одна из трёх колонок
    </div>
    <div class="col-sm">
      Одна из трёх колонок
    </div>
    <div class="col-sm">
      Одна из трёх колонок
    </div>
  </div>
</div> -->