<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>larapush</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://larapush.com/assets/css/merged.min.css?v=0.8">

    <style>
        @media (max-width: 768px) {
            .phone {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 9999;
            }

            .tophead__wrapper {
                flex-direction: column;
            }

            .tophead__links {
                margin-top: 10px;
            }
        }

        .unlimited-board h2 {
            font-size: 1.5rem;
        }

        #webpush-experts h3 {
            font-size: 1.5rem;
        }

        .small-slider h3.name {
            font-size: 1.25rem;
        }

        :root {
            --color-text: hsl(248, 10%, 40%);
            --color-text-muted: hsl(248, 10%, 40%);
            --color-purple: var(--primary);
        }

        .accordion p {
            font-family: 'Inter', sans-serif;
        }

        .accordion {
            max-width: 100%;
            padding: 1.2rem 0;
            border-radius: 1rem;
            background: white;
            box-shadow: 10px 40px 50px rgb(229 233 246 / 40%);
            font-family: 'Inter', sans-serif;
        }

        .accordion__heading {
            margin-bottom: 1rem;
            padding-left: 1.2rem;
        }

        .accordion__item:not(:last-child) {
            border-bottom: 1px solid lightgrey;
        }

        .accordion__btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 1.2rem;
            background: white;
            border: none;
            outline: none;
            color: var(--color-text);
            font-size: 1.2rem;
            text-align: left;
            cursor: pointer;
            transition: 0.1s;
        }

        .accordion__btn:hover {
            color: var(--color-purple);
            background: hsl(248, 53%, 95%);
        }

        .accordion__item--active .accordion__btn {
            color: var(--color-purple);
            border-bottom: 2px solid var(--color-purple);
            background: hsl(248, 53%, 95%);
        }

        .fa-lightbulb {
            padding-right: 1rem;
        }

        .accordion__icon {
            border-radius: 50%;
            transform: rotate(0deg);
            transition: 0.3s ease-in-out;
            opacity: 0.9;
        }

        .accordion__item--active .accordion__icon {
            transform: rotate(135deg);
        }

        .accordion__content {
            font-weight: 300;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            color: var(--color-text-muted);
            transform: translateX(16px);
            transition: max-height 0.2s ease-out, opacity 0.3s ease-in,
                transform 0.4s ease;
        }

        .accordion__content p {
            padding: 1rem 1.2rem;
        }

        .accordion__item--active .accordion__content {
            opacity: 1;
            transform: translateX(0px);
        }




        .notification>*>* {
            font-family: 'Inter', sans-serif;
            font-style: normal;
        }

        .notification {
            position: relative;
            width: 350px;
            height: 111.37px;
            background: #FFFFFF;
            border: 0.179505px solid #949494;
            box-sizing: border-box;
            box-shadow: 0px 1.43604px 0.71802px rgba(0, 0, 0, 0.25);
            border-radius: 15.0784px;
            pointer-events: none;
        }

        .notification>* {
            position: absolute
        }

        .notification .icon {
            width: 23.46px;
            height: 23.46px;
        }


        .notification .icon-cover {
            top: 16.11px;
            left: 14.22px;
        }

        .notification .app-name {
            font-weight: bold;
            font-size: 15px;
            line-height: 15px;
            letter-spacing: 0.06em;
            color: #252525;
        }

        .notification .app-name-cover {
            top: 24px;
            left: 46.85px;
        }

        .notification .last-seen {
            font-weight: 500;
            font-size: 12px;
            line-height: 13px;
            color: #414141;
        }

        .notification .last-seen-cover {
            top: 27px;
            right: 24px;
        }

        .notification .title {
            font-weight: bold;
            font-size: 15px;
            line-height: 17px;
            color: #252525;
        }

        .notification .title-cover {
            left: 17.3px;
            top: 55px;
        }


        .notification .description {
            font-weight: 500;
            font-size: 12px;
            line-height: 15px;
            color: #414141;
        }

        .notification .description-cover {
            left: 17.3px;
            top: 78px;
        }

        .iphone {
            width: 350px;
        }

        .larapush-notification {
            -webkit-animation: float_img 18s ease infinite;
            animation: float_img 18s ease infinite;
            width: 350px;
            left: 40px;
            top: 230px;
        }

        .truesignal {
            -webkit-animation: float_img 24s ease infinite;
            animation: float_img 24s ease infinite;
            width: 350px;
            top: -25px;
            left: 130px
        }

        @media only screen and (max-width: 992px) {
            .notification {
                transform: scale(0.8) translateX(-50px) translateY(-30px);
            }

            .larapush-notification>.notification {
                transform: scale(0.8) translateX(-50px) translateY(-50px);
            }

            .iphone {
                width: 100%;
            }

            .larapush-notification {
                -webkit-animation: none;
                animation: none;
                width: calc(100% - 80px);
                left: 40px;
                top: 350px;
            }

            .truesignal {
                -webkit-animation: none;
                animation: none;
                width: calc(100% - 80px);
                left: 40px;
                top: 230px;
            }

            .left-box {
                padding: 20px 0px 30px 0px !important;
                text-align: -webkit-center;
            }

        }

        .left-box {
            padding: 50px 0px;
            text-align: -webkit-center;
        }

        #small-video {
            display: none;
        }


        /* The outer-div to move the elements */
        .box-video {
            position: relative;
            width: 100%;
            margin: 0 auto 20px auto;
            cursor: pointer;
            overflow: hidden;
        }

        /* Set Cover aka Background-Image */
        .box-video .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            z-index: 2;
        }

        /* Add light shade to make play button visible*/
        .bg-video::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
        }


        /* The Play-Button using CSS-Only */
        .box-video .bt-play {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -30px 0 0 -30px;
            display: inline-block;
            width: 60px;
            height: 60px;
            background: rgb(255 255 255);
            border-radius: 50%;
            text-indent: -999em;
            cursor: pointer;
            z-index: 2;
            -webkit-transition: all .3s ease-out;
            transition: all .3s ease-out;
        }

        /* The Play-Triangle */
        .box-video .bt-play:after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            height: 0;
            width: 0;
            margin: -12px 0 0 -6px;
            border: solid transparent;
            border-left-color: #000;
            border-width: 12px 20px;
            -webkit-transition: all .3s ease-out;
            transition: all .3s ease-out;
        }

        .box-video:hover .bt-play {
            transform: scale(1.1);
        }

        /* When Class added the Cover gets hidden... */
        .box-video.open .bg-video {
            visibility: hidden;
            opacity: 0;

            -webkit-transition: all .6s .8s;
            transition: all .6s .8s;
        }

        /* and iframe shows up */
        .box-video.open .video-container {
            opacity: 1;
            -webkit-transition: all .6s .8s;
            transition: all .6s .8s;
        }

        /* Giving the div ratio of 16:9 with padding */
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            margin: 0;
            z-index: 1;
            padding-bottom: 56.27198%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .image-row {
            display: flex;
            align-content: space-between;
            gap: 41px;
            flex-wrap: wrap;
            padding: 30px;
            justify-content: center;
        }

        .image-row>img {
            height: 36px;
            filter: saturate(0.9);
        }

        @media (min-width: 992px) {
            .image-row {
                gap: 26px;
                padding: 0px;
            }

            .image-row>img {
                height: 51px;
            }
        }
    </style>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

        @-webkit-keyframes float_img {
            0% {
                transform: translateY(-5px)
            }

            20% {
                transform: translateY(5px)
            }

            40% {
                transform: translateY(-5px)
            }

            70% {
                transform: translateY(5px)
            }

            to {
                transform: translateY(-5px)
            }
        }

        @keyframes float_img {
            0% {
                transform: translateY(-5px)
            }

            20% {
                transform: translateY(5px)
            }

            40% {
                transform: translateY(-5px)
            }

            70% {
                transform: translateY(5px)
            }

            to {
                transform: translateY(-5px)
            }
        }


        #demo-success {
            position: absolute;
            background: #fff;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #success {
            position: absolute;
            background: #fff;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- top navbar start -->
        <div class="phone" style=" position: fixed; top: 0; left: 0;  width: 100%; z-index: 9999;">
            <div class="py-2 px-7" style="height: 50px; background: #f6faff;">
                <div class="d-flex container justify-content-between align-items-center" style="height: 100%; font-size: 14px;">
                    <div class="tophead__wrapper d-flex">
                        <div class="tophead__links show-desktop">
                            <a title="Contact on Whatsapp" href="#" target="_blank">
                                <img src="{{asset('images/icon-1.svg')}}" height="25px" width="25px" alt="" style="border-radius:50%;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                            </a>
                            <a href="#" title="Join Skype" target="_blank">
                                <img src="{{asset('images/icon-3.svg')}}" height="25px" width="25px" alt="" style="border-radius:50%;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                            </a>
                            <a href="#" title="Send Email" target="_blank">
                                <img src="{{asset('images/icon-5.svg')}}" height="25px" width="25px" alt="" style="border-radius:50%;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-md-row justify-content-end">
                        <div class="text-right">
                            <svg style="fill: rgba(8, 16, 77, 0.8)" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5437 11.3062L12.0436 9.80614C11.8941 9.74242 11.728 9.72899 11.5701 9.76788C11.4123 9.80677 11.2714 9.89587 11.1686 10.0218L9.61861 11.9156C7.18598 10.7686 5.22828 8.81089 4.08132 6.37827L5.9751 4.82824C6.10126 4.72564 6.19054 4.58473 6.22945 4.42684C6.26836 4.26896 6.25477 4.10269 6.19073 3.95322L4.69071 0.453162C4.62043 0.292037 4.49613 0.160484 4.33925 0.0811864C4.18236 0.00188915 4.00273 -0.0201818 3.83132 0.0187795L0.58126 0.768793C0.415998 0.806955 0.26855 0.900007 0.162983 1.03276C0.0574151 1.16552 -3.80697e-05 1.33013 1.8926e-08 1.49974C1.8926e-08 9.51551 6.49699 16 14.5003 16C14.6699 16.0001 14.8346 15.9427 14.9674 15.8371C15.1002 15.7315 15.1933 15.5841 15.2315 15.4187L15.9815 12.1687C16.0202 11.9964 15.9977 11.8161 15.9178 11.6587C15.8379 11.5012 15.7056 11.3766 15.5437 11.3062Z"></path>
                            </svg>
                        </div>
                        <div class="mx-3 bold" style="font-weight: 900;color:gray">
                            HOTLINE:
                        </div>
                        <a href="#" style="text-decoration: none;font-weight: 900;color:gray">
                            <div class="mx-3 bold">
                                +91 8480005441 - <span class="country">INDIA</span>
                            </div>
                        </a>
                        <div class="mx-2 line" style="height: 20px;">
                        </div>
                        <a href="#" style="text-decoration: none;font-weight: 900;color:gray">
                            <div class="ml-3 bold mr-0">
                                +1 3157074852 - <span class="country">US</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-primary py-0" style="height: 5px; width: 100vw; z-index: 1000">
            </div>
        </div>
        <!-- top navbar end -->
        <br />
        <br />



        <!-- secand top navbar start -->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="{{asset('images/larapush.jpg')}}" alt="" height="70px" width="100%"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#" style="font-weight: 700;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4 " href="#" style="font-weight: 700;">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" href="#" style="font-weight: 700;">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" href="#" style="font-weight: 700;">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ms-4" href="#" style="font-weight: 700;">Log</a>
                            </li>
                            <li class="nav-item">
                                <a class="ms-5 btn btn-primary rounded-pill text-light" href="#">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- secand top navbar end -->
        <br />