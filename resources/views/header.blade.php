<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
{{--        <a class="navbar-brand text-primary" style="font-size: xx-large; font-weight: bolder" href="#">Laravel CRUD</a>--}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page"
                       style="font-size: 16px;" href="{{ route('product.list') }}"><b>Products List</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="font-size: 16px;" href="{{ route('create.product') }}"><b>Create Product</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
