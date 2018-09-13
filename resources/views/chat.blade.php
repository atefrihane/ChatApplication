<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
    <style>
.list-group{
overflow-y: scroll;
height: 200px;
}
    </style>
</head>
<body>
    <div class="container">
<div class="row" id="app">
    <div class="offset-4 col-7">
        <br><br>
            <li class="list-group-item active">Chat Room <span class="badge badge-pill badge-warning">@{{numberUsers}}</span></li>


            <Message v-for="value,index in chat.message" :key="value.index" :user=chat.user[index] :color=chat.color[index] :time=chat.time[index]> @{{value}} </Message>
            <div class="badge badge-pill badge-primary">@{{typing}}</div>
                  </ul>
                  <input type="text" class="form-control" placeholder="Type something...!" v-model='message' @keyup.enter='send'>
                  <br>
				  <a href='' class="btn btn-warning btn-sm" @click.prevent='deleteSession()'>Delete Chats</a>
    </div>

</div>
    </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
