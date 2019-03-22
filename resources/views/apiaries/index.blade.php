
        <a href="#modalForm" data-toggle="modal" data-href="{{url('apiaries/create')}}"
           class="btn btn-primary">New</a>



<div class="col-md-12">
    <div class="card">
        <div class="card-content">
            <h4 class="card-title">Mes ruches</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <tr>
                        <th>
                            <a href="javascript:ajaxLoad('{{url('apiaries?field=id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    #
                </a>
                {{request()->session()->get('field')=='id'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}

                            </th>
                            <th>
                            <a href="javascript:ajaxLoad('{{url('apiaries?field=name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Name
                </a>
                {{request()->session()->get('field')=='name'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}

                            </th>
                            <th>
                            <a href="javascript:ajaxLoad('{{url('apiaries?field=frame&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Frame
                </a>
                {{request()->session()->get('field')=='frame'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
           

                        </th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

        
        @php
            $i=1;
        @endphp
        @foreach($apiaries as $apiary)
            <tr>
                <td>{{ $apiary->id }}</td>
                <td>{{ $apiary->name }}</td>
                <td>{{ $apiary->frame }}</td>
               
            
                <td class="td-actions text-right">

                    <a class="btn btn-success btn-simple" title="Edit" href="#modalForm" data-toggle="modal"
                       data-href="{{url('apiaries/update/'.$apiary->id)}}">
                                                            <i class="material-icons">edit</i></a>
                    <input type="hidden" name="_method" value="delete"/>
                    <a class="btn btn-danger btn-simple" title="Delete" data-toggle="modal"
                       href="#modalDelete"
                       data-id="{{$apiary->id}}"
                       data-token="{{csrf_token()}}">
                       <i class="material-icons">close</i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <nav>
        <ul class="pagination justify-content-end">
            {{$apiaries->links('vendor.pagination.bootstrap-4')}}
        </ul>
    </nav>
</div>