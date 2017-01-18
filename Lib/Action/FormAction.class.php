<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/18
 * Time: 22:03
 */
class FormAction extends Action
{
    public function insert()
    {
        $Form = D('Form');
        if($Form->create()){
            $result = $Form->add();
            if($result){
                $this->success('操作成功');
            }else{
                $this->error('错误');
            }
        }else{
            $this->error($Form->getError());
        }
    }

    public function read($id=0){
        $Form = M('Form');
        $data = $Form->find($id);
        if($data){
            $this->data = $data;
        }else{
            $this->error('数据错误');
        }
        $this->display();
    }

    public function edit($id=0){
        $Form = M('Form');
        $this->vo = $Form->find($id);
        $this->display();
    }
    public function update(){
        $Form = D('Form');
        if($Form->create()){
            $result = $Form->save();
            if($result){
                $this->success('操作成功');
            }else{
                $this->error('写入错误');
            }
        }else{
            $this->error($Form->getError());
        }
    }
}