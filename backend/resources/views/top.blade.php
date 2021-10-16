<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="著者情報">
    <meta name="description" content="検索結果の説明文">
    <meta name="keywords" content="カンマ区切りで、キーワード">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>日用品管理アプリ</title>
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
    </div>

</body>
</html>