@extends('user.common')

    @section('content')
        <section class="member">
            <h2 class="member-ttl wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">Our Team</h2>
            <div class="member-card wow slideInDown" data-wow-duration="2s">
                <div class="cards">
                    <div class="card">
                        <div class="content-card">
                            <div class="img-member rotate-bdr">
                                <img src="{{ asset('user/img/img_profile1.png') }}" alt="Member Image">
                            </div>
                            <div class="info">
                                <div class="name">Saw Kyaw Myint</div>
                                <div class="detail-info">
                                    <p>Second year student from Univerversity of Computer Studies, Loikaw.</p>
                                    <div class="member-info">
                                        <p class="email-info">Email - example@gmail.com</p>
                                        <p class="add-info">Address - Yangon</p>
                                    </div>
                                </div>
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content-card">
                            <div class="img-member rotate-bdr">
                                <img src="{{ asset('user/img/img_profile2.png') }}" alt="Member Image">
                            </div>
                            <div class="info">
                                <div class="name">Shoon Lae Yee Win</div>
                                <div class="detail-info">
                                    <p> Final year(EC) student from Technological University(Mandalay)</p>
                                    <div class="member-info">
                                        <p class="email-info">Email - example@gmail.com</p>
                                        <p class="add-info">Address - Yangon</p>
                                    </div>
                                </div>
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content-card">
                            <div class="img-member rotate-bdr">
                                <img src="{{ asset('user/img/img_profile3.png') }}" alt="Member Image">
                            </div>
                            <div class="info">
                                <div class="name">Tin Htar Wai</div>
                                <div class="detail-info">
                                    <p>Graduated from University of Computer Studies, Taungoo</p>
                                    <div class="member-info">
                                        <p class="email-info">Email - example@gmail.com</p>
                                        <p class="add-info">Address - Yangon</p>
                                    </div>
                                </div>
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content-card">
                            <div class="img-member rotate-bdr">
                                <img src="{{ asset('user/img/img_img1.png') }}" alt="Member Image">
                            </div>
                            <div class="info">
                                <div class="name">May Thazin</div>
                                <div class="detail-info">
                                    <p> Graduated from Technological University(Taunggyi)</p>
                                    <div class="member-info">
                                        <p class="email-info">Email - example@gmail.com</p>
                                        <p class="add-info">Address - Yangon</p>
                                    </div>
                                </div>
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
