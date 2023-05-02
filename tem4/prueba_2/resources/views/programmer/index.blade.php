@extends('layouts.app')

@section('template_title')
    Programmer
@endsection

@section('content')
    <div class="container">
        <div class="slider">
            <div class="slide">
                <img src="{{ asset('images/ima1.jpg') }}" alt="Imagen 1">
                <h2>Título de la imagen 1</h2>
            </div>
            <div class="slide">
                <img src="{{ asset('images/ima2.jpg') }}" alt="Imagen 2">
                <h2>Título de la imagen 2</h2>
            </div>
            <div class="slide">
                <img src="{{ asset('images/ima3.jpg') }}" alt="Imagen 3">
                <h2>Título de la imagen 3</h2>
            </div>
        </div>

        <div class="grid">
            <div class="column">
                <img src="{{ asset('images/ima4.jpg') }}" alt="Imagen 4">
                <h3>Título de la imagen 4</h3>
                <p>Descripción de la imagen 4</p>
                <button class="btn btn-primary cover">Abrir modal</button>
            </div>
            <div class="column">
                <img src="{{ asset('images/ima5.jpg') }}" alt="Imagen 5">
                <h3>Título de la imagen 5</h3>
                <p>Descripción de la imagen 5</p>
                <button class="btn btn-primary cover">Abrir modal</button>
            </div>
            <div class="column">
                <img src="{{ asset('images/ima6.jpg') }}" alt="Imagen 6">
                <h3>Título de la imagen 6</h3>
                <p>Descripción de la imagen 6</p>
                <button class="btn btn-primary cover">Abrir modal</button>
            </div>
        </div>

        <div class="modal">
            <div class="modal-content">
                <img src="{{ asset('images/ima1.jpg') }}" alt="Imagen modal">
                <h3>Título de la imagen modal</h3>
                <p>Descripción de la imagen modal</p>
                <button class=" btn btn-primary close">Cerrar modal</button>
            </div>
        </div>


    </div>

    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                              Programador
                            </span>

                             <div class="float-right">
                                <a href="{{ route('programmers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear registro') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Apellido</th>
										<th>Edad</th>
										<th>Email</th>
										<th>Habilidades</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programmers as $programmer)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $programmer->nombre }}</td>
											<td>{{ $programmer->apellido }}</td>
											<td>{{ $programmer->edad }}</td>
											<td>{{ $programmer->email }}</td>
											<td>{{ $programmer->habilidades }}</td>

                                            <td>
                                                <form action="{{ route('programmers.destroy',$programmer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('programmers.edit',$programmer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $programmers->links() !!}
            </div>
        </div>
    </div>
@endsection
