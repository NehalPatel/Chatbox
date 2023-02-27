<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Package::Chatbox</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body{margin-top:20px}.chat-online{color:#34ce57}.chat-offline{color:#e4606d}.chat-messages{display:flex;flex-direction:column;max-height:800px;overflow-y:scroll}.chat-message-left,.chat-message-right{display:flex;flex-shrink:0}.chat-message-left{margin-right:auto}.chat-message-right{flex-direction:row-reverse;margin-left:auto}.py-3{padding-top:1rem!important;padding-bottom:1rem!important}.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.flex-grow-0{flex-grow:0!important}.border-top{border-top:1px solid #dee2e6!important}
    </style>
</head>
<body>
    {{ $slot }}
</body>
</html>