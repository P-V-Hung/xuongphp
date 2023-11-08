@extends('layout.layout')

@section('title')
    <title>Sửa môn học</title>
@endsection

@section('main-content')
    <h2>Sửa môn học</h2>
    <form action="save-update?id={{$subject->id}}" method="POST" class="form">
        <div class="form-control">
            <label class="form-label" for="">Tên môn học</label>
            <input class="form-input" type="text" name="ten_mon_hoc" value="{{$subject->ten_mon_hoc??''}}">
        </div>
        <div class="form-control">
            <label class="form-label" for="">Trạng thái</label>
            <select class="form-input" name="trang_thai" id="">
                <option value="0">Đang học</option>
                <option value="1" {{($subject->trang_thai == 1)?'selected':''}}>Không học</option>
            </select>
        </div>
        <div class="form-control btn">
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Sửa môn học" name="btn_insert">
            <a class="insert" href="list">Danh sách</a>
        </div>
    </form>
@endsection
