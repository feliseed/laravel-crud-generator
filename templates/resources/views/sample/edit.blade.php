<script src="https://cdn.tailwindcss.com"></script>

{{-- パンくず --}}
{{--
    インストール: composer install diglactic/laravel-breadcrumbs
    使い方: https://poppotennis.com/posts/laravel-breadcrumbs
    --}}
{{-- {{ Breadcrumbs::render('samplesChainCase.edit', $sample) }} --}}

{{-- ページヘッダー --}}
<div class="sm:flex sm:items-center">
    {{-- タイトル --}}
    <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Sample 編集</h1>
    </div>

    <div>
        <form id="delete-form" action="{{ route('samplesChainCase.destroy', $sample->id) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
        <button type="button"
            class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:w-auto"
            onclick="if(confirm('削除しますか？')) {document.getElementById('delete-form').submit();}"
        >
            削除
        </button>
    </div>
</div>

<div class="mt-3">
    <form class="space-y-6" action="{{ route('samplesChainCase.update', $sample->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
            %%COLUMNS%%
        </div>

        <div class="flex justify-end">
            <button type="button" class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" onclick="location.href='{{ route('samplesChainCase.index') }}'">キャンセル</button>
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">保存</button>
        </div>
    </form>
</div>

