@extends('admin.layout.admin')
@section('content')
    <div class="container">
        <h3>Add Category</h3>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <form action="{{url('admin/addCategory')}}" method="POST" class="form-horizontal">
                @csrf
                <!-- Task Name -->
                    <div class="form-group">
                        <label for="category-name" class="col-sm-3 control-label">Category</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="" required>
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Category
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
