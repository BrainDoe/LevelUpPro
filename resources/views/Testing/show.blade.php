<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    @foreach ($refs->children as $ref)
    {{-- <a href="{{ route('show', $ref->ref_id) }}">{{ $ref['name'] }}</a> --}}

        @foreach ($ref->children as $child)
        <a href="{{ route('show', $child->ref_id) }}">{{ $child['name'] }}</a>
          
        @endforeach
    @endforeach
</body>
</html>