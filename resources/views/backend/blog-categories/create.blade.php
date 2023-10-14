@extends('backend.master')

@section('title','Add News Category')


@section('body')


    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Create News Category </h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ session('success') }}</span>
                    <form action="{{ route('blog-categories.store') }}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control">
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
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection