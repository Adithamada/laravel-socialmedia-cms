@extends('layouts.main-in')

@section('content')
<i class="bi bi-arrow-left text-light fs-4 "></i>
<div class="my-3" >
    <h4 class="text-light">Create Post</h4>
    <form action="">
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Title...">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Description...">
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" placeholder="Description...">
        </div>
        <div class="mb-3 text-end">
            <button class="btn btn-secondary text-end">Post</button>
        </div>
    </form>
</div>
@endsection