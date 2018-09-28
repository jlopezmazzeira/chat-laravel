<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style media="screen">
      .list-group{
        overflow-y: scroll;
        height: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row" id="app">
        <div class="offset-4 col-4 offset-sm-1 col-sm-10">
          <li class="list-group-item active">Chat Room
            <span class="badge badge-pill badge-danger">@{{ numberOfUSers }}</span>
          </li>
          <div class="badge badge-pill badge-primary">@{{ typing }}</div>
          <ul class="list-group" v-chat-scroll>
            <message-component v-for="value, index in chat.message"
                               :key="value.index"
                               :color= chat.color[index]
                               :user = chat.user[index]
                               :time = chat.time[index]>
              @{{ value }}
            </message-component>
          </ul>
          <input type="text" class="form-control"
          placeholder="Type your message here..."
          v-model='message'
          @keyup.enter="send">
          <br>
          <a href=""class="btn btn-warning btn-sm" @click.prevent='deleteSession'>Delete chats</a>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
