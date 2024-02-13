@extends('layouts.semi')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Rooms</h1>
                <a href="{{ route('rooms.create') }}" class="btn btn-primary">Create Room</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Rating</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Facilities</th>
                            <th>Image</th> <!-- Kolom tambahan untuk menampilkan gambar -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <td>{{ $room->id }}</td>
                                <td>{{ $room->address }}</td>
                                <td>{{ $room->price_per_night }}</td>
                                <td>{{ $room->rating }}</td>
                                <td>{{ $room->type }}</td>
                                <td>{{ $room->description }}</td>
                                <td>{{ $room->facilities }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm view-images" data-toggle="modal" data-target="#roomImagesModal{{ $room->id }}">View</button>
                                </td>
                                <td>
                                    <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <div class="modal fade" id="roomImagesModal{{ $room->id }}" tabindex="-1" role="dialog" aria-labelledby="roomImagesModalLabel{{ $room->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="roomImagesModalLabel{{ $room->id }}">Room Images</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @if ($room->foto)
                                                @foreach (explode(',', $room->foto) as $image)
                                                    <img src="{{ asset($image) }}" alt="Room Image" style="max-width: 100%;"><br><br>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
