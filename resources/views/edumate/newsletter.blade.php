<!--====== Newsletter Start ======-->

<section class="newsletter-area">
    <div class="container">
        <div class="newsletter-wrapper bg_cover" style="background-image: url(/images/newsletter-bg.jpg);">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-2 mt-25">
                        <h2 class="title">Leave a message here</h2>
                        <span class="line"></span>
                        <p>Ви можете задати запитання до адміністрації сайту</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form mt-30">
                        <form action="/newsletter" method="post">
                            @csrf
                            <input type="text" name="message" placeholder="Enter your message here">
                            <input type="text" name="phone" placeholder="Enter your phone or email here">
                            <button class="main-btn main-btn-2">Submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Newsletter Ends ======-->
