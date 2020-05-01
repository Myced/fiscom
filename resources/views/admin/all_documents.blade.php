@extends('layouts.admin')

@section('title')
    {{ __("All Document") }}
@endsection

@section('content')

    @include('includes.admin.notifications')

    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col">
            <div class="page-header-left">
              <h3>Documents</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.document.create') }}">
                        <i data-feather="home"></i>
                    </a>
                </li>

              </ol>
            </div>
          </div>

          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>

    <div class="container-fluid">
            <div class="row">
              <!-- Individual column searching (text inputs) Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>All Documents </h5>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table" id="basic-1">
                        <thead>
                          <tr>
                              <th>S/N</th>
                            {{-- <th>Details</th> --}}
                            <th>Name</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp

                            @foreach($documents as $document)
                                <tr>
                                    <td>
                                        {{ $count++ }}
                                    </td>
                                  {{-- <td>
                                      <img src="http://admin.pixelstrap.com/endless/assets/images/ecommerce/product-table-1.png" alt="">
                                  </td> --}}
                                    <td>
                                        <span>
                                            {{ $document->name }}
                                        </span>
                                    </td>
                                    <td> {{ $document->author }} </td>
                                    @if($document->active)
                                        <td class="font-success">Active</td>
                                    @else
                                        <td class="font-danger">InActive</td>
                                    @endif
                                    <td>
                                        <button class="btn btn-danger" type="button"
                                            data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Individual column searching (text inputs) Ends-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

@endsection
