<!DOCTYPE html>
<html>

<head>
    <base href="/public">

    @include('admin.css')

    <style>
        .intro {
            text-align: center !important;
            margin: auto !important;
        }

        .intro h1 {
            border: 3px solid red;
            display: inline;
            padding: 5px;
            border-top: none;
            border-bottom: none;
            background: rgb(9, 66, 66);
        }

        span {
            color: red;
        }

        .form_container {
            border: 7px solid red;
            display: inline-block;
            padding: 20px;
            border-top: none;
            border-bottom: none;
            margin-top: 50px;
            margin-bottom: 80px;
        }

        label {
            width: 120px;
        }

        input,
        textarea {
            width: 250px;
            outline: none;
        }

        .form_element {
            padding: 20px;
        }

        .custom_btn {
            border: 3px solid red;
            background: teal;
            font-weight: bold;
            transition: transform 0.5s ease;
            border-top: none;
            border-left: none;
            font-size: 20px;
        }

        .custom_btn:hover {
            background: red;
            transform: scale(1.05);
        }

        .div_center {
            text-align: center;
            margin: auto;
        }
    </style>

</head>

<body>

    @include('admin.navbar')

    @include('admin.sidebar')



    @if (session('message'))
        <div id="toast"
            style="position: fixed; top: 20px; right: 20px; background-color: teal; color: white; padding: 10px 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); z-index: 9999;">
            <span style="color: white">{{ session('message') }}</span>
            <button onclick="hideToast()"
                style="background: transparent; border: none; color: white; font-size: 16px; font-weight: bold; cursor: pointer;">&times;</button>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(hideToast, 10000); // Auto-hide after 10 seconds
            });

            function hideToast() {
                var toast = document.getElementById('toast');
                if (toast) {
                    toast.style.display = 'none';
                }
            }
        </script>

        @php
            session()->forget('message');
        @endphp
    @endif




    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="intro">
                    <h1>Update <span>Event</span></h1>
                </div>

            </div>

        </div>

        <div class="div_center">
            <div class="form_container">
                <form action="{{ url('update_event', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form_element">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $event->name }}">
                    </div>

                    <div class="form_element">
                        <label for="">Description</label>
                        <textarea name="description">{{ $event->description }}</textarea>
                    </div>

                    <div class="form_element">
                        <label for="">Current Image</label>
                        <img width="150px" height="100px" src="eventImage/{{ $event->image }}" alt="">
                    </div>

                    <div class="form_element">
                        <label for="">Change Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="form_element">
                        <input class="custom_btn" type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>

        @include('admin.footer')

        @include('admin.script')

</body>

</html>
