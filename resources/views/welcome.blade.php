<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Nutrio restaurant</title>
    <meta name="description" content="" />

    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content=" " />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Title of the project" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://github.com/PaulleDemon" />
    <!--Replace with the current website url-->
    <meta property="og:image" content="" />

    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" />

    <!-- <link rel="stylesheet" href="../../tailwind-css/tailwind-runtime.css"> -->
    <link rel="stylesheet" href="./css/tailwind-build.css" />
    <link rel="stylesheet" href="./css/index.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="tw-flex tw-min-h-[100vh] tw-w-full tw-flex-col tw-text-white tw-bg-[#000]">
    <header class="tw-top-0 tw-z-20 tw-flex tw-h-[60px] tw-w-full tw-px-[10%] max-md:tw-mr-auto md:tw-justify-around">


        <div
            class="tw-h-[50px] tw-w-[150px] tw-p-[4px] tw-text-primary tw-text-2xl tw-font-semibold tw-place-content-center">
            Nutrio
        </div>
        <div class="collapsible-header animated-collapse" id="collapsed-items">
            <div
                class="tw-flex tw-h-full tw-w-max tw-gap-5 tw-text-base tw-text-white max-md:tw-mt-[30px] max-md:tw-flex-col max-md:tw-place-items-end max-md:tw-gap-5 md:tw-mx-auto md:tw-place-items-center">
                <a class="header-links" href=""> About us </a>
                <a class="header-links" href=""> Menus </a>
                <a class="header-links" href=""> Contact us </a>
                <a class="header-links" href="" target="_blank" rel="noreferrer">
                    Order online
                </a>
            </div>
            <div
                class="tw-flex tw-place-items-center tw-gap-[20px] tw-text-xl max-md:tw-w-full max-md:tw-place-content-center max-md:!tw-text-white">
                <a href="https://www.facebook.com/" target="_blank" rel="noreferrer noopener" area-label="facebook"
                    class="header-links tw-transition-colors tw-duration-[0.3s]">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="https://www.instagram.com/" target="_blank" rel="noreferrer noopener" area-label="twitter"
                    class="header-links tw-transition-colors tw-duration-[0.3s]">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>
        </div>
        <button class="bi bi-list tw-absolute tw-right-3 tw-top-3 tw-z-50 tw-text-3xl tw-text-white md:tw-hidden"
            onclick="toggleHeader()" aria-label="menu" id="collapse-btn">
            <!-- <i class="bi bi-list"></i> -->
        </button>
    </header>

    <section
        class="tw-relative tw-flex  tw-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-overflow-hidden max-md:tw-h-[100dvh]"
        id="discount">

        <div class="tw-flex max-lg:tw-flex-col tw-gap-2 tw-p-2 tw-w-full tw-h-full">
            <div
                class="tw-flex tw-w-full lg:tw-max-w-[50vw] tw-h-full tw-flex-col
                             tw-place-content-center tw-place-items-center 
                            tw-gap-4 tw-p-2 tw-text-white">
                <div class="tw-flex tw-flex-col tw-w-fit max-lg:tw-place-items-center tw-gap-4">
                    <h1 data-aos="fade-right" data-aos-duration="700"
                        class="tw-text-7xl max-lg:tw-leading-relaxed tw-font-semibold max-md:tw-text-center max-md:tw-text-5xl">
                        Eat Healthy with
                        <br>
                        Nutrio Restaurant
                    </h1>
                    <p class="tw-max-w-[400px] max-lg:tw-text-center" data-aos="fade-right" data-aos-duration="700">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta error eveniet, fugit numquam
                        iste dolorum.
                    </p>
                    <a href="https://" target="_blank" rel="noreferrer noopener" data-aos="fade-up"
                        data-aos-duration="700"
                        class="tw-flex tw-rounded-sm tw-bg-secondary tw-text-medium tw-p-3 
                                    tw-px-[20px] tw-w-fit tw-text-white tw-transition-colors tw-duration-[0.3s] 
                                    hover:tw-bg-primary hover:tw-text-black">
                        Order online
                    </a>
                </div>
            </div>

            <div class="tw-flex tw-place-content-center tw-place-items-center tw-w-full lg:tw-max-w-[50vw]">
                <div class="tw-max-w-[560px] tw-w-full" data-aos="fade-left" data-aos-duration="700">
                    <img src="/assets/images/homepage/pizza.png" alt="food"
                        class="tw-object-contain tw-w-full tw-h-full">
                </div>
            </div>
        </div>



    </section>

    <section
        class="tw-flex tw-min-h-[80vh] tw-w-full tw-place-content-center tw-place-items-center tw-gap-[10%]  tw-p-4 tw-px-[20%] max-md:tw-flex-col max-md:tw-gap-[4%] max-md:tw-px-[5%]">
        <div data-aos="fade-up-right" data-aos="700"
            class="tw-flex tw-h-[350px] tw-w-[350px] tw-overflow-hidden tw-rounded-md max-md:tw-mt-[5%] max-md:tw-h-[300px] max-md:tw-w-[300px]">
            <img src="./assets/images/homepage/hero.png" alt="coffee" class="tw-w-full tw-object-cover" />
        </div>
        <div class="tw-flex tw-h-full tw-flex-col tw-gap-[5%] max-md:tw-mt-2 max-md:tw-gap-[3%] max-md:tw-text-center">
            <h2 class="tw-text-4xl tw-font-medium max-md:tw-text-2xl" data-aos="fade-left" data-aos-duration="600">
                <span class="tw-text-5xl tw-text-primary tw-font-medium">10%</span>
                off every wednesday
            </h2>
            <div class="tw-mt-6 tw-max-w-[350px] tw-text-justify" data-aos="fade-left" data-aos-duration="700">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam maxime quis placeat assumenda, eligendi
                incidunt?
            </div>
            <a href="https://maps.app.goo.gl/" data-aos="fade-left" data-aos-duration="800"
                class="btn tw-mt-5 tw-gap-1 tw-font-medium tw-transition-transform tw-duration-[0.3s] hover:tw-translate-x-2 max-md:tw-mx-auto">
                <span>View on map</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        <div></div>
    </section>

    <section
        class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center  tw-p-[5%] max-md:tw-px-[5%]">
        <h2 class="tw-text-xl tw-italic" data-aos="zoom-in" data-aos-duration="700">
            Discover Authentic English Flavours
        </h2>
        <h3 class="primary-text-color tw-text-4xl tw-font-semibold" data-aos="zoom-in" data-aos-duration="700">
            Diners Favorite
        </h3>

        <div class="tw-mt-[5%] tw-flex tw-w-full tw-place-content-center tw-gap-5 max-md:tw-flex-wrap">
            <div class="tw-flex tw-max-w-[650px] tw-flex-col tw-gap-8 ">
                <div data-aos="fade-left" data-aos-duration="700"
                    class="tw-flex tw-gap-10 max-md:tw-flex-col max-md:tw-place-items-center">
                    <div class="tw-w-[180px] tw-h-[180px] tw-overflow-hidden tw-rounded-md">
                        <img src="./assets/images/homepage/coffee.jpg" alt="authentic wine"
                            class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />
                    </div>
                    <div
                        class="tw-flex tw-flex-col tw-gap-2 max-md:tw-place-items-center 
                                    tw-max-w-[300px]">
                        <h3 class="tw-text-2xl tw-font-semibold">Special chinese coffee</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, adipisci.
                        </p>
                        <div class="tw-mt-2 tw-text-primary">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="http://" class="btn tw-mt-auto">
                            Order now
                        </a>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-duration="800"
                    class="tw-flex tw-gap-10 max-md:tw-flex-col max-md:tw-place-items-center">
                    <div class="tw-w-[180px] tw-h-[180px] tw-overflow-hidden tw-rounded-md">
                        <img src="./assets/images/homepage/breakfast.jpg" alt="authentic wine"
                            class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-max-w-[300px] tw-gap-2  max-md:tw-place-items-center">
                        <h3 class="tw-text-2xl tw-font-semibold">Bacon and Eggs</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, adipisci.
                        </p>
                        <div class="tw-mt-2 tw-text-primary">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="http://" class="btn tw-mt-auto">
                            Order now
                        </a>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="900"
                    class="tw-flex tw-gap-10 max-md:tw-flex-col max-md:tw-place-items-center">
                    <div class="tw-w-[180px] tw-h-[180px] tw-overflow-hidden tw-rounded-md">
                        <img src="./assets/images/homepage/dessert.jpg" alt="authentic wine"
                            class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2 tw-max-w-[300px] max-md:tw-place-items-center">
                        <h3 class="tw-text-2xl tw-font-semibold">Red pastry</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, adipisci.
                        </p>
                        <div class="tw-mt-2 tw-text-primary">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <a href="http://" class="btn tw-mt-auto">
                            Order now
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section
        class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center  tw-p-[5%] max-md:tw-px-[5%]">

        <h3 class="primary-text-color tw-text-4xl tw-font-semibold" data-aos="zoom-in-down" data-aos-duration="700">
            Explore our menu
        </h3>

        <div class="tw-mt-[5%] tw-flex tw-w-full tw-place-content-center tw-gap-5 max-md:tw-flex-wrap">
            <div class="tw-flex tw-max-w-[650px] tw-flex-col tw-gap-5 tw-overflow-clip md:tw-max-h-[700px]">
                <div class="tw-flex tw-gap-5 max-md:tw-flex-col">
                    <div data-aos="fade-right" data-aos-duration="700"
                        class="menu-item-container tw-relative tw-h-[450px] tw-w-[80%] tw-cursor-pointer tw-overflow-clip tw-rounded-lg max-md:tw-w-full">
                        <img src="./assets/images/homepage/coffee.jpg" alt="authentic wine"
                            class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />

                        <div class="menu-btn tw-text-xl">Coffee</div>
                    </div>
                    <div data-aos="fade-down" data-aos-duration="700"
                        class="menu-item-container tw-relative tw-h-[450px] tw-w-[80%] tw-cursor-pointer tw-overflow-clip tw-rounded-lg max-md:tw-w-full">
                        <img src="./assets/images/homepage/lunch.jpg" alt="Lunch"
                            class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />

                        <div class="menu-btn tw-text-xl">Lunch</div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800"
                    class="menu-item-container tw-relative tw-h-[240px] tw-w-full tw-cursor-pointer tw-overflow-clip tw-rounded-lg">
                    <img src="./assets/images/homepage/dinner.jpg" alt="authentic wine"
                        class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />

                    <div class="menu-btn tw-text-xl">Dinner</div>
                </div>
            </div>
            <div class="tw-flex tw-flex-col tw-gap-5 md:tw-h-[700px]">
                <div data-aos="fade-left" data-aos-duration="700"
                    class="menu-item-container
                    tw-relative tw-h-[33%] tw-w-[350px] tw-cursor-pointer tw-overflow-clip tw-rounded-lg
                    max-md:tw-w-full">
                    <img src="./assets/images/homepage/breakfast.jpg" alt="authentic wine"
                        class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />

                    <div class="menu-btn tw-text-xl">Breakfast</div>
                </div>
                <div data-aos="fade-left" data-aos-duration="800"
                    class="menu-item-container tw-relative tw-h-[33%] tw-w-[350px] tw-cursor-pointer tw-overflow-clip tw-rounded-lg max-md:tw-w-full">
                    <img src="./assets/images/homepage/wine.jpeg" alt="authentic wine"
                        class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />

                    <div class="menu-btn tw-text-xl">Drinks</div>
                </div>
                <div data-aos="fade-left" data-aos-duration="900"
                    class="menu-item-container tw-relative tw-h-[33%] tw-w-[350px] tw-cursor-pointer tw-overflow-clip tw-rounded-lg max-md:tw-w-full">
                    <img src="./assets/images/homepage/dessert.jpg" alt="Desserts"
                        class="tw-h-full tw-w-full tw-object-cover tw-transition-[scale] tw-duration-[0.4s]" />

                    <div class="menu-btn tw-text-xl">Desserts</div>
                </div>
            </div>
        </div>
    </section>


    <section
        class="tw-flex tw-w-full tw-place-content-center tw-place-items-center tw-gap-[10%] tw-overflow-hidden tw-bg-[#28282859] tw-p-4 tw-px-[10%] max-md:tw-flex-col"
        id="reservation">
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom"
            class="tw-flex tw-h-[350px] tw-w-[350px] tw-overflow-hidden tw-rounded-md max-md:tw-hidden">
            <img src="./assets/images/homepage/restaurant.jpg" alt="restaurant" class="tw-w-full tw-object-cover" />
        </div>
        <div class="tw-mt-[5%] tw-flex tw-h-full tw-flex-col tw-gap-[5%]">
            <div class="tw-flex tw-flex-col tw-gap-2">
                <h2 data-aos="fade-left" data-aos-duration="300"
                    class="primary-text-color tw-text-3xl tw-font-medium max-md:tw-text-xl">
                    Reservation
                </h2>
                <h3 class="tw-text-5xl max-md:tw-text-3xl" data-aos="fade-left" data-aos-duration="400">
                    Book your table
                </h3>
            </div>
            <form class="tw-mt-4 tw-flex tw-max-w-[350px] tw-flex-col tw-gap-3">
                <div class="tw-flex tw-flex-col tw-gap-4">
                    <div class="tw-flex tw-flex-col tw-gap-1" data-aos="fade-left" data-aos-duration="500">
                        <div class="tw-text-gray-300">Name</div>
                        <input type="text" class="input" maxlength="10" required placeholder="name" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1" data-aos="fade-left" data-aos-duration="600">
                        <div class="tw-text-gray-300">Phone</div>
                        <input type="text" class="input" required placeholder="phone" />
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1" data-aos="fade-left" data-aos-duration="700">
                        <div class="tw-text-gray-300">Email</div>
                        <input type="email" class="input" required placeholder="email" id="email" />
                    </div>
                </div>

                <div class="tw-flex tw-gap-4">
                    <div class="tw-flex tw-w-full tw-flex-col tw-gap-1" data-aos="fade-left" data-aos-duration="800">
                        <div class="tw-text-gray-300">Time</div>
                        <select name="timings" id="timings" class="input"></select>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-1" data-aos="fade-left" data-aos-duration="900">
                        <div class="tw-text-gray-300">Date</div>
                        <input type="date" class="input" required placeholder="date" id="date" />
                    </div>
                </div>

                <div class="tw-flex tw-w-full tw-gap-4 max-md:tw-flex-col" data-aos="fade-left"
                    data-aos-duration="1000">
                    <div class="tw-flex tw-w-full tw-flex-col tw-gap-1">
                        <div class="tw-text-gray-300">People</div>
                        <input type="number" value="2" min="0" max="15" class="input" />
                    </div>
                </div>

                <button type="submit" data-aos="fade-up" data-aos-duration="600"
                    class="btn tw-ml-auto tw-mt-5 tw-transition-transform tw-duration-[0.3s] hover:tw-translate-x-2">
                    <span>Book table</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </form>
            <div class="tw-mt-4 tw-flex tw-flex-col tw-gap-2 tw-text-center">
                <h3 data-aos="zoom-in" data-aos-duration="800" class="tw-text-xl">To book call</h3>

                <div class="primary-text-color tw-text-3xl" data-aos="zoom-in" data-aos-duration="800">
                    +123 232 123
                </div>
            </div>
        </div>
    </section>

    <section data-aos="flip-right" data-aos-duration="1000"
        class="tw-mt-5 tw-flex tw-w-full tw-flex-col tw-place-items-center tw-p-[5%]">
        <h3 class="tw-text-primary tw-text-4xl tw-font-medium max-md:tw-text-2xl">
            What some of our diners say
        </h3>

        <div class="tw-mt-[5%] tw-flex tw-w-full tw-place-content-center tw-gap-[5%]">
            <div class="review-container tw-flex tw-flex-col">
                <div class="tw-flex !tw-h-[150px] tw-max-w-[550px]">
                    <div class="slides fade tw-text-justify tw-text-lg max-md:tw-text-base">
                        <q class="tw-italic tw-text-gray-300">
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Quaerat veritatis assumenda
                            dolor delectus laborum odio consequatur
                            accusantium quam? Ad, odit.
                        </q>
                        <div class="tw-mt-2 tw-text-primary">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="tw-mt-3">- Trich B</p>
                    </div>

                    <div class="slides fade tw-text-justify tw-text-lg max-md:tw-text-base">
                        <q class="tw-italic tw-text-gray-300">
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Totam, sint.
                        </q>
                        <div class="tw-mt-2 tw-text-primary">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="tw-mt-3">- Bára Müllerová</p>
                    </div>

                    <div class="slides fade tw-text-justify tw-text-lg max-md:tw-text-base">
                        <q class="tw-italic tw-text-gray-300">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Dolore sapiente possimus
                            quibusdam nesciunt, architecto distinctio.
                        </q>
                        <div class="tw-mt-2 tw-text-primary">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="tw-mt-3">- Matt freeman</p>
                    </div>
                </div>

                <!-- Navigation dots -->
                <div class="dots-container tw-mt-auto">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>

        <div class="tw-mt-[5%] tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-5">
            <h2 class="primary-text-color tw-text-3xl">On the map</h2>
            <iframe src="https://www.google.com/maps/embed?" class="tw-h-[350px] tw-w-full max-md:tw-w-full"
                style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>



    <footer
        class="tw-flex tw-w-full tw-place-content-around tw-gap-3  tw-p-[5%] tw-px-[10%] tw-text-white max-md:tw-flex-col">
        <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-place-items-center tw-gap-6 max-md:tw-w-full">
            <h3 class="tw-text-primary tw-text-4xl tw-font-semibold">
                Nutrio
            </h3>
            <div>
                2 Lord Edward St,
                <br />
                Temple Bar,
                <br />
                D02 P634,
                <br />
                US
            </div>
            <div class="tw-mt-3 tw-text-lg tw-font-semibold">Follow us</div>
            <div class="tw-flex tw-gap-4 tw-text-xl">
                <a href="" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/pauls_freeman" aria-label="Twitter">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://twitter.com/pauls_freeman" class="tw-h-[40px] tw-w-[40px]" aria-label="Tripadvisor">
                    <svg width="20" height="20" viewBox="0 0 13.229166 13.229167" version="1.1"
                        id="svg1" class="tw-h-[35px] tw-w-[35px]" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1" />
                        <g id="layer1">
                            <path style="fill: #fff; stroke-width: 1.30792"
                                d="M 6.0253827,10.495874 C 5.5783463,10.001905 5.4730621,9.9874894 4.9562421,10.349485 4.6409418,10.57033 3.9735136,10.751021 3.4730684,10.751021 0.89854523,10.751021 -0.60286372,8.3105194 0.57289183,6.0368587 0.91665107,5.3721018 0.94696499,5.0667983 0.70731296,4.6830543 0.43285458,4.2435768 0.4965716,4.1875715 1.2710225,4.1875715 c 0.4802291,0 1.4350231,-0.2768956 2.1217645,-0.6153233 1.7482569,-0.8615452 4.8670347,-0.8585049 6.5021593,0.00634 0.6332597,0.3349417 1.6060847,0.6089848 2.1618327,0.6089848 0.955629,0 0.986284,0.026701 0.56505,0.4921614 -0.412837,0.4561778 -0.404172,0.5754932 0.118511,1.6319261 0.477372,0.9648547 0.517018,1.2818537 0.258339,2.0656558 C 12.356309,10.323718 10.162954,11.286931 8.4225426,10.386929 7.6572822,9.991197 7.5660532,9.9989988 7.0617703,10.503283 6.5233943,11.041658 6.5192825,11.04163 6.0253827,10.495796 Z M 5.0317745,8.9365392 C 5.7722627,7.9951606 5.7488545,7.1275495 4.9581665,6.2083199 4.5005696,5.676332 4.0588414,5.4637977 3.4107611,5.4637977 c -0.6480802,0 -1.0898085,0.2125343 -1.5474052,0.7445222 -0.7906881,0.9192296 -0.8140964,1.7868407 -0.073608,2.7282193 0.4371956,0.555804 0.8078632,0.7205729 1.6210132,0.7205729 0.81315,0 1.1838179,-0.1647689 1.6210134,-0.7205729 z M 2.7954378,8.5412992 C 2.2053961,8.1976314 2.1708939,7.1104489 2.7351672,6.6421435 3.055027,6.3766836 3.3124895,6.3674224 3.8290754,6.6027948 4.6638042,6.9831227 4.7506658,8.1388301 3.9756941,8.5535824 3.3461405,8.8905092 3.3958837,8.8910272 2.7954378,8.5412992 Z M 11.25909,9.2465573 C 11.976631,8.7439728 12.303797,7.424765 11.898649,6.6677353 11.397186,5.7307446 10.165115,5.2433824 9.1725513,5.5893919 8.2063958,5.9261953 7.7863939,6.5471603 7.7863939,7.6387992 c 0,1.6428498 2.0605831,2.5968408 3.4726961,1.6077581 z M 9.127216,8.2631641 C 8.7127456,7.8486937 8.6567966,7.6134425 8.875505,7.2047823 9.0301735,6.9157817 9.2802245,6.602997 9.431174,6.5097051 9.8428305,6.2552872 10.721259,6.610132 10.912317,7.1080177 11.383218,8.335167 10.057255,9.193203 9.127216,8.2631641 Z M 8.3365565,4.1384237 C 7.7390342,3.8697618 5.2528645,3.8815881 4.8212489,4.1551454 4.5417361,4.3323 4.6520767,4.5287674 5.28366,4.9784943 5.7398981,5.3033646 6.1875949,5.8036157 6.2785418,6.0901635 6.4249349,6.5514079 6.5761377,6.4800237 7.5969399,5.4677347 8.5012911,4.5709256 8.6608127,4.2842177 8.3365565,4.1384237 Z"
                                id="path1" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>

        <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
            <h2 class="tw-text-3xl max-md:tw-text-xl">Menu</h2>
            <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                <a href="" class="footer-link">Breakfast menu</a>
                <a href="" class="footer-link">Lunch menu</a>
                <a href="" class="footer-link">Dessert menu</a>
                <a href="" class="footer-link">Drinks menu</a>
            </div>
        </div>
        <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-gap-4">
            <h2 class="tw-text-3xl max-md:tw-text-xl">Resources</h2>
            <div class="tw-flex tw-flex-col tw-gap-3 max-md:tw-text-sm">
                <a href="" class="footer-link">About us</a>
                <a href="" class="footer-link">FAQ</a>
                <a href="" class="footer-link">Contact Us</a>
                <a href="" class="footer-link">Locations</a>
                <a href="" class="footer-link">Privacy policy</a>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"
    integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"
    integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="./scripts/utils.js"></script>
<script src="./index.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- https://github.com/PaulleDemon -->

</html>
