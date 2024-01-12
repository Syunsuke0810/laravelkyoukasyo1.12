<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            みんなの画像投稿の一覧
        </h2>

        <x-message :message="session('message')" />

    </x-slot>

    {{-- 投稿一覧表示用のコード --}}
    <div class="px-4 mx-auto mt-4 max-w-7xl sm:px-6 lg:px-8">
        @if($user)
            {{$user->name}} さん、こんにちは！
        @else
            ゲストさん、こんにちは！
        @endif

        @foreach ($posts as $post)
            <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    {{-- 修正部分 --}}
                    <div class="w-full px-10 pt-2 pb-8 transition duration-500 bg-white shadow-lg rounded-2xl hover:shadow-2xl">
                        <div class="mt-4">
                            <div class="flex">
                                <div class="w-12 h-12 rounded-full">
                                    {{-- アバター表示 --}}
                                    <img src="{{asset('storage/avatar/'.($post->user->avatar??'user_default.jpg'))}}" class="rounded-full" >
                                </div>
                                <h1 class="float-left pt-4 text-lg font-semibold text-gray-700 cursor-pointer hover:underline">
                                    <a href="{{route('post.show', $post)}}">{{ $post->title }}</a>
                                </h1>
                            </div>
                            {{-- 修正部分ここまで --}}
                            <hr class="w-full">
                            <p class="py-4 mt-4 text-gray-600">{{Str::limit($post->body,100,'･･･')}}</p>
                            <div class="flex flex-row-reverse text-sm font-semibold">

                                {{-- 何故かnameが表示されない！！ --}}
                                {{-- <p> {{ $post->user->name }} </p>• --}}

                                {{-- <p> {{ $post->user ? $post->user->name : '未知のユーザー' }} • --}}
                                    {{-- Pタグ外したら表示された --}}
                                <p>{{$post->user->name}}・{{$post->created_at->diffForHumans()}}</p>
                            </div>
                                 {{-- 追加部分 --}}
                                <hr class="w-full mb-2">
                                @if ($post->comments->count())
                                <span class="badge">
                                    返信 {{$post->comments->count()}}件
                                </span>
                                @else
                                    <span>コメントはまだありません。</span>
                                @endif
                                <a href="{{route('post.show', $post)}}" style="color:white;">
                                    <x-primary-button class="float-right">コメントする</x-primary-button>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
