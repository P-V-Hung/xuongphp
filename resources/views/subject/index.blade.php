@extends('layout.layout')

@section('title')
    <title>Danh sách môn học</title>
@endsection

@section('main-content')
    <h2>Danh sách môn học</h2>
    <form action="deletes" method="POST">
        <table class="table">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên môn học</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
                @foreach($listSubject as $subject)
            <tr>
                <td width="7%"><input type="checkbox" name="{{$subject->id}}" class="checkbox"></td>
                <td width="10%">{{$subject->id}}</td>
                <td>{{$subject->ten_mon_hocc}}</td>
                <td>{{$subject->trang_thai}}</td>
                <td>
                    <a href="update?id={{$subject->id}}">Sửa</a>
                    <a href="delete?id={{$subject->id}}">Xóa</a>
                </td>
            </tr>
                @endforeach
        </table>
    <div class="btn">
        <input id="btn1" type="button" value="Chọn tất cả">
        <input id="btn2" type="button" value="Bỏ chọn tất cả">
        <input type="submit" name="deletes" value="Xóa tất cả mục đã chọn">
        <a class="insert" href="insert">Nhập thêm</a>
    </div>
    </form>
    <p class="msg">{{$_COOKIE['msg']??''}}</p>
    <script>

        let checkbox = document.querySelectorAll(".checkbox");

        document.querySelector("#btn1").onclick = function(){
            for(let i = 0;i<checkbox.length;i++){
                checkbox[i].checked = true;
            }
        }
        document.querySelector("#btn2").onclick = function(){
            for(let i = 0;i<checkbox.length;i++){
                checkbox[i].checked = false;
            }
        }
    </script>
@endsection