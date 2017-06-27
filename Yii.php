<?php

#if (${TYPE} == 'm' || ${TYPE} == 'M')
namespace app\models;

use Yii;
use yii\base\Model;

#parse("PHP File Header.php")

class ${NAME} extends Model
{

}
#elseif (${TYPE} == 'c' ||  ${TYPE} == 'C')
namespace app\controllers;

use Yii;
use yii\web\Controller;

#parse("PHP File Header.php")

class ${NAME} extends Controller
{

}
#elseif (${TYPE} == 'v')
#parse("PHP File Header.php")

use yii\helpers\Html;
?>

#else

?>
#end
