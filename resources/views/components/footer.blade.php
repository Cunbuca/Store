<div class="footer flex sm: bg-gray-700 p-5 flex-col justify-evenly">
    <div class="flex up-footer justify-evenly items-stretch mb-5">
        <div class="left-footer flex flex-col justify-evenly">
            <div class="Image mb-5"><img src="{{ asset('img/mainLogo.png') }}" alt="Logo" class="mainLogo h-16 self-center"></div>
            <div class="External flex justify-around">
                <a class="about self-center" href="https://www.instagram.com/{{ env('INSTAGRAM', 'store_instagram')}}" target="blank"><i class="fa-brands fa-instagram fa-xl" style="color: rgb(0, 0, 0);"></i></a>
                <a class="about self-center" href="https://www.tiktok.com/{{"@"}}{{env('TIKTOK', 'store_tiktok')}}" target="blank"><i class="fa-brands fa-tiktok fa-lg" style="color: rgb(0, 0, 0);"></i></a>
            </div>
        </div>
            <div class="w-0.5 bg-neutral-100 radius dark:bg-white/10 collapse sm:visible"></div>
        <div class="right-footer grid grid-cols-2 gap-4">
            <a class="about self-center text-blue-600 visited:text-purple-600 underline" href="{{ route('goToAbout') }}">About</a>
            <a class="about self-center text-blue-600 visited:text-purple-600 underline" href="{{ route('goToAbout') }}">Rules</a>
        </div>
    </div>
    <p class="phrase self-center">
        @php
            $phrases = [
                "Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh",
                "It is not the man who has too little, but the man who craves more, that is poor. - Seneca",
                "Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant",
                "It is quality rather than quantity that matters. - Lucius Annaeus Seneca"
            ];
            echo $phrases[array_rand($phrases)];
        @endphp
    </p>
</div>