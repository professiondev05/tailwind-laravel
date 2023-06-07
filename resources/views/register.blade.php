<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src='https://kit.fontawesome.com/f6f0822ab2.js' crossorigin='anonymous'></script> --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>
    <div class="root grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 grid-cols-1">
        <div class="banner lg:block md:block sm:hidden hidden">
            <img class="object-none h-screen w-full" src="{{ asset('images/img_inscription.svg') }}" />
        </div>
        <div class="content py-[50px] px-[30px]">
            <div
                class="header flex flex-row items-center lg:justify-between md:justify-between sm:justify-center justify-center">
                <a href="#" class="flex flex-row items-center">
                    <img src="{{ asset('images/logo.svg') }}" alt="" class="mr-3" />
                    <span class="text-title6 font-bold font-serif text-primaryBeta">UI Webkit</span>
                </a>
                <div class="lg:flex md:hidden sm:hidden hidden items-center">
                    <span class="text-body text-dark font-normal font-inter mr-[12px]">Vous avez déjà un compte?</span>
                    <span class="text-button text-primary font-bold font-serif">Connectez-vous</span>
                </div>
            </div>
            <div class="flex flex-col container md:items-start sm:items-center justify-center w-full h-full">
                <div class="text-title3 text-primary font-bold font-serif">Inscription</div>
                <div class="text-subtitle2 text-dark font-semibold font-inter mt-[40px]">2/2 - Informations générales
                </div>
                <div class="w-[336px] flex flex-col gap-[24px] mt-[24px]">
                    <div class="relative float-label-input">
                        <input type="text" placeholder=" " class="register-input">
                        <label for="name"
                            class="absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-outbg-white px-[16px] text-grey-darker">Prénom</label>
                    </div>
                    <div class="relative float-label-input">
                        <input type="text" placeholder=" " class="register-input">
                        <label for="name"
                            class="absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-outbg-white px-[16px] text-grey-darker">Nom</label>
                    </div>
                    <div class="relative float-label-input">
                        <input type="email" placeholder=" "
                            class="peer register-input ring-black outline-black shadow-none">
                        <label for="name"
                            class="absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-outbg-white px-[16px] text-grey-darker">Votre
                            email</label>
                        <p class="mt-2 hidden peer-invalid:block text-caption text-error font-normal">
                            Please provide a valid email address.
                        </p>
                    </div>
                    <div class="relative float-label-input flex items-center">
                        <input type="password" placeholder=" " class="register-input">
                        <label for="name"
                            class="absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-outbg-white px-[16px] text-grey-darker">Mot
                            de passe</label>
                        <iconify-icon class="text-medium text-[20px] cursor-pointer absolute right-5" icon="mdi:eye"
                            flip="vertical" />
                    </div>
                    <div class="relative float-label-input flex items-center">
                        <input type="password" placeholder=" " class="register-input">
                        <label for="name"
                            class="absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-outbg-white px-[16px] text-grey-darker">Confirmation
                            mot de passe</label>
                        <iconify-icon class="text-medium text-[20px] cursor-pointer absolute right-5" icon="mdi:eye-off"
                            flip="vertical" />
                    </div>
                    <div class="flex flex-row items-center gap-[20px]">
                        <input type="checkbox" class="rounded border-2 border-black focus:outline-0 focus:ring-0" />
                        <span class="text-body text-dark font-normal font-inter">J’ai lu et j’accepte les CGU</span>
                    </div>
                </div>
                <div class="footer mt-[54px]">
                    <button
                        class="px-[16px] py-[12px] rounded-full bg-primary text-backgroundGamma text-button font-bold font-serif">Inscription</button>
                </div>
                <div class="lg:hidden md:flex sm:flex flex flex-row items-center mt-[54px]">
                    <span class="text-body text-dark font-normal font-inter mr-[12px]">Vous avez déjà un compte?</span>
                    <span class="text-button text-primary font-bold font-serif">Connectez-vous</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
