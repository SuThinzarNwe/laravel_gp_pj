@extends('categories.app')

@section('content')

  <section class="category-section">
     <div class="category-card-header clearfix">
      <h4 class="category-header">Manage <span>Categorys</span></h4>
      <a href="{{ route('categories.create') }}" class="btn add-btn add-category">Add New Category</a>
     </div><!-- ./rider-card-header -->
     <div class="card-body">
       <div class="category-func clearfix">
         <form action="" method="" class="l-category-func">
           <input type="text" name="categories" id="categories" placeholder="Search">
           <input type="submit" value="Search" class="btn edit-btn">
         </form>
          <div class="r-category-func">
            <a href="" class="btn add-btn">Download</a>
            <a href="" class="btn add-btn">Upload</a>
          </div>
       </div>
       <table style="border: 1px solid #000; width: 100%;">
         <thead>
           <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Count</th>
             <th>Operaions</th>
           </tr>
         </thead>
         <tbody style='text-align:center;'>
           @foreach ($categories as $category)
           <tr>
             <td>{{ $category->id }}</td>
             <td>{{ $category->name }}</td>
             <td>{{ $category->phone }}</td>
             <td>{{ $category->email }}</td>
             <td>{{ $category->address }}</td>
             <td>{{ $category->status }}</td>
             <td>{{ $category->created_at }}</td>
             <td>
              <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn edit-btn">Edit</a>
              <form action="{{ url('admin/category/'.$category->id) }}" onsubmit="return confirm('Are you sure to delete?');" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn delete-btn" type="submit">Delete</button>
              </form>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
     </div><!-- ./card-body -->

  </section>
@endsection