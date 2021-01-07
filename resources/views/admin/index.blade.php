@extends('layouts.spa')


@section('content')


<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          Name
                        </th>
                        <th>

                        User Name
                        
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          balance
                        </th>

                        <th>
                          Edit
                        </th>

                      </thead>
                      
                      <tbody>
                    
                      @foreach ($users as $user)
                      <form action="{{route('user.edit',$user->id)}}" method="post" class="mr-1">
                      @csrf
                      @method('PUT')
                        <tr>
                          <td>
                          
                      {{ $user->name }}
                          </td>

                          <td>
                          {{ $user->username }}
                          </td>
                         

                          <td>
                          {{ $user->email }}
                          </td>
                         
                          
                          <td>
                          <input type="text" name="balance" value="{{ $user->balance }}">

                          
                          </td>
                          <td>

                          <button type="submit" class="btn btn-primary">edit</button>


                          </td>
                              
                            
                          </form>



                         
                          
                        </tr>
                        @endforeach
                
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection

