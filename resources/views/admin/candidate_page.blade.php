<!DOCTYPE html>
<html>

<head>

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

        .table_container {
            display: inline-block;
            padding: 10px;
            margin-top: 20px;
            color: white;
            margin-bottom: 80px;
        }

        th,td{
            border-bottom: 3px solid red;
            text-align: center;
            font-size: 16px;
            padding: 10px;
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
                    <h1>Candidate <span>Requests</span></h1>
                </div>

            </div>

        </div>

        <div class="div_center">
            <div class="table_container">

                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>SSC GPA</th>
                        <th>HSC GPA</th>
                        <th>Message</th>
                        <th>Image</th>
                        <th>Send Email</th>
                        <th>Remove</th>
                    </tr>

                    @foreach ($candidates as $candidate)
                                         
                     <tr>
                        <td>{{ $candidate->name }}</td>
                        <td>{{ $candidate->email }}</td>
                        <td>{{ $candidate->phone }}</td>
                        <td>{{ $candidate->ssc_gpa }}</td>
                        <td>{{ $candidate->hsc_gpa }}</td>
                        <td>{{ $candidate->message }}</td>
                        
                        <td>
                            <img width="150px" height="100px" src="candidateImage/{{ $candidate->candidate_img}}" alt="">
                        </td>

                        <td><a class="btn btn-secondary" href="{{ url('email_page', $candidate->id) }}">Send Email</a></td>

                        <td><a class="btn btn-danger" href="{{ url('delete_candidate', $candidate->id) }}">Delete</a></td>
                     </tr>

                     @endforeach

                </table>
                
            </div>
        </div>

        @include('admin.footer')

        @include('admin.script')

</body>

</html>