@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if(Auth::user()->hasRole('superadmin'))
                      <h1>Hello ako si {{Auth::user()->name}}, Isang SUPER ADMIN ng buhay mo!</h1>
                    @endif 

                    @if(Auth::user()->hasRole('admin'))
                      <h1>Hello ako si {{Auth::user()->name}}, Isang MANLOLOKO ng buhay mo!</h1>
                    @endif 

                    @if(Auth::user()->hasRole('iis_section_head'))
                      <h1>Hello ako si {{Auth::user()->name}}, Isang BABAERO ng buhay mo!</h1>
                    @endif 

                    @if(Auth::user()->hasRole('srs_section_head'))
                      <h1>Hello ako si {{Auth::user()->name}}, Isang chix!</h1>
                    @endif 

                    @if(Auth::user()->hasRole('commel_section_head'))
                      <h1>Hello ako si {{Auth::user()->name}}, Isang DYOSA!!</h1>
                    @endif 

                    @if(Auth::user()->hasRole('employee'))
                      <h1>Hello ako si {{Auth::user()->name}}, Isang employee ng bfp!</h1>
                    @endif 


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
