@extends('layout.master')
@section('content')

<h1>This is Upload Page</h1>
    <hr>
    <form action="upload/save" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <p>
            File: <input type="file" name="photo" accept="image/*" onchange="preview(event)">

        </p>
        <p>
            <img src="" id="img" alt="" width="150">
        </p>
        <p>
            <button>Upload</button>
        </p>
        @if(Session::has('error'))
            <p>
                {{session('error')}}
            </p>

        @endif
        @if(Session::has('success'))
            <p>
                {{session('success')}}
            </p>

        @endif
    </form>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi expedita omnis nulla, repudiandae ipsam, sit distinctio possimus accusamus voluptas accusantium modi minus, corporis excepturi culpa quis voluptates eligendi rem voluptate.</p>
    <script>
        function preview(evt)
        {
            let img = Document.getElementById('img');
            img.src = URL.createObjectURL(evt.target.files[0])
        }
    </script>

@endsection