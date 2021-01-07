@extends('layouts.spa')


@section('content')


<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Referral Table</h4>
                  <p class="card-category"> Here is a list of all the people that you reffered</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          User Name
                        </th>
                        <th>
                        Joined At
                        </th>
                      </thead>
                      
                      <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>
                          {{ $user->name }}
                          </td>

                          <td>
                          {{ $user->created_at }}
                          </td>
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

