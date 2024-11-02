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


        @media(max-width: 768px){

            .intro{
                font-size: 30px !important;
                margin-top: 180px !important;
                white-space: wrap !important;
            }

            .why{
                white-space: wrap !important;
                margin-bottom: 80px !important;
            }

            .why-list li{
                font-size: 12px !important;
                white-space: wrap !important;
                padding-right: 20px !important;
            }

            .notice{
                margin-bottom: 80px !important;
            }

            .notice h3{
                padding: 10px !important;
            }

        }

    </style>


</head>

<body>

    @include('user.nav')



    <!------------------------------Why--------------------------------->
    <div class="intro">
        <h1 style="font-size: 50px; font-weight: bold;">Our Achievements</h1>
    </div>

    <div class="why" style="margin-bottom: 150px;">
        <div class="why-list">
            <ul>
                <li>
                    <i class="fa-regular fa-hand-point-right"></i>Top-Ranked Programs – Ranked #1 in Business and IT nationwide.
                </li>
                <li>
                    <i class="fa-regular fa-hand-point-right"></i>Record-Breaking Enrollment – 10,000+ students registered this year!
                </li>
                <li>
                    <i class="fa-regular fa-hand-point-right"></i>Cutting-Edge Research – 50+ groundbreaking projects funded.
                   
                </li>
                <li>
                    <i class="fa-regular fa-hand-point-right"></i>Alumni Success – 95% job placement within 6 months of graduation.
                   
                </li>
                <li>
                    <i class="fa-regular fa-hand-point-right"></i>Innovative Campus Tech – Fully AI-powered student services.
                   
                </li>
                <li>
                    <i class="fa-regular fa-hand-point-right"></i>Sustainability Leader – Achieved carbon-neutral status.
                </li>
                <li>
                    <i class="fa-regular fa-hand-point-right"></i>Global Partnerships – 20+ new international exchange programs.
                </li>
            </ul>
        </div>

    </div>



    <!------------------------------Notice--------------------------------->



    <div class="notice" style="margin-bottom: 250px;">
        <h3><strong>QS Ranking 3rd Position!!!</strong></h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam laboriosam et possimus consectetur!
            Distinctio enim quibusdam delectus hic consequuntur, doloribus obcaecati asperiores tempora quis explicabo
            modi optio dolorum? Itaque, quo.
        </p>
    </div>






    @include('user.footer')

    @include('user.script')

</body>

</html>
