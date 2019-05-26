<?php

namespace app\models;

use Yii;
use yii\widgets\ActiveForm;
use app\models\Library;
use yii\helpers\Html;


?>

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
	$max =1;
	foreach ($library as $l) { 
		echo '<div class="row ';
		echo $l->book_ID;
		echo '">';
		$max +=1;?>
		<!-- <div class="row "> -->
			<div class="col tblElem"><h5><?=$l->book_ID?></h5></div>
			<div class="col tblElem"><h5><?=$l->autor?></h5></div>
			<div class="col tblElem"><h5><?=$l->name?></h5></div>
			<div class="col tblElem"><h5><?=$l->createDate?></h5></div>
			<div class="col tblElem"><h5><?=$l->changeDate?></h5></div>
			<div class="col tblElem"><h5><?php
			$count = 0;
			foreach ($library as $a) {
				if ($a->autor == $l->autor) {
					$count +=1;
				}
			}
			echo $count;
			// actionCounter($l->autor)
			// $count = Library::find()
   //  ->where(['autor' => $library->autor])
   //  ->count();
			?></h5></div>
			<div class="col tblElem"><h5><input formaction="http://routeam/web/index.php?r=site%2Flibrary" name="del" type="submit" value="Delete"></h5></div>
<!-- 			<?php
		    if (isset($_POST['del'])) {
		        
		        $post = Library::find()->where(['book_ID' => $l->book_ID]);
		        echo $post;
				$post->delete();
		    }
			?> -->
<!-- $post = Post::findOne(4);
$post->delete(); -->
		</div>
		<!-- <li><b><?=$library->name?></b></li> -->
	<?php }?>
	<div class="row">
		<div class="col tblElem"><input placeholder="book_ID"></div>
		<div class="col tblElem"><input placeholder="autor"></div>
		<div class="col tblElem"><input placeholder="name"></div>
		<div class="col tblElem"><input placeholder="createDate"></div>
		<div class="col tblElem"><b>add or edit</b></div>
	</div>
	<div class="row">
		<div class="col tblElem"><b>refresh</b></div>
		<div class="col tblElem"><b>filter by</b></div>
		<div class="col tblElem"><b>sort by</b></div>
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

<!-- Yii::$app->db->createCommand()->delete('user', 'id = 1')->execute(); -->
