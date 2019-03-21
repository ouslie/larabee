@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-content">
            <h4 class="card-title">Mes ruchers</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nom</th>                       
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($apiary as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td class="td-actions text-right">

            <a href="{{ route('apiary.edit',$d->id)}}" class="btn btn-success btn-simple">
    <i class="material-icons">edit</i>
</a>

                  <form action="{{ route('apiary.destroy', $d->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" rel="tooltip" class="btn btn-danger btn-simple">
                  <i class="material-icons">close</i>
                  </button>

                </form>
</td>

        </tr>
        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>

@endsection
