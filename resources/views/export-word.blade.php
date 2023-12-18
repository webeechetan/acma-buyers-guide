<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 100%; margin: 0 auto;">
        <h1>Hello</h1>
        <div style="display: flex; flex-wrap: wrap;">
            @foreach ($companies as $company)
            <div style="flex: 1; padding: 10px; border: 1px solid #000;">
                <h4>{{ $company->name }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
