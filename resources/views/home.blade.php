@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Students</div>
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('subgroups') }}">Sub Groups</a>
                    <a class="btn btn-primary" href="{{ route('groups') }}">Groups</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Id</th>
                                    <th> Name</th>
                                    <th> Group  </th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($students as $student)
                                  <tr>
                                      <td> {{$student->id}} </td>
                                      <td> {{$student->name}} </td>
                                      <td> {{$student->group==null?'-': $student->group->name}}</td>
                                  </tr>
                                 @endforeach
                           </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
