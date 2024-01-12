<x-guest-layout>
<body class="bg-gradient-to-r from-green-400 to-blue-500">
    <div class=>
        <div class="container flex flex-col flex-wrap items-center px-10 pt-10 mx-auto md:pt-18 md:flex-row bg-red-0">
            <!--左側-->
            <div class="flex flex-col justify-center w-full overflow-y-hidden xl:w-2/5 lg:items-start ">
                <h1 class="my-4 text-xs text-2xl font-bold leading-tight text-center text-green-500 md:text-4xl md:text-left slide-in-bottom-h1">生成AI画像ちゃんねる</h1>
                <p class="mb-8 text-base leading-normal text-center md:text-2xl md:text-left slide-in-bottom-subtitle">
                    自分で作った渾身の生成AI画像をみんなに見てもらおう♪コメントや他の人の投稿を見て勉強しよう。
                </p>

                <p class="pb-8 font-bold text-center text-blue-400 lg:pb-6 md:text-left fade-in">
                    仲間募集中。お気軽にマジで。
                </p>
                <div class="flex justify-center w-full pb-24 md:justify-start lg:pb-0 fade-in ">
                    {{-- ボタン設定 --}}
                    <a href="{{route('contact,create')}}">
                    <button class="inline-flex items-center px-4 py-2 mx-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-600 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">お問い合わせ</button>
                    </a>

                    <a href="{{route('register')}}">
                        <x-primary-button>ご登録はこちら</x-primary-button>
                    </a>
                </div>
            </div>
            {{-- 右側 --}}
            <div class="w-full py-6 overflow-y-hidden xl:w-3/5">
                <img class="w-5/6 mx-auto rounded-lg shadow-xl lg:mr-0 slide-in-bottom" src="{{asset('logo/topimg.png')}}">
            </div>
        </div>
        <div class="container flex flex-col flex-wrap items-center px-6 pt-10 mx-auto md:pt-18 md:flex-row">
            <div class="w-full p-4 mb-8 text-sm leading-8 text-center text-red-800 border-2 md:text-left fade-in">
                <P> 自分で作った生成AI画像をみんなに見てもらい、感想を言ってもらいましょう。</p>
                    <P> コメントはポジティブオンリーなので、ネガティブ発言はBANします。</p>
            </div>
            <!--フッタ-->
            <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
                <p class="text-center text-gray-500">@2024.1.3　えんちょーLaravel初作品</p>
            </div>
        </div>
    </div>
</body>

</x-guest-layout>
