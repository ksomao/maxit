@extends('../mainAdmin')
@section('content')
    <a class="btn btn-secondary mt-2" href="/dashboard">Back</a>
    <h2 class="mt-5">Add a Refugee</h2>
    <div>
        <form method="post" class="card p-4 mt-5 col-12 col-md-6" action="/addtolist">
            <h6>Contact Name</h6>
            <input class="mb-3 form-control" name="contactName" value="" type="text"/>
            <h6>Nb Adults</h6>
            <input class="mb-3 form-control" name="nbAdult" value="" type="number"/>
            <h6>Nb child</h6>
            <input class="mb-3 form-control" name="nbChild" value="" type="number"/>

            <input class="mb-3 form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-default" type="submit">Submit</button>
        </form>
    </div>
@stop