<?php require 'templates/header.php' ?>

        <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#page-header-->


        <!--
        ==================================================
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                           <!-- <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                                 consectetur adipisicing elit. Dolore, ea!
                            </p>-->
                            <div class="contact-form">
                                <form id="contact-form" method="post" action="sendmail.php" role="form">

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                    </div>

                                    <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                    </div>


                                    <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                            <!--<p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.

                            </p>-->
                            <div class="map">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0070068817886!2d112.72017811432151!3d-7.464474994615249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e6d6cc46ab63%3A0xf728c48c6c0b31ff!2se-Tech+Inc.!5e0!3m2!1sid!2sid!4v1503551373235" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-4">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>Jl. Blimbing No.1, Sekardangan, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 16789, Indonesia</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <p>marketing@easytech.co.id</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+62 857 4898 3824<br>+62 812 5299 8770</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <!--
        ==================================================
            Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">INTERESTED IN WORKING TOGETHER? ?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,</br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                            <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<?php require 'templates/footer.php' ?>
