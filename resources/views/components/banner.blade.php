<section class="bg-primary flex flex-col justify-center items-center py-12 p-4 lg:py-24">
    <h3 class="font-display text-3xl text-text font-semibold antialiased lg:text-6xl">{{ $title }}</h3>
    <p class="font-text text-sm font-medium text-text antialiased lg:text-xl">{{ $subTitle }}</p>
    <p
        class="text-text font-text text-center antialiased leading-loose tracking-wide text-sm py-4 lg:text-lg lg:w-[760px]">
      {{ $description }}
    </p>
    <div class="mt-8 flex flex-row gap-4 lg:mt-16">
        <x-anchor type="primary" name_button="Resume" link="{{ $resume }}" />
        <x-anchor type="secondary" name_button="Let's go" link="{{ $linked }}" />

    </div>
</section>