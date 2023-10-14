
@extends('backend.master')

@section('title','Edit News Blog')


@section('body')


    <div class="row py-5">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit News</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ session('success') }}</span>
                    <form action="{{ route('blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="blog_category_id" id="" class="form-control select2">
                                @foreach ($blogCategories as $blogCategory)
                                    <option value="{{ $blogCategory->id }}" {{ $blogCategory->id == $blog->id ? "selected" : '' }}>{{ $blogCategory->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="summernote" cols="30" rows="10">{{ $blog->description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image"class="form-control">
                                <img src="{{ asset($blog->image) }}" alt="" style="height: 60px">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" {{ $blog->status==1 ? 'checked':'' }} name="status" value="1">Published</label>
                                <label for=""><input type="radio" {{ $blog->status==0 ? 'checked':'' }} name="status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection