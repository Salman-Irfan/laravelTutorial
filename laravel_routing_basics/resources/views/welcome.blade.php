<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Routing</title>
</head>
<body>
    <h1>Laravel Web Routing</h1>
    {{-- laravel blade template --}}
    {{5+5+5}}
    <br>
    {{-- hello world --}}
    {{"hello world"}}
    <br>
    {{-- html --}}
    <br>
    {{"Write Html & JS inside laravel blade template"}}
    {{"<h1>Hello World</h1>"}}
    {!!"<h1>Hello World</h1>"!!}
    {{-- java script --}}
    {{-- {!! "<script>alert(`Hello JS in Laravel Blade Template`)</script>" !!} --}}

    {{-- variables --}}
    {{"variables in laravel"}}
    <br>
    @php
        $user = "salman irfan";
    @endphp
    {{$user}}

    {{-- array - for loop  --}}
    <br>
    <ul>
        @php
            $names = ["salman", "irfan"];
        @endphp
        @foreach ($names as $name)
            <li> {{$name}} </li>
        @endforeach
    </ul>
    {{-- @foreach loop variables --}}
    <br>
    {{-- 
        property                Description
        $loop->index            the index of the current loop iteration {starts at 0}
        $loop->iteration        the current loop iteration {starts at 1}
        $loop->remaining        the iterations remaining in the loop
        $loop->count            the number of items in the array being iterated
        $loop->first            Whether this is the first iteration through the loop
        $loop->last             whether this is the last iteration through the loop
        $loop->even             Whether this is an even iteration through the loop
        $loop->odd              whether this is an odd iteration through the loop
        $loop->depth            the nesting level of the loop
        $loop->parent           When in a nested loop, the parent's loop variable.
    --}}
    <br>
    <table>
    <thead>
        <tr>
            <th>loop->index</th>
            <th>loop->iteration</th>
            <th>loop->count</th>
            <th>loop->first</th>
        </tr>
    </thead>
    <tbody>
        @php
            $collections = ["lorem", "ipsum", "dolor", "sit", "amet"];
        @endphp
        @foreach ($collections as $collection)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$loop->iteration}}</td>
                <td>{{$loop->count}}</td>
                {{-- first --}}
                @if ($loop->first)
                    <td style="color: green; background-color: black" >{{$loop->count}}</td>
                @elseif($loop->last)
                    <td style="color: red; background-color: orange" >{{$loop->count}}</td>
                @else
                    <td style="color: grey" >{{$loop->count}}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>