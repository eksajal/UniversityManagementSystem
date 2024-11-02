<!DOCTYPE html>
<html lang="en">

<head>
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

        .card-container {
            display: flex;
            flex-wrap: wrap;
            /* Allow cards to wrap onto the next line */
            justify-content: space-around;
            /* Space between cards */
            gap: 20px;
            /* Space between cards */
        }

        .card {
            background-color: #b7d8f4;
            /* Light background color for cards */

            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Soft shadow */
            padding: 20px;
            /* Inner padding */
            text-align: center;
            /* Center text */
            width: 250px;
            /* Fixed width for cards */
            transition: transform 0.3s;
            /* Smooth hover effect */
            display: flex;
            /* Use flexbox for layout */
            flex-direction: column;
            /* Stack children vertically */
            justify-content: space-between;
            /* Space between items */
            height: 300px;
            /* Fixed height for uniformity */
            border-left: 3px solid teal;
            border-right: 3px solid teal;
        }

        .card:hover {
            transform: scale(1.05);
            /* Slightly enlarge on hover */
        }

        .icon {
            font-size: 40px;
            /* Size of the icon */
            color: teal;
            /* Icon color */
            margin-bottom: 10px;
            /* Space below the icon */
        }

        h2 {
            font-size: 20px;
            /* Font size for department name */
            margin: 10px 0;
            /* Margin around the title */
            color: rgb(9, 85, 85);
            /* Department name color */
        }

        p {
            font-size: 16px;
            /* Font size for student count */
            color: #555;
            /* Color for student count text */
            flex-grow: 1;
            /* Allow paragraph to take available space */
        }

        .btn {
            display: inline-block;
            /* Button style */
            margin-top: 10px;
            /* Margin on top */
            padding: 10px 15px;
            /* Padding for the button */
            background-color: teal;
            /* Button background */
            color: white;
            /* Button text color */
            text-decoration: none;
            /* Remove underline */

            transition: background-color 0.3s;
            /* Smooth hover effect */
        }

        .btn:hover {
            background-color: #0abef0;
            /* Change color on hover */
            color: black;
        }

        @media (max-width: 768px) {

            /* Responsive adjustments */
            .card-container {
                flex-direction: column;
                /* Stack cards vertically on small screens */
                align-items: center;
                /* Center cards */

                width: 250px;

                margin: 0 !important;
                padding: 0 !important;
            }

            .card {
                width: 90%;
                /* Full width on small screens */
                margin: 0 !important;
                padding: 10px !important;
                height: 250px;
            }

        }



        .dept {
            text-align: left;
        }

        li {
            padding: 15px;
            font-size: 18px;
            color: teal;
            transition: transform 0.5s ease;
        }

        a {
            color: rgb(9, 85, 85);
            text-decoration: none;
            font-weight: bold;
        }

        /* Zoom effect on the span */
        li span {
            display: inline-block;
            /* Makes the span a block-level element for scaling */
            transition: transform 0.5s ease;
        }

        li:hover span {
            transform: scale(1.1);
            /* Scale the icon and text */
            color: black;
        }

        ul {
            list-style-type: none;
        }


        @media(max-width: 768px) {

            .dept {
                text-align: left;
            }

            li {
                padding: 10px;
                font-size: 14px;
                color: teal;
                transition: transform 0.5s ease;
            }

            a {
                color: rgb(9, 85, 85);
                text-decoration: none;
                font-weight: bold;
            }

            /* Zoom effect on the span */
            li span {
                display: inline-block;
                /* Makes the span a block-level element for scaling */
                transition: transform 0.5s ease;
            }

            li:hover span {
                transform: scale(1.1);
                /* Scale the icon and text */
                color: black;
            }

            ul {
                list-style-type: none;
            }


        }



        @media (max-width: 768px) {
            .nav-bar {
                top: 5%;
                /* Adjust top position */
            }

            .nav-bar li {
                font-size: 12px;
                /* Smaller font size for mobile */
            }

            #explore_box {
                display: block;
                /* Show explore box on smaller screens */
                width: 45%;
                /* Full width */
                padding-left: 0;
                background: black !important;
                display: none;
            }
        }



        /* Media Queries */
        @media (max-width: 768px) {

            .hamburger {
                margin-right: 2px !important;
                /* Add right margin for spacing */

                /* Hidden by default */
                font-size: 24px;
                color: rgb(226, 215, 215);
                padding: 10px;
                cursor: pointer;
                position: absolute;
                /* Position it relative to the nav */
                right: 0;
                /* Align to the right end */
                top: 8px;
                /* Adjust top position */
            }

            .hamburger {
                display: block;
                /* Show hamburger icon */
                color: #007bff;
            }


            .nav-bar {
                display: none;
                /* Hide nav menu by default */
                flex-direction: column;
                /* Stack items vertically */
                position: absolute;
                top: 60px;
                /* Position below the hamburger */
                right: 0;
                /* Align to the right */
                width: 80%;
                /* Full width */
                z-index: 1000;
                /* Ensure it appears above other elements */
            }

            .nav-bar ul {
                background: #101010;
            }

            .nav-bar.active {
                display: flex;
                /* Show nav menu when active */
            }

            .nav-bar li {
                padding: 10px;
                /* Add padding for items */
            }

            .intro {
                border: 7px solid rgb(9, 99, 135);
                color: #101010;
                font-size: 30px !important;
                font-weight: bold !important;
                display: flex;
                /* Use flexbox for better alignment */
                align-items: center;
                /* Center items vertically */
                border-top: none;
                border-bottom: none;
                padding-left: 10px;
                margin-top: 180px !important;
                margin-left: 3px;
                white-space: wrap;
                /* Prevent text from wrapping to a new line */
                overflow: hidden;
                /* Hide any overflow */
                text-overflow: ellipsis;
                /* Add ellipsis if the text overflows */
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

                width: 73%;
                text-align: center;
                margin: 0;
                padding: 0;
                position: relative;
                top: 20px;

            }



            .search input {
                width: 75% !important;
                height: 100%;
                /* border: 2px solid #00c9ff; */
                border-top: 2px solid black;
                border-right: 5px solid #00bfff;
                border-bottom: 2px solid black;
                border-left: 5px solid #00bfff;
                padding: 5px !important;
                /* background: #a7c5e0; */
                background: #333333;
                outline: none !important;
                font-size: 10px !important;
                box-sizing: border-box !important;
                margin: 0 !important;
                color: white;
            }




        }



        .footer-txt p{
    color: orangered !important;
   
}


    </style>
</head>

<body>

    @include('user.nav')

    <div class="intro">
        <h1 style="font-size: 50px; font-weight: bold;">Total Students: {{ $totalStudents }}</h1>
    </div>

    <div class="founders-panel" style="margin-bottom: 250px; padding: 80px;">
        <div class="founder1">
            <div class="dept">
                <div class="card-container">
                    @foreach ($departments as $department)
                        <div class="card">
                            <i class="fas fa-graduation-cap icon"></i>
                            <h2>{{ $department->dept_name }}</h2>
                            <p>{{ $department->students_count }} students</p>
                            <a href="{{ url('dept_details_page', $department->id) }}" class="btn">View Department</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>





    <!------------------------------Footer--------------------------------->
    <div class="footer">
        <div class="footer-social">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="footer-txt">
            <p>Copyright by CodeVibe Innovations</p>
        </div>
    </div>






    @include('user.script')

</body>

</html>
