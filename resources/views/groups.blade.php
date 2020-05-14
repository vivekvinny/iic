@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Groups</div>
                <div class="card-body">
                  @foreach($groups as $group)
                    <a class="btn btn-primary" href="{{ route('group', $group->id) }}">{{$group->name}}</a>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
