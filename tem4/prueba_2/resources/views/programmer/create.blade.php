@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Programmer
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear un nuevo registro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('programmers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('programmer.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
