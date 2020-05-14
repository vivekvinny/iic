@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$group->name}}</div>
                <div class="card-body">
                    <form name="groupedSubgroups" action="{{route('postgroup', $group->id)}}" type="GET">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$group->id}}">
                        <select class="custom-select" name="subgroups[]" multiple="multiple"  required>
                            <option disabled="">Select Subgroups for group</option>
                            @foreach($subgroups as $subgroup)
                                @if (in_array($subgroup->id, $selected))
                                    <option value="{{$subgroup->id}}" selected="selected">{{$subgroup->name}}</option>
                                @else
                                    <option value="{{$subgroup->id}}">{{$subgroup->name}}</option>
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
