<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: '6rem'
                },
                fontFamily: {
                    'display': 'Noto Serif, serif',
                    'text': 'Poppins, sans-serif'
                },
                extend: {
                    colors: {
                        primary: '#5356FF',
                        secondary: '#378CE7',
                        tertiary: '#DFF5FF',
                        display: '#0C0C0C',
                        text: '#F9FBE7',
                        else: 'rgb(249 115 22)'
                    }
                }
            }
        }
    </script>

</head>

<body>
    @foreach ( $banners as $banner )
        <x-banner title="Hi, I'm {{ $banner->title }}" subTitle="{{ $banner->sub_title }}" description="{{ $banner->description }}" resume="{{ $banner->resume }}" linked="{{ $banner->social_media }}"/>
        
    @endforeach

    <main>
        {{ $slot }}
    </main>

   

    

    <section class="flex flex-col justify-center items-center bg-primary py-16">
        <h3 class="font-display text-display text-3xl text-center text-white font-semibold antialiased">Let's Connect!</h3>

        <div class="grid grid-cols-1 gap-4 mx-4 lg:grid-cols-1 mt-8">
            <div class="w-full bg-white border border-1 p-4 rounded-xl shadow-xl hover:border-tertiary transition"
                data-aos="fade-up" data-aos-delay="200">
                <div class="flex flex-col justify-center items-center">
                    <img src="im.png" alt="image-me" class="rounded-full w-24 h-24 mt-8 border" >
                    <p class="text-secondary font-text font-medium antialiased  mt-4">Muhammad Fauzi</p>
                    <h3 class="font-display font-bold text-md antialiased">Junior Technology Support | Web Enthusiast</h3>
                    <p class="text-gray-400 text-sm font-text font-light mt-4">
                        Waktu malam, ialah waktu produktifitas yang sangat menyenangkan!
                    </p>
                </div>
            </div>
        </div>
    </section>
   <x-footer/>
    <script>
        AOS.init();
    </script>
</body>

</html>