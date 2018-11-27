@extends('layouts.dashboard')

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">

                <div class="alerts">
                    <div class="row">
                        @include('layouts.partials.home-messages')
                    </div>
                </div> 


        </div>
</div>

@endsection