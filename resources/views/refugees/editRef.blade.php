@extends('../mainAdmin')
@section('content')
    <a class="btn btn-secondary mt-2" href="/dashboard">Back</a>
    <h2 class="mt-5">Edit a Refugee Infos</h2>
    <div>
        <form method="post" class="card p-4 mt-5 col-12 col-md-6" action="/editInfos">
            <h6>Contact Name</h6>
            <input class="mb-3 form-control" name="contactName" value="{{$ref->contactName}}" type="text">
            <h6>Nb Adults</h6>
            <input class="mb-3 form-control" name="nbAdult" value="{{$ref->nbAdult}}" type="text">
            <h6>Nb Child</h6>
            <input class="mb-3 form-control" name="nbChild" value="{{ $ref->nbChild}}" type="text">
            <input class="mb-3 form-control" name="refId" value="{{$ref->id}}" type="hidden">
            <input class="mb-3 form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-default" type="submit">edit</button>
        </form>
    </div>
@stop