@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-6">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                  <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection

<!-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere suscipit culpa nobis id incidunt ducimus perferendis, dolore, omnis, architecto itaque quaerat dolores praesentium! Recusandae esse quisquam voluptatum porro accusamus tempora ullam, et possimus unde accusantium deleniti! Illo recusandae voluptas ab fuga et consectetur aut nobis minus ratione pariatur officiis reprehenderit, animi quisquam mollitia ullam aspernatur, esse impedit, consequatur aliquid at possimus nulla nostrum excepturi laboriosam? Ducimus sapiente suscipit facere reiciendis nobis consequatur rerum! Modi dicta nam cumque culpa ipsum ratione error dolor debitis. 

Iure, eum! Aliquid repudiandae expedita doloribus laboriosam alias facere totam vitae. Sequi necessitatibus explicabo eaque, quos ad laudantium cumque aperiam aut ipsa aliquam doloremque cum sunt. Inventore aut distinctio nihil assumenda quam corrupti doloremque recusandae repellat unde quia laboriosam facilis laborum molestias consequuntur libero vero excepturi eaque esse enim praesentium, ullam quod voluptate id. Nemo earum at quas, debitis veniam, doloribus voluptas amet laboriosam quos magni tenetur nesciunt. 

Doloribus sint, quia iusto quibusdam ut a. Dolorem tempore et, cupiditate ipsam velit laborum sed asperiores ad nesciunt laudantium in, delectus itaque! Laudantium ipsa, amet nihil suscipit deleniti odit alias a. Assumenda accusantium ab corrupti deserunt incidunt tempora vitae voluptas explicabo, quibusdam perferendis vel repellendus odit voluptatibus iste magni! -->