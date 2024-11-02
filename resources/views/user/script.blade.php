
    <!---------------------Script to show Nav into Nav------------------------->
    <script>
        document.getElementById("explore").onclick = function() {
            event.preventDefault();

            var explorebox = document.getElementById("explore_box");

            explorebox.style.display =
                explorebox.style.display === "block" ? "none" : "block";
        };
    </script>




    <!------------------Script to show Animation when Scroll----------------->
    <script>
        const blockClassNames = ["header",
            "intro",
            "contact-intro",
            "why-txt",
            "event-info",
            "notice",
            "evaluation-intro",
            "contact-info"
        ]; // Specify multiple block class names here

        const animateElements = () => {
            blockClassNames.forEach((blockClassName) => {
                const elements = document.querySelectorAll(
                    `.${blockClassName} *`); // Select all child elements within each block
                elements.forEach((element) => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom > 0) {
                        element.classList.add("animate"); // Trigger animation
                    } else {
                        element.classList.remove("animate"); // Reset the animation if not in view
                    }
                });
            });
        };

        // Run on scroll
        window.addEventListener("scroll", animateElements);

        // Run on page load
        window.addEventListener("load", animateElements);
    </script>






    <!------Script to stuck the display in activity area------>

    <script>
        window.onload = function() {
            // Restore scroll position after full load
            const scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition) {
                const {
                    top,
                    left
                } = JSON.parse(scrollPosition);
                window.scrollTo(left, top);
            }
        };

        // Save scroll position before the page unloads
        window.addEventListener('beforeunload', function() {
            const scrollPosition = {
                top: window.scrollY,
                left: window.scrollX
            };
            localStorage.setItem('scrollPosition', JSON.stringify(scrollPosition));
        });
    </script>

