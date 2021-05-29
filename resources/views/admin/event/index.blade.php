@extends('admin.layouts.admin')

@push('css')
    <style>
        .error{
            color:red;
        }
    </style>
@endpush

@section('content')

    <!-- For English Language -->
    @if (session('locale') == 'en')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row">
                <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                    <div id="myAlert"></div>

                    <form action="{{ url('admin/event-create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" >
                            @error('title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="edate">Event Date</label>
                            <input type="date" class="form-control" id="edate" name="edate" value="{{old('edate')}}" >
                            @error('edate')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="etime">Event Time</label>
                            <input type="time" class="form-control" id="etime" name="etime" value="{{old('etime')}}" >
                            @error('etime')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="place">Event Place</label>
                            <input type="text" class="form-control" id="place" name="place" value="{{old('place')}}" >
                            @error('title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="e_disc">Event Description</label>
                            <textarea class="ckeditor form-control" rows="5" id="e_disc" name="e_disc">{{old('e_disc')}}</textarea>
                            @error('e_disc')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <strong> Main Images </strong>
                            <input type="file" class="form-control-file border" name="image">
                            @error('image')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <strong> Other Images </strong>
                            <input type="file" class="form-control-file border" name="m_image[]" multiple>
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
                        <th class="text-center">Event Date</th>
                        <th class="text-center">Event Time</th>
                        <th class="text-center">Event Place</th>
                        <th class="text-center">Discription</th>
                        <th class="text-center">Feature Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                        @php
                            $id=1;
                        @endphp
                        @forelse($data as $data)
                        <tr>
                            <td class="text-center">{{$id}}</td>
                            <td class="text-center">{{ Str::limit($data->title, '30') }}</td>
                            <td class="text-center">{{ date('d-M-Y',strtotime($data->date)) }}</td>
                            <td>{{ date('h:i A',strtotime($data->time)) }}</td>
                            <td>{{ $data->place }}</td>
                            <td class="text-justify">{!! Str::limit($data->discription, '300') !!}</td>
                            <td>
                                <img src="{{asset('public/storage/eng_event/'.$data->image)}}" width="200" height="150" class="img-responsive rounded" alt="image">
                            </td>
                            <td><a href="{{ url('admin/event-edit') }}/{{$data->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteEvent({{ $data->id }})">Delete</button>
                                <form id="delete-form-{{ $data->id }}" action="{{ route('event_delete', $data->id) }}" method="POST" style="display: none;">
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
                                <td class="text-center p-5" colspan="9"><h5 class="font-weight-bold">Event not found in our record !!</h5></td>
                            </tr>
                        @endforelse
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

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
                        Are you sure, you want to delete this event ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-danger" id="delEvent">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- For Hindi Language -->
    @if (session('locale') == 'hi')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row">
                <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                    <div id="myAlert"></div>

                    <form action="{{ url('admin/event-create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">इवेंट शीर्षक</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" >
                            @error('title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="edate">इवेंट तारीख</label>
                            <input type="date" class="form-control" id="edate" name="edate" value="{{old('edate')}}" >
                            @error('edate')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="etime">इवेंट समय</label>
                            <input type="time" class="form-control" id="etime" name="etime" value="{{old('etime')}}" >
                            @error('etime')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="place">इवेंट स्थान</label>
                            <input type="text" class="form-control" id="place" name="place" value="{{old('place')}}" >
                            @error('title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="e_disc">इवेंट विवरण</label>
                            <textarea class="ckeditor form-control" rows="5" id="e_disc" name="e_disc">{{old('e_disc')}}</textarea>
                            @error('e_disc')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <strong> मुख्य इमेज </strong>
                            <input type="file" class="form-control-file border" name="image">
                            @error('image')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                        <strong> अन्य इमेज </strong>
                            <input type="file" class="form-control-file border" name="m_image[]" multiple>
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
                        <th class="text-center">समय</th>
                        <th class="text-center">स्थान</th>
                        <th class="text-center">विवरण</th>
                        <th class="text-center">मुख्य इमेज</th>
                        <th>एडिट</th>
                        <th>डिलीट</th>
                        </tr>
                        @php
                            $id=1;
                        @endphp
                        @forelse ($data as $data)
                            <tr>
                                <td class="text-center">{{$id}}</td>
                                <td class="text-center">{{ Str::limit($data->title, '30') }}</td>
                                <td class="text-center">{{ date('d-M-Y',strtotime($data->date)) }}</td>
                                <td>{{ date('h:i A',strtotime($data->time)) }}</td>
                                <td>{{ $data->place }}</td>
                                <td class="text-justify">{!! Str::limit($data->discription, '300') !!}</td>
                                <td>
                                    <img src="{{asset('public/storage/hin_event/'.$data->image)}}" width="200" height="150" class="img-responsive rounded" alt="image">
                                </td>
                                <td><a href="{{ url('admin/event-edit') }}/{{$data->id}}" class="btn btn-sm btn-primary">Edit</a></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteEvent({{ $data->id }})">Delete</button>
                                    <form id="delete-form-{{ $data->id }}" action="{{ route('event_delete', $data->id) }}" method="POST" style="display: none;">
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
                                <td class="text-center p-5" colspan="9"><h5 class="font-weight-bold">इवेंट्स हमारे रिकॉर्ड में नहीं मिला !!</h5></td>
                            </tr>
                        @endforelse
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

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
                        निश्चित तौर पर क्या इस इवेंट को हटाना चाहते हैं ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">नहीं, रद्द करें</button>
                        <button type="button" class="btn btn-danger" id="delEvent">हाँ, हटाएं</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@push('js')
    <script>
        // Delete Function

        function deleteEvent(id)
        {
            $("#delModal").modal('show');

            document.getElementById("delEvent").addEventListener("click", function(){
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            });
        }
    </script>
@endpush
