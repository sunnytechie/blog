@extends('layouts.app')
@section('content')

<section style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="cognito">
                    <script src="https://www.cognitoforms.com/s/s1IUDZoZK0-8umGpjWbf2A"></script>
                    <script>Cognito.load("forms", { id: "11" });</script>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection