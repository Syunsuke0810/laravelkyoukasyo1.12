<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            投稿の個別表示
        </h2>

        <x-message :message="session('message')" />

    </x-slot>

    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="mx-4 sm:p-8">
            <div class="px-10 mt-4">

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
                    </div>
                    <div class="flex justify-end mt-4">
                        @can('update', $post)
                        <a href="{{route('post.edit', $post)}}"><x-primary-button class="float-right bg-teal-700">編集</x-primary-button></a>
                        @endcan

                        @can('delete', $post)
                        <form method="post" action="{{route('post.destroy', $post)}}">
                        @csrf
                        @method('delete')
                            <x-primary-button class="float-right ml-4 bg-red-700" onClick="return confirm('まじで削除しますか？');">削除</x-primary-button>
                        </form>
                        @endcan
                    </div>



                        <p class="py-4 mt-4 text-gray-600 whitespace-pre-line">{{$post->body}}</p>

                        @if($post->image)
                        <div>
                            (画像ファイル：{{$post->image}})
                        </div>
                        <img src="{{ asset('storage/image/'.$post->image)}}" class="mx-auto" style="height:300px;">
                        @endif

                        <div class="flex flex-row-reverse text-sm font-semibold">
                            <p>{{$user->name}}・{{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>

                    {{-- コメント表示 --}}
                    @foreach ($post->comments as $comment)
                    <div class="w-full px-10 py-8 mt-8 whitespace-pre-line bg-white shadow-lg rounded-2xl">
                    {{$comment->body}}
                    <div class="flex flex-row-reverse text-sm font-semibold">
                        {{-- クラスを変更 --}}
                        <p class="float-left pt-4"> {{ $comment->user->name }} • {{$comment->created_at->diffForHumans()}}</p>
                        {{-- アバター追加 --}}
                        <span class="w-12 h-12 rounded-full">
                        <img src="{{asset('storage/avatar/'.($comment->user->avatar??'user_default.jpg'))}}" class="rounded-full">
                        </span>
                    </div>
                    </div>
                    @endforeach
                    {{-- 追加部分 --}}

                    <div class="mt-4 mb-12">
                    <form method="post" action="{{route('comment.store')}}">
                        @csrf
                        <input type="hidden" name='post_id' value="{{$post->id}}">
                        <textarea name="body" class="w-full px-4 py-4 mt-4 transition duration-500 bg-white shadow-lg rounded-2xl hover:shadow-2xl" id="body" cols="30" rows="3" placeholder="コメントを入力してください">{{old('body')}}</textarea>
                        <x-primary-button class="float-right mb-12 mr-4">コメントする</x-primary-button>
                    </form>
                </div>
                {{-- 追加部分終わり --}}
            </div>

            </div>
        </div>
    </div>
</x-app-layout>
