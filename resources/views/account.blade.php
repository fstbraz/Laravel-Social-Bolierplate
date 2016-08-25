@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your Account</h3></header>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="name">
                </div>
                <div class="form-group">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
               {{ csrf_field() }}
            </form>
        </div>
    </div>
    @if (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
        <div class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <img src="{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
            </div>
        </div>
    @endif
</div>
@endsection
