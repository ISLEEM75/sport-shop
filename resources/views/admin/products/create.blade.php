@extends('admin.layout.admin')

@section('content')
    <div class="container">
        <h3>Add Product</h3>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (isset($product))
                    <form action="{{url('product/update/'.$product->id)}}" method="POST" class="form-horizontal"
                          enctype="multipart/form-data">
                        @csrf @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" required="" minlength="5" name="name" type="text" id="name"value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input class="form-control" name="description" type="text" id="description"value="{{$product->description}}"required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" name="price" type="text" id="price"value="{{$product->price}}"required>
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select class="form-control" id="size" name="size">
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="size">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option value="Male">Male</option>
                                <option value="Female"> Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Categories</label>
                            <select class="form-control" id="category_id" name="category">
                                <option selected="selected" value="">Select Category</option>
                                @foreach($categories as $catecory )
                                    <option value="">{{$catecory->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" value="{{$product->image}}" required>
                        </div>

                        <input class="btn btn-default" type="submit" value="Update Product">
                    </form>
                @else
                    <form action="{{url('admin/product/addProduct')}}" method="POST" class="form-horizontal"
                          enctype="multipart/form-data">
                    @csrf
                    <!-- Task Name -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" required="" minlength="5" name="name" type="text" id="name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input class="form-control" name="description" type="text" id="description">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" name="price" type="text" id="price"required>
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select class="form-control" id="size" name="size">
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="size">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option value="Male">Male</option>
                                <option value="Female"> Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Categories</label>
                            <select class="form-control" id="category_id" name="categories" required>
                                <option selected="selected" value="">Select Category</option>
                                @foreach($categories as $catecory )
                                    <option value="{{$catecory->name}}">{{$catecory->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control" value="">
                        </div>

                        <input class="btn btn-default" type="submit" value="ADD Product">
                    </form>

                @endif

            </div>
        </div>
    </div>
@endsection
