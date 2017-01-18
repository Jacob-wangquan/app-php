<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/18
 * Time: 22:28
 */

class FormModel extends Model {
    protected $_validate = array(
        array('title','require','标题必须'),
    );

    protected $_auto = array(
        array('create_time','time',1,'function')
    );
}