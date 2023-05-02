@extends('layouts.app')

@section('template_title')
    {{ $programmer->name ?? "{{ __('Show') Programmer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Programmer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programmers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $programmer->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $programmer->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $programmer->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $programmer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Habilidades:</strong>
                            {{ $programmer->habilidades }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
