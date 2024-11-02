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
