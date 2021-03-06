{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            @if(Auth::check())
                @if(Auth::user()->hasRole('Admin'))

                    <li class="current"><a href=""><i class="glyphicon glyphicon-home"></i>
                            Dashboard</a></li>
                @endif
            @endif
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="http://127.0.0.1:8000/admin/products">Products</a></li>
                    <li><a href="http://127.0.0.1:8000/admin/product/create">Add Product</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Category
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="http://127.0.0.1:8000/admin/category">Add Category</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->
