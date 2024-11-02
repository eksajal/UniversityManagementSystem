<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />

    <title>School Management System</title>

    <style>
        .dept {
            text-align: left;
        }

        li {
            padding: 15px;
            font-size: 18px;
            color: teal;
            transition: transform 0.5s ease;
            position: relative;
        }

        a {
            color: rgb(9, 85, 85);
            text-decoration: none;
            font-weight: bold;
        }

        /* Zoom effect on the span */
        li span {
            display: inline-block;
            transition: transform 0.5s ease;
        }

        li:hover span {
            transform: scale(1.1);
            color: black;
            font-weight: bold;
            text-shadow: 1px 1px 2px #fff;
        }

        ul {
            list-style-type: none;
        }

        /* Hide the course description initially */
        .description {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px;
            border-left: 5px solid teal;
            border-right: 5px solid teal;
            z-index: 10;
            width: 250px;
            max-width: 100%;
            margin-top: 5px;
            transition: opacity 0.5s ease, transform 0.3s ease;
        }

        /* Show description on hover for large screens */
        li:hover .description {
            display: block;
            opacity: 1;
        }

        /* For larger screens, position description beside and above the course title */
        @media (min-width: 769px) {
            li:hover .description {
                top: -10px;
                left: 110%;
                transform: translateY(-10%);
            }
        }

        @media (max-width: 768px) {

            /* On smaller screens, description should appear below the title */
            .description {
                position: relative;
                width: 95%;
                margin-top: 10px;
                transform: none;
            }

            li:hover .description {
                transform: none;
            }

            li {
                font-size: 16px;
                padding: 10px;
            }

            li:hover span {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .dept {
                text-align: left;
            }

            ul {
                list-style-type: none;
            }

            .nav-bar {
                top: 5%;
            }

            .nav-bar li {
                font-size: 12px;
            }

            #explore_box {
                display: block;
                width: 100% !important;
                padding: 10px;
                background: black !important;
                display: none;
            }
        }

        @media (max-width: 768px) {
            .hamburger {
                margin-right: -3px;
                font-size: 24px;
                color: rgb(226, 215, 215);
                padding: 10px;
                cursor: pointer;
                position: absolute;
                right: 0;
                top: 8px;
            }

            .hamburger {
                display: block;
                color: #007bff;
            }

            .nav-bar {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                width: 80%;
                z-index: 1000;
            }

            .nav-bar ul {
                background: #101010;
            }

            .nav-bar.active {
                display: flex;
            }

            .nav-bar li {
                padding: 10px;
            }

            .intro {
                border: 7px solid rgb(9, 99, 135);
                color: #101010;
                font-size: 30px !important;
                font-weight: bold !important;
                display: flex;
                align-items: center;
                border-top: none;
                border-bottom: none;
                padding-left: 10px;
                margin-top: 180px !important;
                margin-left: 3px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .intro h1 {
                opacity: 0;
                font-size: 25px !important;
            }

            .founders-panel {
                display: flex;
                margin-top: 50px;
                padding: 0px !important;
                margin-bottom: 100px !important;
            }

            .search {
                width: 75%;
                text-align: center;
                margin: 0;
                padding: 0;
                position: relative;
                top: 20px;
            }

            .search input {
                width: 75% !important;
                height: 100%;
                border-top: 2px solid black;
                border-right: 5px solid #00bfff;
                border-bottom: 2px solid black;
                border-left: 5px solid #00bfff;
                padding: 5px !important;
                background: #333333;
                outline: none !important;
                font-size: 10px !important;
                box-sizing: border-box !important;
                margin: 0 !important;
                color: white;
            }


            .intro .span {
                font-size: 14px !important;
            }


        }







        .founders-panel {
            display: flex;
            margin-top: 20px;
            padding: 50px;
        }

        .founder1 {
            position: relative;
            padding: 10px;
            margin: auto;
        }

        .founder-img img {
            width: 300px !important;
            height: 350px !important;
        }

        .founder-txt {
            position: absolute;
            top: 15% !important;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: rgba(9, 99, 135, 0.8);
            /* Semi-transparent background */
            opacity: 0;
            /* Hide the text initially */
            transition: opacity 0.3s ease;
            /* Smooth transition for appearance */
            text-align: center;
            color: white;
            border-radius: 50%;
        }

        .founder1:hover .founder-txt {
            opacity: 1;
            /* Show the text box on hover */
        }

    

        .faculty_btn a {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            font-size: 18px;
            color: gray;
            background-color: #00bfff;
            border: 3px solid #101010;
            border-top: none;
            border-left: none;
            text-decoration: none;
            padding: 4px;
        }
    </style>

</head>

<body>

    @include('user.nav')




    <!------------------------------Faculties--------------------------------->

    <div class="intro" style="margin-top: 180px !important;">
        <h1 style="font-size: 50px; font-weight: bold;">Faculties of <br><span class="span"
                style="color: teal; white-space: wrap; font-size: 30px;"><strong>'{{ $department->dept_name }}'</strong></span>
        </h1>
    </div>

    <div class="founders-panel" style="margin-bottom: 250px; padding: 80px;">

        @foreach ($faculty as $item)
            <div class="founder1">

                <div class="btn_zoom" style="text-align: center; margin-bottom: 30px;">
                    <div class="faculty_btn">
                        <a href="{{ url('evaluation_questions_page') }}">Evaluate This Faculty</a>
                    </div>
                </div>


                <div class="founder-img">
                    <img src="facultyImage/{{ $item->image }}" alt="" />
                </div>
                <div class="founder-txt">
                    <h3>{{ $item->name }}</h3>
                    <h4 style="font-size: 12px; color:aqua;">Dept: <br><span
                            style="color: rgb(10, 240, 167);"><strong>{{ $item->dept_name }}</strong></span></h4>
                    <br>
                    <h4 style="font-size: 10px; color:aqua;">Courses: <br><span
                            style="color: rgba(243, 255, 232, 0.989);"><strong>{{ $item->course_title }}</strong></span>
                    </h4>
                    <p style="font-size: 12px;">
                        {{ $item->description }}
                    </p>
                </div>

            </div>
        @endforeach

    </div>



    <!-- Pagination links for faculties -->
    <div style="text-align: center; margin: auto; background: #a7c5e0 !important;">
        {{ $faculty->links() }} <!-- Now $faculty will still refer to the paginated collection -->
    </div>

    @include('user.footer')
    @include('user.script')

</body>

</html>
