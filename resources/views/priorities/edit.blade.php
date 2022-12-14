@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Priority edit</div>
                <div class="card-body">
                    <form method="POST" action="{{route('priorities.update', $priority->id)}}">
                        @csrf
                        @method("PUT")
                       <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type='text' class="form-control" name="name" value="{{ $priority->name }}">
                       </div> 
                       <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection