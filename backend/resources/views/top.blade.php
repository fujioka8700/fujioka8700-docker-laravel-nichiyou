<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="著者情報">
    <meta name="description" content="検索結果の説明文">
    <meta name="keywords" content="カンマ区切りで、キーワード">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <style>
        [v-cloak] {
            display: none;
        }
    </style>
</head>
<body>
    <div id="app" v-cloak>
        <tailwindcss-breakpoint></tailwindcss-breakpoint>
        <header>
            <page-header></page-header>
        </header>
        <main>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-6">
                    <div class="col-span-4">
                        <article>
                            <article-list></article-list>
                        </article>
                    </div>
                    <div class="hidden md:block md:col-span-2">
                        <aside>
                            <aside-list></aside-list>
                        </aside>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <page-footer></page-footer>
        </footer>
    </div>

</body>
</html>