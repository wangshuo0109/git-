<?php

if (isset($_POST['name'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    require_once 'DAOPDO1.class.php';
    $configs=array(
        'dbname'=>'study'
    );
    $dao=DAOPDO1::getSingleton($configs);
    $sql="insert into xinxi values (null,'$name','$pass','$email')";
    $p1=$dao->query($sql);
    if($p1==true){
        $arr=array(
            'code'=>2,
            'msg'=>'增加成功'
        );
        echo json_encode($arr);
    }else{
        $p1=array(
            'code'=>3,
            'msg'=>'增加失败'
        );
        echo json_encode($arr);

    }
}else{
    $id=$_POST['id'];
    require_once 'DAOPDO1.class.php';
    $configs=array(
        'dbname'=>'study'
    );
    $dao=DAOPDO1::getSingleton($configs);
    $sql="delete from xinxi where id=$id";
    $res=$dao->query($sql);
    if($res==true){
        $arr=array(
            'code'=>0,
            'msg'=>'删除成功'
        );
        echo json_encode($arr);
    }else{
        $arr=array(
            'code'=>1,
            'msg'=>'删除失败'
        );
        echo json_encode($arr);

    }
}
