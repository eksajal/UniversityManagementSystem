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
                margin-right: 18px;
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
                width: 70%;
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


            .contact-intro{
                margin-top: 180px !important;
            }


        }
    </style>

</head>

<body>

    @include('user.nav')

    <!------------------------------Contact--------------------------------->

    <div class="contact-intro">
        <h1 style="font-size: 50px; font-weight: bold;">Apply Online</h1>
    </div>

    <div class="contact">

        @if (session('message'))
            <div id="notification"
                style="background-color: green; color: white; text-align: center; margin: 0 auto; width: 100%; padding: 10px 0; border-radius: 0; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); position: fixed; top: 0; left: 0; z-index: 1000;">
                {{ session('message') }}
                <button onclick="hideNotification()"
                    style="background: transparent; border: none; color: white; font-size: 16px; font-weight: bold; float: right; cursor: pointer;">&times;</button>
            </div>
            <script>
                function hideNotification() {
                    document.getElementById('notification').style.display = 'none';
                }

                // Automatically hide the notification after 3 seconds
                setTimeout(hideNotification, 10000);
            </script>
        @endif

        <div class="contact-form">
            <div class="form-element">
                <form action="{{ url('contact') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Enter Your Name</label><br />
                    <input type="text" id="name" name="name" required /><br /><br />

                    <label for="email">Enter Your Email</label><br />
                    <input type="email" id="email" name="email" required /><br /><br />

                    <label for="phone">Enter Your Number</label><br />
                    <input type="number" id="phone" name="phone" required /><br /><br />

                    <label for="ssc_gpa">SSC GPA</label><br />
                    <input type="number" id="ssc_gpa" name="ssc_gpa" step="0.01" min="0" max="5"
                        required /><br /><br />

                    <label for="hsc_gpa">HSC GPA</label><br />
                    <input type="number" id="hsc_gpa" name="hsc_gpa" step="0.01" min="0" max="5"
                        required /><br /><br />

                    <label for="message">Your Message</label><br />
                    <textarea name="message" id="message" placeholder="Tell us briefly why you want to admit here..." required></textarea><br /><br />

                    <label for="candidate_img">Upload Your Latest Image</label><br />
                    <input type="file" id="candidate_img" name="candidate_img" required /><br /><br />

                    <input class="btn" type="submit" value="Apply">
                </form>
            </div>
        </div>
    </div>

    <div class="contact-info">
        <h1>Helpline</h1>
        <h4>Admission Office: <strong>01878738818</strong></h4>
        <h4>Others Info: <strong>01759103031</strong></h4>
        <h4>Email: <strong>calestial@academy.ac.bd</strong></h4>
        <h4>Website: <a style="color: navy; text-decoration: none;" href="">www.calestialacademy.com</a></h4>
    </div>


    @include('user.footer')

    @include('user.script')

</body>

</html>
