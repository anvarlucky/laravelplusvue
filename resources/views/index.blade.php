<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Vue</title>
</head>
<body>
<div id="app">
    <v-header></v-header>
    <main style="margin-top: 20px;">
        <div class="uk-container">
            <example-component></example-component>
            <RouterView></RouterView>
            <router-view></router-view>
        </div>
    </main>
</div>
    <script src="./js/app.js"></script>
</body>
</html>