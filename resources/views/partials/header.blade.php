<header>
    <div class="my_bg text-white">
        <div class="container-xl">
            <ul class="text-uppercase d-flex justify-content-end m-0 gap-5">
                <li>dc power visa</li>
                <li>additional dc site</li>
            </ul>
        </div>
    </div>
    <nav class="container-xl my_nav">
        <div class="my_width2 d-flex">
            <div>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
            </div>

            <div class="d-flex text-center">
                @foreach($links as $linkItem)
                    <ul class="my_list2">
                        <li>{{ $linkItem }}</li>
                    </ul>
                @endforeach
            </div>
        </div>      
    </nav>
    <div class="my_content_bg"></div>
</header>