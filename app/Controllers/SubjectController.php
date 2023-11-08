<?php

namespace App\Controllers;

use App\Models\SubjectModel;

class SubjectController extends BaseController
{
    private static $model;
    public function __construct(){
        self::$model = new SubjectModel();
    }
    public function index(){
        $listSubject = self::$model->getAll();
        parent::render('subject.index',[
            'listSubject' => $listSubject
        ]);
    }

    public function add(){
        parent::render('subject.add');
    }

    public function saveAdd(){
        $data = $_POST;
        self::$model->fill($data);
        self::$model->save();
        setcookie('msg',"Thêm môn học thành công",time() + 1);
        header("location: list");
    }

    public function delete(){
        $id = (isset($_GET['id']) && (!empty($_GET['id']))) ? $_GET['id'] : null;
        setcookie('msg',"Lỗi đường dẫn",time() + 1);
        if($id){
            self::$model->remote($id);
            setcookie('msg',"Xóa môn học thành công",time() + 1);
        }
        header("location: list");
    }

    public function deletes(){
        $listDelete = $_POST;
        $keys = array_keys($listDelete);
        $btn = array_pop($keys);
        self::$model->remote($keys);
        setcookie('msg',"Xóa thành công những môn học đã chọn",time() + 1);
        header("location: list");
    }

    public function update(){
        $id = (isset($_GET['id']) && (!empty($_GET['id']))) ? $_GET['id'] : null;
        if(!$id){
            setcookie('msg',"Lỗi đường dẫn",time() + 1);
            header("location: list");
            die();
        }
        $subject = self::$model->getSubject($id);
        if(empty($subject)){
            setcookie('msg',"Id không tồn tại",time() + 1);
            header("location: list");
            die();
        }
        parent::render('subject.update',[
            'subject' => $subject
        ]);
    }

    public function saveUpdate(){
        $id = $_GET['id'];
        $data = $_POST;
        $modelUpdate = self::$model->getSubject($id);
        $modelUpdate->fill($data);
        $modelUpdate->save();
        setcookie('msg',"Sửa thành công",time() + 1);
        header('Location: list');
    }
}