@extends('backOffice.base')


@section('title', 'Home')




@section('body')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Category</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <a href="{{url('back/category')}}" class="btn btn-primary btn-sm float-end"> back </a>
                                <div class="card-title">
                                    <h4>Create Category</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ url('back/category') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>name</label>
                                                <input type="text" name="name" class="form-control"  placeholder="Name"/>
                                                @error('name')<small class="text-bg-danger">{{$message}}</small> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" name="description"
                                                       placeholder="Description"/>
                                                @error('description')<small
                                                    class="text-bg-danger">{{$message}}</small> @enderror
                                            </div>

                                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>

@endsection
