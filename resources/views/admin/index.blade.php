@extends('../mainAdmin')
@section('content')
    <div class="container">
        <h3 class="mb-5 mt-3">Admin Page</h3>

        <div class="card p-5 col-md-6">
            <h6>Se Connecter</h6>
            <form method="post" action="/adminLogin">
                <input class="mb-3 form-control" name="pseudo" value="" type="pseudo" placeholder="username"/>
                <input class="mb-3 form-control" name="password" value="" type="password" placeholder="password"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-primary" type="submit">login</button>
            </form>
        </div>
    </div>
@stop