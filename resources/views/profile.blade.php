
@extends('main')
@section('content')
    <div class="login-page">
        <div class="form">
            <h1>Update Information Host</h1>
            <form method="post" action="/updateHost">
                <input name="firstname" placeholder="Prénom" type="firstname" value={{$infoProfile[0]->firstname}}>
                <input name="lastname" placeholder="Nom" type="lastname" value={{$infoProfile[0]->lastname}}>
                <input name="email" placeholder="E-mail" type="email" value={{$infoProfile[0]->email}}>
                <button type="submit">Valider</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@stop


