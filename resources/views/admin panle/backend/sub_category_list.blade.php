<!-- DataTales Example -->
@extends('admin panle.backend.admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h1 text-gray-900 mb-4"> Sub Categorys List</h1>
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Id</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>creater At</th>
                        <th>Oprations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subcategories as $subcategory)
                    <tr>
                        <td>{{$subcategory['id']}}</td>
                        <td>{{$subcategory['category_id']}}</td>
                        <td>{{$subcategory['title']}}</td>
                        <td>{{$subcategory['status']}}</td>
                        <td>{{$subcategory['photo']}}</td>
                        <td>{{date('d-m-y',strtotime($subcategory['created_at']))}}</td>
                        <td> <a href="{{route('subcategories.edit',encrypt($subcategory['id']))}}" class="btn-primary btn-sm">Edit</a>
                            <a href="{{route('delete-subcategory',$subcategory['id'])}}" class="btn btn-danger btn-sm">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection