@extends('backend.layout.main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
    </div>
    <form action="{{route('adminTravelSave')}}" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <div class="card mb-4 border-left-primary">
                <div class="card-body">
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Travel Name</label>
                        <input type="text" name="name" class="form-control text-dark border-1 small col-md-9" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Trainer Guide</label>
                        <select name="traner_id" class="form-control text-dark border-1 small col-md-9">
                            <option value="">Pilih Trainer</option>
                            @foreach($trainer as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Travel Photo</label>
                        <input type="file" name="photo" class="form-control-file text-dark border-1 small col-md-9" style="padding-top: 7px;" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Price</label>
                        <input type="number" name="price" class="form-control text-dark border-1 small col-md-3" required>
                        <label class="col-md-2 offset-md-1 mt-2">Available Seat</label>
                        <input type="number" name="seat_available" class="form-control text-dark border-1 small col-md-3" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Description</label>
                        <div class="col-md-9" style="padding: 0px !important;">
                            <textarea name="description" cols="30" rows="30" class="wysiwyg form-control" style="height: 500px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p>
                        Pastikan data yang anda masukan sudah sesuai dengan data yang diminta dan pastikan tidak kosong.
                    </p>
                    <a href="{{route('adminTravel')}}" class="btn btn-outline-dark btn-sm">Batal</a>
                    <button type="submit" class="btn btn-outline-success btn-sm">Simpan Data</button>
                </div>
            </div>
        </div>
    </form>
    @push('scripts')
        <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '.wysiwyg' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endpush
@endsection
