@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$subgroup->name}}</div>
                <div class="card-body">
                    <form name="groupedStudents" action="{{route('postsubgroup', $subgroup->id)}}" type="GET">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$subgroup->id}}">
                        <select class="custom-select" name="students[]" multiple="multiple"  required>
                            <option disabled="">Select Students for subgroup</option>
                            @foreach($students as $student)
                                @if (in_array($student->id, $selected))
                                    <option value="{{$student->id}}" selected="selected">{{$student->name}}</option>
                                @else
                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <button type="submit" class="btn-info" style="margin-top: 10px;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
