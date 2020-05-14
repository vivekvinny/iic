@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subgroups</div>
                <div class="card-body">
                  @foreach($subgroups as $subgroup)
                    <a class="btn btn-primary" href="{{ route('subgroup', $subgroup->id) }}">{{$subgroup->name}}</a>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
