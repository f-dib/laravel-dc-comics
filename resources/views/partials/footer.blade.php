<footer>
    <div class="my_height2 my_position">
        <div class="container-xl">
            <div class="d-flex my_space2 text-white">
                <div>
                    @foreach($footerlink1 as $linkItems1)
                    <div class="my_space3">
                        <div class="my_style2">{{ $linkItems1['title'] }}</div>
                        @foreach($linkItems1['list'] as $link)
                        <ul class="list-unstyled m-0">
                            <li>{{ $link }}</li>
                        </ul>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <div class="d-flex gap-3">
                    @foreach($footerlink2 as $linkItems2)
                    <div class="my_space3">
                        <div class="my_style2">{{ $linkItems2['title2'] }}</div>
                        @foreach($linkItems2['list'] as $link)
                        <ul class="list-unstyled m-0">
                            <li>{{ $link }}</li>
                        </ul>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <img class="my_logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
    </div>
    <div class="container-xl d-flex my_height3">
            <div>
                <button class="btn_style">sign-up now!</button>
            </div>
            <div class="d-flex my_follow">
                <div class="my_footer_text">
                    follow us
                </div>
                @foreach($social as $socialItem)
                <div class="d-flex my_social">
                    <img class="my_img" src="{{ Vite::asset($socialItem) }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
</footer>