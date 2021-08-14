@extends('admin.layouts.admin')

@push('css')

@endpush

@section('content')

    @if (session('locale') == 'en')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Upload Tender</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Upload Tender</li>
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
                        <form action="{{ url('admin/tender-create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="ten_title">Title</label>
                                <input type="text" class="form-control @error('ten_title') is-invalid @enderror" id="ten_title" name="ten_title" value="{{old('n_title')}}" placeholder="Enter Tender Title">
                                @error('ten_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ten_desc">Description</label>
                                <textarea class="ckeditor form-control @error('ten_desc') is-invalid @enderror" rows="5" id="ten_desc" name="ten_desc">{{old('n_desc')}}</textarea>
                                @error('ten_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ldata">Select Tender Last Date</label>
                                <input type="datetime-local" class="form-control @error('ldate') is-invalid @enderror" id="ldate" name="ldate" value="{{old('ldate')}}" >
                                @error('ldate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ten_file">Upload File</label>
                                <input type="file" class="form-control-file border @error('ten_file') is-invalid @enderror" name="ten_file">
                                @error('ten_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
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
                            <th class="text-center">Description</th>
                            <th class="text-center">Last Date</th>
                            <th class="text-center">Document Type</th>
                            <th class="text-center">File Size</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                            <th class="text-center">Download</th>
                            </tr>
                            @php
                                $id=1;
                            @endphp
                            @forelse($data as $data)
                                <tr>
                                    <td class="text-center">{{$id}}</td>
                                    <td width="15%" class="text-center">{{$data->title}}</td>
                                    <td class="text-justify">{!! Str::limit($data->description, 200, '...') !!}</td>
                                    <td>{{ date('d-M-Y',strtotime($data->last_date)) }}</td>
                                    <td class="text-center">
                                        @if ($data->file_extension)
                                            @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                                <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="24" height="24" class="img-responsive rounded" alt="doc-image">
                                            @endif

                                            @if ($data->file_extension == 'xls' || $data->file_extension == 'xlsx')
                                                <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" width="24" height="24" class="img-responsive rounded" alt="doc-image">
                                            @endif

                                            @if ($data->file_extension == 'pdf')
                                                <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="28" height="28" class="img-responsive rounded" alt="doc-image">
                                            @endif
                                        @endif
                                    </td>
                                    <td width="10%" class="text-center">
                                        @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                            <span class="badge badge-primary" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($data->file_size) }}</span>
                                        @endif

                                        @if ($data->file_extension == 'xls' || $data->file_extension == 'xlsx')
                                            <span class="badge badge-success" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($data->file_size) }}</span>
                                        @endif

                                        @if ($data->file_extension == 'pdf')
                                            <span class="badge badge-danger" style="font-size: 14px;">{{ HumanReadable::bytesToHuman($data->file_size) }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center"><a href="{{ url('admin/tender-edit') }}/{{$data->id}}" class="btn btn-sm btn-primary"><i class="far fa-edit" style="margin-right: 5px;"></i>Edit</a></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteTender({{ $data->id }})"><i class="fa fa-trash-alt" style="margin-right: 5px;"></i>Delete</button>
                                        <form id="delete-form-{{ $data->id }}" action="{{ route('btr.tender.delete', $data->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('btr.tender.download', $data->filename) }}" class="btn btn-sm btn-success"><i class="fa fa-download" style="margin-right: 5px;"></i>Download</a>
                                    </td>
                                </tr>
                            @php
                                $id++;
                            @endphp
                            @empty
                                <tr>
                                    <td class="text-center p-5" colspan="9"><h5 class="font-weight-bold">Tender was not found in our records !!</h5></td>
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
                        Are you sure, you want to delete this tender ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-danger" id="delTender">Yes, Delete</button>
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
                        <h1 class="m-0">निविदा अपलोड करें</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">होम</a></li>
                            <li class="breadcrumb-item active">निविदा अपलोड करें</li>
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
                        <form action="{{ url('admin/tender-create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="ten_title">शीर्षक</label>
                                <input type="text" class="form-control @error('ten_title') is-invalid @enderror" id="ten_title" name="ten_title" value="{{old('n_title')}}" placeholder="निविदा शीर्षक दर्ज करें">
                                @error('ten_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ten_desc">विवरण</label>
                                <textarea class="ckeditor form-control @error('ten_desc') is-invalid @enderror" rows="5" id="ten_desc" name="ten_desc">{{old('n_desc')}}</textarea>
                                @error('ten_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ldata">निविदा अंतिम तिथि का चयन करें</label>
                                <input type="datetime-local" class="form-control @error('ldate') is-invalid @enderror" id="ldate" name="ldate" value="{{old('ldate')}}" >
                                @error('ldate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ten_file">फ़ाइल अपलोड करें</label>
                                <input type="file" class="form-control-file border @error('ten_file') is-invalid @enderror" name="ten_file">
                                @error('ten_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">सेव</button>
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
                                <th class="text-center">विवरण</th>
                                <th class="text-center">अंतिम तिथी</th>
                                <th class="text-center">दस्तावेज़ का प्रकार</th>
                                <th class="text-center">फाइल का आकार</th>
                                <th class="text-center">एडिट</th>
                                <th class="text-center">डिलीट</th>
                                <th class="text-center">डाउनलोड</th>
                            </tr>
                            @php
                                $id=1;
                            @endphp
                            @forelse($data as $data)
                                <tr>
                                    <td class="text-center">{{$id}}</td>
                                    <td width="15%" class="text-center">{{$data->title}}</td>
                                    <td class="text-justify">{!! Str::limit($data->description, 300, '...') !!}</td>
                                    <td>{{ date('d-M-Y',strtotime($data->last_date)) }}</td>
                                    <td class="text-center">
                                        @if ($data->file_extension)
                                            @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                                <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="24" height="24" class="img-responsive rounded" alt="doc-image">
                                            @endif

                                            @if ($data->file_extension == 'xls' || $data->file_extension == 'xlsx')
                                                <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" width="24" height="24" class="img-responsive rounded" alt="doc-image">
                                            @endif

                                            @if ($data->file_extension == 'pdf')
                                                <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="28" height="28" class="img-responsive rounded" alt="doc-image">
                                            @endif
                                        @endif
                                    </td>
                                    <td width="10%" class="text-center">
                                        @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                            <span class="badge badge-primary">{{ HumanReadable::bytesToHuman($data->file_size) }}</span>
                                        @endif

                                        @if ($data->file_extension == 'xls' || $data->file_extension == 'xlsx')
                                            <span class="badge badge-success">{{ HumanReadable::bytesToHuman($data->file_size) }}</span>
                                        @endif

                                        @if ($data->file_extension == 'pdf')
                                            <span class="badge badge-danger">{{ HumanReadable::bytesToHuman($data->file_size) }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/tender-edit') }}/{{$data->id}}" class="btn btn-sm btn-primary"><i class="far fa-edit" style="margin-right: 4px;"></i>Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-danger" onclick="deleteTender({{ $data->id }})"><i class="fa fa-trash-alt" style="margin-right: 4px;"></i>Delete</button>
                                        <form id="delete-form-{{ $data->id }}" action="{{ route('btr.tender.delete', $data->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('btr.tender.download', $data->filename) }}" class="btn btn-sm btn-success"><i class="fa fa-download" style="margin-right: 4px;"></i>Download</a>
                                    </td>
                                </tr>
                            @php
                                $id++;
                            @endphp
                            @empty
                                <tr>
                                    <td class="text-center p-5" colspan="9"><h5 class="font-weight-bold">हमारे रिकॉर्ड में टेंडर नहीं मिला !!</h5></td>
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
                        क्या आप इस निविदा को हटाना चाहते हैं?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">नहीं, रद्द करें</button>
                        <button type="button" class="btn btn-danger" id="delTender">हाँ, हटाएं</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@push('js')
    <script>
        // Delete Function
        function deleteTender(id)
        {
            $("#delModal").modal('show');

            document.getElementById("delTender").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            });
        }
    </script>
@endpush
