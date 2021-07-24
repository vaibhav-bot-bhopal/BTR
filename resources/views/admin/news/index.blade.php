@extends('admin.layouts.admin')

@push('css')
    <style>
        .error{
            color:red;
        }
    </style>
@endpush

@section('content')

    @if (session('locale') == 'en')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add News</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add News</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                        <div id="myAlert"></div>
                        <form action="{{ url('admin/news-create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="n_title">News Title</label>
                                <input type="text" class="form-control" id="n_title" name="n_title" value="{{old('n_title')}}" >
                                @error('n_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_data">News Date</label>
                                <input type="date" class="form-control" id="n_date" name="n_date" value="{{old('n_date')}}" >
                                @error('n_date')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_disc">News Description</label>
                                <textarea class="ckeditor form-control" rows="5" id="n_disc" name="n_disc">{{old('n_disc')}}</textarea>
                                @error('n_disc')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <label> Main Images </label>
                                <input type="file" class="form-control-file border" name="n_file">
                                @error('n_file')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <label> Other Images </label>
                                <input type="file" class="form-control-file border" name="n_file_m[]" multiple>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                            <th class="text-center">SNo.</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Discription</th>
                            <th class="text-center">Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                            @php
                                $id=1;
                            @endphp
                            @forelse($data as $data)
                                <tr>
                                    <td class="text-center">{{$id}}</td>
                                    <td width="15%" class="text-center">{{$data->news_title}}</td>
                                    <td width="10%" class="text-center">{{ date('d-m-Y', strtotime($data->news_date)) }}</td>
                                    <td class="w-50 text-justify">{!! Str::limit($data->news_discription, 300, '...') !!}</td>
                                    <td>
                                        <img src="{{asset('public/storage/eng_news/'.$data->news_image)}}" width="200" height="150" class="img-responsive rounded" alt="image">
                                    </td>
                                    <td><a href="{{ url('admin/news-edit') }}/{{$data->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deletePost({{ $data->id }})">Delete</button>
                                        <form id="delete-form-{{ $data->id }}" action="{{ route('news_delete', $data->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @php
                                $id++;
                            @endphp
                            @empty
                                <tr>
                                    <td class="text-center p-5" colspan="9"><h5 class="font-weight-bold">News was not found in our records !!</h5></td>
                                </tr>
                            @endforelse
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->


        <!-- Modal -->
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure, you want to delete this article ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-danger" id="delPost">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('locale') == 'hi')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">समाचार जोड़ें</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">होम</a></li>
                            <li class="breadcrumb-item active">समाचार जोड़ें</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                        <div id="myAlert"></div>
                        <form action="{{ url('admin/news-create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="n_title">न्यूज़ शीर्षक</label>
                                <input type="text" class="form-control" id="n_title" name="n_title" value="{{old('n_title')}}" >
                                @error('n_title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_data">न्यूज़ तारीख</label>
                                <input type="date" class="form-control" id="n_date" name="n_date" value="{{old('n_date')}}" >
                                @error('n_date')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="n_disc">न्यूज़ विवरण</label>
                                <textarea class="ckeditor form-control" rows="5" id="n_disc" name="n_disc">{{old('n_disc')}}</textarea>
                                @error('n_disc')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <label> मुख्य इमेज </label>
                                <input type="file" class="form-control-file border" name="n_file">
                                @error('n_file')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <label> अन्य इमेज </label>
                                <input type="file" class="form-control-file border" name="n_file_m[]" multiple>
                            </div>

                            <button type="submit" class="btn btn-primary">सबमिट</button>
                        </form>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                            <th class="text-center">क्रमांक</th>
                            <th class="text-center">शीर्षक</th>
                            <th class="text-center">तारीख</th>
                            <th class="text-center">डिस्क्रिप्शन</th>
                            <th class="text-center">मुख्य इमेज</th>
                            <th>एडिट</th>
                            <th>डिलीट</th>
                            </tr>
                            @php
                                $id=1;
                            @endphp
                            @forelse($data as $data)
                                <tr>
                                    <td class="text-center">{{$id}}</td>
                                    <td width="15%" class="text-center">{{$data->news_title}}</td>
                                    <td width="10%" class="text-center">{{ date('d-m-Y', strtotime($data->news_date)) }}</td>
                                    <td class="w-50 text-justify">{!! Str::limit($data->news_discription, 300, '...') !!}</td>
                                    <td>
                                        <img src="{{asset('public/storage/hin_news/'.$data->news_image)}}" width="200" height="150" class="img-responsive rounded" alt="image">
                                    </td>
                                    <td><a href="{{ url('admin/news-edit') }}/{{$data->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deletePost({{ $data->id }})">Delete</button>
                                        <form id="delete-form-{{ $data->id }}" action="{{ route('news_delete', $data->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @php
                                $id++;
                            @endphp
                            @empty
                                <tr>
                                    <td class="text-center p-5" colspan="9"><h5 class="font-weight-bold">हमारे रिकॉर्ड में खबर नहीं मिली !!</h5></td>
                                </tr>
                            @endforelse
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

        <!-- Modal -->
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">कन्फर्मेशन</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        क्या आप वाकई इस लेख को हटाना चाहते हैं?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">नहीं, रद्द करें</button>
                        <button type="button" class="btn btn-danger" id="delPost">हाँ, हटाएं</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@push('js')
    <script>
    // Delete Function
    function deletePost(id)
    {
        $("#delModal").modal('show');

        document.getElementById("delPost").addEventListener("click", function(){
            event.preventDefault();
            document.getElementById('delete-form-'+id).submit();
        });
    }
    </script>
@endpush
