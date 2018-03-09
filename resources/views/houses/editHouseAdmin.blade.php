@extends('../mainAdmin')
@section('content')
    <a class="btn btn-secondary mt-2" href="/dashboard">Back</a>
    <h2 class="mt-5">Edit House</h2>
    <div>
        <form method="post" class="card p-4 mt-5 col-12 col-md-6" action="/updateHouse">
            <input class="mb-3 form-control" name="address" value="{{$house->address}}">
            <input class="mb-3 form-control" name="nbRoom" value="{{$house->nbRoom}}" type="number">
            <input class="mb-3 form-control" name="houseId" value="{{$house->id}}" type="hidden" checked value={{true}}>
            <select class="mb-3 form-control" name="type">
                <option value="apartement">apartement</option>
                <option value="House">House</option>
            </select>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-defalut">edit</button>
        </form>
    </div>
@stop