<!-- DataTales Example -->
@extends('admin panle.backend.admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h1 text-gray-900 mb-4"> Blog List</h1>
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>SubCategory</th>
                        <th>Title</th>
                        <th>Discription</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Creater At</th>
                        <th colspan="2">Oprations</th>
                        <!-- <th>Creater At</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($blog as $item)
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->subcategory->title}}</td>
                        <td>{{$item['title']}}</td>
                        <td>{{$item['discription']}}</td>
                        <td>{{$item['status']}}</td>
                        <td>{{$item['photo']}}</td>
                        <td>{{date('d-m-y',strtotime($item['created_at']))}}</td>
                        <td><a href="{{route('blog.edit',encrypt($item['id']))}}" class="btn-primary btn-sm">Edit</a></td>
                        <td><a href="{{route('delete-blog',encrypt($item['id']))}}" class="btn btn-danger btn-sm">delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection