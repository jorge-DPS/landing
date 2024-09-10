<footer class="bg-edblue relative z-[1] before:absolute before:inset-0 before:-z-[1] before:bg-[url('../assetsFrontend/img/footer-bg.jpg')] before:opacity-[7%] before:bg-no-repeat before:bg-cover before:bg-center text-white">
    <div class="mx-[19.71%] xxxl:mx-[14.71%] xxl:mx-[9.71%] xl:mx-[5.71%] md:mx-[12px]">
        <!-- footer top -->
        <div class="flex flex-wrap justify-between gap-[35px] pt-[100px] pb-[58px] border-b border-white/20">
            <!-- footer about -->
            <div class="max-w-[370px] xxs:max-w-full">
                <a href="index.html" class="inline-block mb-[23px]"><img src="assetsFrontend/img/logo-light.png" alt="logo"></a>
                <p class="text-[#D9D9D9] mb-[19px]">Nullam interdum libero vitae pretium aliquam donec nibh purus laoreet in ullamcorper vel malesuada sit amet enim.</p>

                <ul class="space-y-[17px]">
                    <li class="flex items-center gap-[8px]">
                        <span class="icon"><img src="assetsFrontend/img/call-icon-yellow.svg" alt="icon"></span>
                        <a href="tel:+6108-666-0112" class="hover:text-edyellow">+6108-666-0112</a>
                    </li>

                    <li class="flex items-center gap-[8px]">
                        <span class="icon"><img src="assetsFrontend/img/message-yellow.svg" alt="icon"></span>
                        <a href="mailto:info@gmail.com" class="hover:text-edyellow">info@gmail.com</a>
                    </li>
                </ul>
            </div>

            <!-- footer widget -->
            <div>
                <h6 class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">Quick Links</h6>

                <div class="space-y-[18px]">
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Edutics About</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Contact Us</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Blog & News</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> FAQ’S</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Login / Register</a>
                </div>
            </div>

            <!-- footer widget -->
            <div>
                <h6 class="font-semibold text-[18px] pb-[15px] mb-[30px] relative before:absolute before:bottom-0 before:left-0 before:h-[1.5px] before:w-[20px] before:bg-edyellow after:absolute after:bottom-0 after:left-[30px] after:h-[1.5px] after:w-[63px] after:bg-white">Main Navigation</h6>

                <div class="space-y-[18px]">
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Admission</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Research</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Academics</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Student Life</a>
                    <a href="#" class="flex items-center gap-[10px] opacity-80 hover:text-edyellow"><span class="icon"><img src="assetsFrontend/img/double-arrow.svg" alt="icon"></span> Conferences</a>
                </div>
            </div>


            <div class="max-w-[300px]">
                <div>
                    <style>
                        .brutal-subscribe__container {
                            width: 100%;
                            max-width: 500px;
                            background-color: #fff;
                            border: 5px solid #000;
                            position: relative;
                            overflow: hidden;
                            box-shadow: 15px 15px 0 rgba(0, 0, 0, 0.605);
                            transition: transform 0.3s, box-shadow 0.3s;
                        }

                        .brutal-subscribe__container:hover {
                            transform: translate(-5px, -5px);
                            box-shadow: 20px 20px 0 rgba(0, 0, 0, 0.2);
                        }

                        .brutal-subscribe__header {
                            background-color: #000;
                            color: #fff;
                            padding: 20px;
                            position: relative;
                            overflow: hidden;
                        }

                        .brutal-subscribe__header::before {
                            content: "";
                            position: absolute;
                            top: -50%;
                            left: -50%;
                            width: 200%;
                            height: 200%;
                            background: repeating-linear-gradient(
                                    45deg,
                                    #ff0 0,
                                    #ff0 10px,
                                    #000 10px,
                                    #000 20px
                            );
                            opacity: 0.1;
                            animation: stripe-animation 20s linear infinite;
                        }

                        @keyframes stripe-animation {
                            0% {
                                transform: rotate(0deg);
                            }
                            100% {
                                transform: rotate(360deg);
                            }
                        }

                        .brutal-subscribe__title {
                            display: block;
                            font-size: 36px;
                            font-weight: bold;
                            position: relative;
                            z-index: 1;
                            text-shadow: 3px 3px 0 rgb(140, 140, 19);
                        }

                        .brutal-subscribe__subtitle {
                            display: block;
                            font-size: 14px;
                            position: relative;
                            z-index: 1;
                        }

                        .brutal-subscribe__form {
                            padding: 20px;
                        }

                        .brutal-subscribe__input {
                            width: calc(100% - 26px);
                            padding: 10px;
                            border: 3px solid #000;
                            font-family: inherit;
                            font-size: 16px;
                            margin-bottom: 10px;
                            transition: transform 0.3s, background-color 0.3s;
                        }

                        .brutal-subscribe__input:focus {
                            outline: none;
                            background-color: #ff0;
                            transform: scale(1.05);
                        }

                        .brutal-subscribe__button {
                            width: 60%;
                            padding: 10px;
                            background-color: #000;
                            color: #fff;
                            border: 3px solid #000;
                            font-family: inherit;
                            font-size: 18px;
                            font-weight: bold;
                            cursor: pointer;
                            transition: all 0.3s;
                            position: relative;
                            overflow: hidden;
                        }

                        .brutal-subscribe__button::after {
                            content: "→";
                            position: absolute;
                            top: 50%;
                            right: -30px;
                            transform: translateY(-50%);
                            transition: right 0.3s;
                        }

                        .brutal-subscribe__button:hover {
                            background-color: #ff0;
                            color: #000;
                        }

                        .brutal-subscribe__button:hover::after {
                            right: 10px;
                        }

                        .brutal-subscribe__button:active {
                            transform: scale(0.95);
                        }

                        .brutal-subscribe__decor {
                            position: absolute;
                            bottom: -10px;
                            right: -10px;
                            background-color: #ff0;
                            color: #000;
                            padding: 5px 10px;
                            transform: rotate(-5deg);
                            font-weight: bold;
                            font-size: 24px;
                            border: 3px solid #000;
                            transition: transform 0.3s;
                        }

                        .brutal-subscribe__container:hover .brutal-subscribe__decor {
                            transform: rotate(3deg) scale(1);
                        }

                        @media (max-width: 500px) {
                            .brutal-subscribe__container {
                                width: 90%;
                            }
                        }

                        @keyframes glitch {
                            0% {
                                transform: translate(0);
                            }
                            20% {
                                transform: translate(-2px, 2px);
                            }
                            40% {
                                transform: translate(-2px, -2px);
                            }
                            60% {
                                transform: translate(2px, 2px);
                            }
                            80% {
                                transform: translate(2px, -2px);
                            }
                            100% {
                                transform: translate(0);
                            }
                        }

                        .brutal-subscribe__container:hover .brutal-subscribe__title {
                            animation: glitch 0.3s infinite;
                        }

                    </style>
                    <div class="brutal-subscribe">
                        <div class="brutal-subscribe__container">
                            <div class="brutal-subscribe__header">
                                <span class="brutal-subscribe__title">S-GEORGE</span>
                                <span class="brutal-subscribe__subtitle"
                                >QUIERES RECIBIR INFORMACIÓN</span
                                >
                            </div>
                            <form class="brutal-subscribe__form">
                                <input
                                        type="email"
                                        class="brutal-subscribe__input"
                                        placeholder="tucorreo@ejemplo.com"
                                        required=""
                                />
                                <button type="submit" class="brutal-subscribe__button">SUSCRIBETE</button>
                            </form>
                            <div class="brutal-subscribe__decor">SCHOOL</div>
                        </div>
                    </div>


                    <div class="flex gap-[20px] mt-[30px]">
                        <span class="pl-[30px] font-medium text-[#d9d9d9] relative before:absolute before:left-0 before:top-[50%] before:-translate-y-[50%] before:h-[1px] before:w-[20px] before:bg-[#d9d9d9]">Follow on</span>
                        <span class="inline-flex gap-[16px] text-[#d9d9d9]">
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="hover:text-edyellow"><i class="fa-brands fa-youtube"></i></a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-between gap-[15px] pt-[20px] pb-[50px] text-[#d9d9d9]">
            <p>&copy; All Copyright 2024 by Desarrollamelo</p>
            <div class="flex flex-wrap gap-[40px] xxs:gap-[15px]">
                <a href="#" class="hover:text-edyellow">Terms & Conditions</a>
                <a href="#" class="hover:text-edyellow">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>