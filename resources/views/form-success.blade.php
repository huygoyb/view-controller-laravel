<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Event Name{{$eventName}}</p>
<p>Band Names{{$bandNames}}</p>
<p>Start Date{{$startDate}}</p>
<p>End Date{{$endDate}}</p>
<p>Portfolio{{$portfolio}}</p>
<p>Ticket Price{{$eticketPrice}}</p>
@switch($status)
    @case(1)
    <p>Number 1</p>
    @break
    @case(2)
    <p>Number 2</p>
    @break
    @case(3)
    <p>Number 3</p>
    @break
    @default
    <p>Default</p>
    break
@endswitch
<p>Status{{$status}}</p>

</body>
</html>
