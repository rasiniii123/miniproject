@extends('layouts.side')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Room</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rooms.update', $room->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="alamat">Address:</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $room->alamat }}" required>
                            </div>

                            <div class="form-group">
                                <label for="harga_permalam">Price per Night:</label>
                                <input type="number" name="harga_permalam" id="harga_permalam" class="form-control" value="{{ $room->harga_permalam }}" required>
                            </div>

                            <div class="form-group">
                                <label for="type_kamar">Room Type:</label>
                                <input type="text" name="type_kamar" id="type_kamar" class="form-control" value="{{ $room->type_kamar }}" required>
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Description:</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="3" required>{{ $room->keterangan }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="fasilitas">Facilities:</label>
                                <textarea name="fasilitas" id="fasilitas" class="form-control" rows="3" required>{{ $room->fasilitas }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="foto">Update Image:</label>
                                <input type="file" name="foto[]" id="foto" class="form-control" multiple>
                            </div>

                            @if ($room->foto)
                                <div class="form-group">
                                    <label>Existing Image(s):</label><br>
                                    @foreach (explode(',', $room->foto) as $image)
                                        <img src="{{ asset('images/'.$image) }}" alt="Room Image" class="img-thumbnail" style="max-width: 200px;">
                                    @endforeach
                                </div>
                            @endif

                            <button type="submit" class="btn btn-primary">Update Room</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
