<?php


namespace app\controller;


use app\BaseController;
use think\facade\View;

class Authority extends BaseController
{
    /**
     * 添加权限
     */
    public function authorityAdd()
    {
        View::assign([
            'editData' => '{}'
        ]);
        View::fetch();
    }
}