@extends('../mainAdmin')
@section('content')
    <a class="btn btn-secondary mt-2 mb-5" href="/dashboard">Back</a>
    <div class="container col-md-8">
        <h2 class="mb-5">Link a house with a Refugee</h2>
        <div class="card p-5">
            <h3 class="text-primary">{{ $house->address}}</h3>
            <p><span class="font-weight-bold">Number of room </span>: {{ $house->nbRoom}}</p>
            <p><span class="font-weight-bold">Type </span>: {{ $house->type}}</p>
            <p><span class="font-weight-bold">Available </span>: {{ $house->free ? 'yes' : 'no' }}</p>
            <h6 class="text-primary">Refugees Contact</h6>
            <form method="post" action="/link">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="houseId" value="{{ $house->id }}">
                <div>
                    <select class="mb-3 form-control" name="refugeeId">
                        @foreach ($refugeeList as $ref)
                            <option value="{{$ref->id}}">{{$ref->contactName}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <button class="btn btn-default">Link</button>
            </form>
        </div>
    </div>

@stop

