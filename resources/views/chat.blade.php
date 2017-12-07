<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>chat room</title>
     <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="app">
      <h3>Chat Room</h3>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <chat-log :messages="messages"></chat-log>
      <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
    <script src="js/app.js"></script>
  </body>
</html>
