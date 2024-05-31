<x-app-layout title="">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5356FF" fill-opacity="1"
            d="M0,288L26.7,261.3C53.3,235,107,181,160,181.3C213.3,181,267,235,320,245.3C373.3,256,427,224,480,197.3C533.3,171,587,149,640,149.3C693.3,149,747,171,800,197.3C853.3,224,907,256,960,240C1013.3,224,1067,160,1120,128C1173.3,96,1227,96,1280,80C1333.3,64,1387,32,1413,16L1440,0L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
        </path>
    </svg>

    <section class="flex flex-col justify-center container">
        <h3 class="font-display text-3xl text-center text-display font-semibold antialiased">Experience</h3>


        <div class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-4">
            @foreach ($experiences as $index)
                <div class="w-full border border-1 p-4 rounded-xl shadow-xl hover:border-primary transition"
                    data-aos="fade-up" data-aos-delay="200">
                    <p class="text-secondary font-text font-medium antialiased  ">{{ $index->do_date }}</p>
                    <h3 class="font-display font-bold text-md antialiased">{{ $index->title }}</h3>
                    <p class="text-gray-400 text-sm font-text font-light">{{ $index->company }}</p>
                    <div class="py-4">
                        <p class="font-text">
                            {!! $index->description !!}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5356FF" fill-opacity="1"
            d="M0,288L26.7,261.3C53.3,235,107,181,160,181.3C213.3,181,267,235,320,245.3C373.3,256,427,224,480,197.3C533.3,171,587,149,640,149.3C693.3,149,747,171,800,197.3C853.3,224,907,256,960,240C1013.3,224,1067,160,1120,128C1173.3,96,1227,96,1280,80C1333.3,64,1387,32,1413,16L1440,0L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
    <section class="flex flex-col justify-center py-16 bg-primary">
        <h3 class="font-display text-text text-3xl text-center text-display font-semibold antialiased">Portfolio</h3>
        <div class="container">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 mt-8">
                @foreach ($portfolios as $index)
                    <div class="w-full bg-white border border-1 p-4 rounded-xl shadow-xl hover:border-tertiary transition"
                        data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ $index->url }}" target="_blank" rel="noopener noreferrer">
                            <p class="text-secondary font-text font-medium antialiased  ">{{ $index->tech_title }}</p>
                            <h3 class="font-display font-bold text-md antialiased">{{ $index->name_project }}</h3>
                            <p class="text-gray-400 text-sm font-text font-light mt-4">
                                {{ $index->description }}
                            </p>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>

    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5356FF" fill-opacity="1"
            d="M0,288L26.7,261.3C53.3,235,107,181,160,181.3C213.3,181,267,235,320,245.3C373.3,256,427,224,480,197.3C533.3,171,587,149,640,149.3C693.3,149,747,171,800,197.3C853.3,224,907,256,960,240C1013.3,224,1067,160,1120,128C1173.3,96,1227,96,1280,80C1333.3,64,1387,32,1413,16L1440,0L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
        </path>
    </svg>

    <section class="flex flex-col justify-center container py-16">
        <h3 class="font-display text-display text-3xl text-center text-display font-semibold antialiased">Design</h3>
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 mt-8">
            @foreach ($designs as $index)
                <div class="w-full bg-white border border-1 p-4 rounded-xl shadow-xl hover:border-tertiary transition"
                    data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ $index->url }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ $index->url_img }}" alt="image-design-1" class="rounded-lg border">
                        <p class="text-secondary font-text font-medium antialiased  ">{{ $index->tech_title }}</p>
                        <h3 class="font-display font-bold text-md antialiased">{{ $index->title }}</h3>
                        <p class="text-gray-400 text-sm font-text font-light mt-4">
                            {{ $index->description }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
