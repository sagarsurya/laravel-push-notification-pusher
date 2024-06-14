<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <title>Pusher Test</title>
    <h1>Hello, you will see the notification here</h1>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher('9525aaefbcbbb54305b3', {
            cluster: 'ap2',
            encrypted: true
        });
        var channel = pusher.subscribe('my-channel');
        // channel.bind('form-submitted', function(data){
        //     console.log(data);
        //     alert(JSON.stringify(data));
        // });
        channel.bind('form-submitted', function(data) {
            if (data && data.post && data.post.author && data.post.title) {
                toastr.success('New Post Created', 'Author: ' + data.post.author + '<br>Title: ' + data.post.title, {
                    timeout: 0,
                    extendedTimeOut: 0,
                });
            } else {
                console.error('Invalid data structure received:', data);
            }
        });
    </script>
    
</body>
</html>