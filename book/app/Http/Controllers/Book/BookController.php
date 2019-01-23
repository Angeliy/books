<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BookModel; //引入空间类元素 就是引入app下面BookModel.php文件夹 里面有个BookModel方法

class BookController extends Controller
{
    public function list()
    {

        //使用BookModel模型来获取数据,获取books表中的数据
        $data = BookModel::all();
        return view('book.list',['data'=>$data]); //第二个参数把数据传递给模板
    }

    //给add方法，添加依赖注入
    public function add(Request $request)
    {
        if($request->isMethod('get')) {
            //显示视图
            return view('book.add');
        }else if($request->isMethod('post')) {
            // 数据处理(收集post表单，插入到数据库中)
            $book = BookModel::create($request->all());
            if($book->save()) {
                //插入成功
                return redirect('/book/list');
            }else {
                //插入失败
                return redirect('/book/add');
            }
        }
    }

    //依赖注入必须放在第一个参数
    public function edt(Request $request,$id)
    {
        if($request->isMethod('get')) {
            $info = BookModel::find($id); //根据主键ID获取对应的一条记录
            //显示视图
            return view('book.edt',['info'=>$info]); //把数据分配给模板
            // return redirect('')
        }elseif ($request->isMethod('post')) {
            //数据处理(收集表单数据，更新到数据库)
            $data = BookModel::find($id)->update($request->all());
            if($data===false) {
                //更新失败
                return redirect('/book/edt.$id');
            }else {
                return redirect('/book/list');
            }
        }
    }
    public function del($id)
    {
        $book = BookModel::find($id);
        $book->delete();
        return redirect('/book/list');
    }
}
