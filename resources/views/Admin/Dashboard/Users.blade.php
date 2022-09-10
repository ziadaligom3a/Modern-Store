<x-Admin.Dashboard.main :user="auth()->user()" :pages="$pages"  >
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                    <h3 class="title-42 m-b-625 text-center animate-charcter">Categories table</h3>
                    <br><br>
                    <a href="/admin/home/Users/Add" class="bn62 text-justify text-right">
                        Add User
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

                                    <th>Email</th>

                                    <th>Email Verified</th>
                                    
                                    <th>Date</th>

                                    <th>Role</th>

                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                {{-- @dd($Categories) --}}
                                @if(count($users) == 0)
                                <h2 style="text-align: center">There are no Users here</h2>
                                <br>
                                <br>
                                <br>
                                @endif
                                @foreach($users as $user)



                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>

                                   
                                   
                 
                                    <td><img src="{{ $user->img }}" alt="" width="203" height="160"></td>

                                    <td>
                                        <span class="block-name animate-charcter">{{ $user->name }}</span>
                                    </td>


                                    <td><h5  style="font-family: Arial, Helvetica, sans-serif;">{{ $user->email }}</h5></td>

                                    <td><h5>{{ $user->email_verified_at == null ? 'NULL' : $user->email_verified_at }}</h5></td>

                                    <td><h5>{{ $user->created_at->diffForHumans() }}</h5></td>
                                 
                                    <td>                                        
                                        <span class="block-name animate-charcter">{{ $user->role }}</span>
                                    </td>

                                    <td>
                                        <div class="table-data-feature">
                                            <a href="/admin/home/Users/Edit/{{ $user->id }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                                           <form action="/admin/home/Users/Delete" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
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