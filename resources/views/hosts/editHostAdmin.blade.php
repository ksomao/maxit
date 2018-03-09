@extends('../mainAdmin')
@section('content')
    <a class="btn btn-secondary mt-2" href="/dashboard">Back</a>
    <h2 class="mt-5">Edit Host Infos</h2>
    <div>
        <form method="post" class="card p-4 mt-5 col-12 col-md-6" action="/updateHost">
            <input class="mb-3 form-control" name="firstname" value="{{$host->firstname}}" type="text">
            <input class="mb-3 form-control" name="lastname" value="{{$host->lastname}}" type="text">
            <input class="mb-3 form-control" name="email" value="{{ $host->email}}" type="text">
            <input class="mb-3 form-control" name="hostId" value="{{$host->id}}" type="hidden">
            <input class="mb-3 form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-default">edit</button>
        </form>
    </div>
@stop