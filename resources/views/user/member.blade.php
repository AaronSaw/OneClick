@extends('user.common')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneClick | Team Memmber</title>
    <link rel="stylesheet" href="{{ asset('user/common_css/member.css') }}">
</head>

<body>
    @section('content')
        <section class="member">
            <h2 class="member-ttl wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s" >Our Team</h2>
            <div class="member-card wow slideInDown" data-wow-duration="2s">
                <div class="cards">
                    <div class="card">
                        <div class="content-card">
                            <div class="img-member rotate-bdr">
                                <img src="{{ asset('user/img/img_img1.png') }}" alt="Member Image">
                            </div>
                            <div class="info">
                                <div class="name">Saw Kyaw Myint</div>
                                <div class="detail">
                                    <p>Second year student from Univerversity of Computer Studies, Loikaw.</p>
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
                                <div class="name">Shoon Lae Yee Win</div>
                                <div class="detail">
                                    <p> Final year(EC) student from Technological University(Mandalay)</p>
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
                                <div class="name">Tin Htar Wai</div>
                                <div class="detail">
                                    <p>Graduated from University of Computer Studies, Taungoo</p>
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
                                <div class="detail">
                                    <p> Graduated from Technological University(Taunggyi)</p>
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

</body>

</html>


