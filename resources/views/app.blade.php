<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>住宅CGパース制作</title>
   <link rel="icon" type="image/x-icon" href="assets/icon_bg/favicon.jpg">

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
   <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">
   <style>
   </style>
</head>
<body>
   <div id="app">
      <transition-group name="fade" tag="div">
         <router-view key="router-view"></router-view>
         <go-top-button key="go-to-button"></go-top-button>
         <!-- <sidebar v-if="$route.meta.noSidebar ? false : true" key="sidebar"></sidebar> -->
      </transition-group>

      <!-- <h1>@{{ $auth() ? 'Auth' : 'NOT' }}</h1> -->
   </div>

   <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
