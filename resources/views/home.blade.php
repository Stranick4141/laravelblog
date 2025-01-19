<!DOCTYPE html>
<html lang = "en">
<head>
  <title>My Web Page</title>
</head>
<body>
    @auth
        <p> congrats you are logged in </p>
        <form action="/logout" method="POST">
            @csrf
            <button>logout</button>
            
            <div style="border: 3px solid black;">
                <h2>Create a new post</h2>
                <form action="/create-post" method="POST">
                    @csrf
                    <input type="text" name="title" placeholder="post title">
                    <textarea name="body" placeholder="body content..."></textarea>
                    <button>Save Post</button>
            </div>

            <div style="border: 3px solid black;">
                <h2>All Posts</h2>
                @foreach($posts as $post)
                <div style="background-color: gray; padding: 10px; margin: 10px "
                <h3>{{$post['title']}}</h3>
                {{$post['body']}}

    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
        @csrf 
        <input name="name" placeholder="name">
        <input name="email" placeholder="email">
        <input name="password" placeholder="password">
        <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
        @csrf 
        <input name="loginname" placeholder="name">
        <input name="loginpassword" placeholder="password">
        <button>Login</button>
        </form>
    </div>
    @endauth
 
</body>

    
</div>
</html>