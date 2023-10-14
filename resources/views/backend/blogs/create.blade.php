
@extends('backend.master')

@section('title','Add News Blog')


@section('body')


    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Create News</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ session('success') }}</span>
                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="blog_category_id" id="" class="form-control select2">
                                @foreach ($blogCategories as $blogCategory)
                                    <option value="{{ $blogCategory->id }}">{{ $blogCategory->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control" id="summernote" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" checked name="status" value="1">Published</label>
                                <label for=""><input type="radio"  name="status" value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection