@extends("students.layout")
@section("content")
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headr">
                    <h1>Laravel 9 - CRUD</h1>
                </div>
                <div class="card-body">
                    <a href="{{ url('/student/create')}}" class="btn btn-success btn-sm" title="Add new student">
                        Add new Student
                    </a>
                </div><br><br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->mobile}}</td>



                                <td>
                                    <a href="{{ url('/student/'.$item->id)}}" title="View Student"><button
                                            class="btn btn-info bnt-ms"><i class="fa fa-eye"
                                                aria-hiden="true"></i>View</button></a>

                                    <a href="{{ url('/student/'.$item->id.'/edit')}}" title="Edit Student"><button
                                            class="btn btn-primary bnt-ms"><i class="fa fa-pencil-square-o"
                                                aria-hiden="true"></i>Edit</button></a>

                                    <form action="" method="POST" accept-charset="UTF-8" style="display:inline"></form>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete student"><i
                                            class="fa fa-eye" aria-hiden="true"></i>Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection