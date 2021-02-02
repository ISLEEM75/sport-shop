@extends('admin.layout.admin')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Products
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @elseif(Session::has('flash_message'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
            @endif


            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Product</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)


                        <tr>
                            <td class="table-text left" >
                                <div>{{$product->name}}</div>
                            </td>

                            <!-- Task Delete Button -->
                            <td>
                                <form action="{{url('product/destroy/'.$product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{url('product/edit/'.$product->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-refresh"></i>Edit
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{url('show/'.$product->id)}}" method="POST">
                                    <img src="/images/{{$product->image}}" width="50" height="">
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
@endsection
