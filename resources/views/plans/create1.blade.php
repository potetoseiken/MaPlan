<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('プラン作成') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="p-4 text-gray-900 font-medium">旅の概要を教えてください。</h3>
                <form method="post" action="{{ route('store1') }}">
                    @csrf
                    <section>
                        <p>都道府県（必須・複数選択可）</p>
                        <select name="prefecture_ids[]" multiple>
                            @foreach ($prefectures as $prefecture)
                                <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                            @endforeach
                        </select>
                    </section>
                    <section>
                        <p>旅のタイトル（必須）</p>
                        <input type="text" name="plan[title]" placeholder="タイトル"/>
                    </section>
                    <section>
                        <p>旅行日程（必須）</p>
                        <input type="date" name="plan[start_at]"/>
                        〜
                        <input type="date" name="plan[finish_at]"/>
                    </section>
                    <section>
                        <p>予算（任意）</p>
                        <input type="number" name="plan[budget]" placeholder="予算"/>円
                    </section>
                    <x-primary-button1>
                        次へ
                    </x-primary-button1>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
