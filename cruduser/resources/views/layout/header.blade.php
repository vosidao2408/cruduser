<div class="container mt-3">
<div class="row">
    <div class="col-4 d-flex justify-content-start">
    <form action="{{asset('/users')}}" method="get">
        <button class="btn btn-primary ">Home</button>
    </form>
    </div>
    <div class="col-4">
        <h1 class="text-center text-uppercase ">Users</h1>
    </div>
    <div class="col-4 d-flex justify-content-end">
    <form action="{{asset('/users/create')}}" method="get">
    <button class="btn btn-success ">Create User</button>
    </form>
    </div>
</div>
</div>
</div>