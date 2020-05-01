@extends('layouts.admin')

@section('title')
    {{ __("Add Document") }}
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
              <div class="col-sm-12">

                <div class="card">
                  <div class="card-header">
                    <h5>Enter PDF Document Information</h5>
                  </div>
                  <form class="form theme-form" enctype="multipart/form-data"
                    action="{{ route('admin.document.store') }}" method="post">
                      @csrf
                    <div class="card-body">

                        <div class="row">
                          <div class="col">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="name" class="form-control"
                                    placeholder="Enter the name" required>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Author</label>
                              <div class="col-sm-9">
                                <input type="text" name="author" class="form-control"
                                    placeholder="Enter the author">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Status</label>
                              <div class="col-sm-9">
                                  <div class="form-group m-t-15 custom-radio-ml">
                                      <div class="radio radio-primary">
                                        <input id="radio1" type="radio" name="status" value="1"
                                            checked>
                                        <label for="radio1">Enabled</span></label>
                                      </div>
                                      <div class="radio radio-primary">
                                        <input id="radio4" type="radio" name="status" value="0">
                                        <label for="radio4">Disabled</label>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                      <div class="row">
                        <div class="col">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Upload PDF File</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="file" data-original-title=""
                                name="pdf" required>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="card-footer">
                      <button class="btn btn-primary" type="submit" data-original-title="" title="">Submit</button>
                      <input class="btn btn-light" type="reset" value="Cancel" data-original-title="" title="">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

@endsection
