<div class="p-6 lg:p-8 bg-[#3B8A97] border-b border-gray-200">
    <div class="flex gap-x-3">
        <x-application-logo class="block h-12 w-auto" />
        <h1 class="my-auto font-bold text-3xl text-white">
            Care Mind
        </h1>
    </div>

    <h1 class="mt-8 text-2xl font-medium text-[#FFA842]">
        Welcome to your Jetstream application!
    </h1>

    <p class="mt-6 text-gray-100 leading-relaxed line-clamp-2">
        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is
        designed
        to help you build your application using a development environment that is simple, powerful, and enjoyable. We
        believe
        you should love expressing your creativity through programming, so we have spent time carefully crafting the
        Laravel
        ecosystem to be a breath of fresh air. We hope you love it.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    @foreach ($artikels as $artikel)
        <div class="flex flex-col gap-y-5">
            <div>
                <h1 class="text-2xl">
                    {{ $artikel->title }}
                </h1>
                <p class="line-clamp-3 text-gray-500">
                    {{ $artikel->content }}
                </p>
            </div>
            <div>
                <a href="{{ url('artikel', ['artikels' => $artikel->id]) }}" class="bg-teal-500 px-3 py-2 text-white rounded-xl w-20 text-center">Baca</a>
                <a href="{{route('artikel.edit', $artikel->id)}}" class="bg-[#FFA842] px-3 py-2 text-white rounded-xl w-20 text-center">Edit</a>
            </div>
        </div>
    @endforeach
</div>
