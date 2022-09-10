<x-Admin.Dashboard.main :user="$user" :pages="$pages"  >
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <h3 class="title-42 m-b-625 text-center animate-charcter">Categories table</h3>
                    <br><br>
                    <a href="/admin/home/CategoryAdd" class="bn62 text-justify text-right">
                        Add Category
                      </a>  
                      <br>
                      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Product.." title="Type in a name">
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>


                                   
                                    <th>Image</th>

                                    <th>Name</th>

                                    <th>Slug</th>

                                    <th>Date</th>

                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                {{-- @dd($Categories) --}}
                                @if(count($Categories) == 0)
                                <h2 style="text-align: center">There are no Categories here</h2>
                                <br>
                                <br>
                                <br>
                                @endif
                                @foreach($Categories as $category)



                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>

                                   
                                   
                 
                                    <td><img src="{{ $category->img }}" alt="" width="203" height="160"></td>

                                    <td>
                                        <a href="/categories/{{ $category->slug }}" target="_blank"><span class="block-name animate-charcter">{{ $category->name }}</span></a>
                                    </td>


                                    <td><h5  style="font-family: Arial, Helvetica, sans-serif;">{{ $category->slug }}</h5></td>

                                    <td><h5>{{ $category->created_at->diffForHumans() }}</h5></td>

                                 
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="/admin/home/CategoryEdit/{{ $category->id }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                                           <form action="/admin/home/CategoryDelete" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $category->id }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="spacer"></tr>
                               @endforeach
                               
      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-Admin.Dashboard.main>