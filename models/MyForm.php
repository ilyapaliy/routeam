<?php

namespace app\Models;

use Yii;
use yii\base\Model;

class MyForm extends Model {

	public $name;

	public function rules() {
		return [
			['name'], 'required'];
	}
}

?>