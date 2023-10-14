@extends('backend.master')

@section('title','Manage Category')

@section('body')

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>Manage News Category</h3>
            </div>
            <div class="card-body">
                <span class="text-success">{{ session('success') }}</span>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogCategories as $blogCategory)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blogCategory->name }}</td>
                            <td>{{ $blogCategory->status==1 ? 'Published' : 'Unpulished' }}</td>
                            <td class="d-flex">
                                <a href="{{ route('blog-categories.edit',$blogCategory->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('blog-categories.destroy',$blogCategory->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger ms-3" >Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection