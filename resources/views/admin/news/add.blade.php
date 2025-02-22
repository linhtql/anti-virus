@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tiêu đề">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Danh Mục</label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Mô Tả </label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Nội dung bài viết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh Bài Viết</label>
            <input type="file" class="form-control" id="upload">
            <div id="image_show">
            </div>
            <input type="hidden" name="thumb" id="thumb">
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm Bài Viết</button>
    </div>
    @csrf
</form>
@endsection

@section('footer')
<script>
    CKEDITOR.replace('content');
</script>
@endsection
