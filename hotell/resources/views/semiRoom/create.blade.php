@extends('layouts.side')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Create Room</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rooms.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="alamat">Address:</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="harga_permalam">Price per Night:</label>
                                <input type="number" name="harga_permalam" id="harga_permalam" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="type_kamar">Room Type:</label>
                                <input type="text" name="type_kamar" id="type_kamar" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Description:</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="fasilitas">Facilities:</label>
                                <textarea name="fasilitas" id="fasilitas" class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="foto">Upload Image:</label>
                                <input type="file" name="foto[]" id="foto" class="form-control" multiple>
                            </div>


                            <button type="submit" class="btn btn-primary">Create Room</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
