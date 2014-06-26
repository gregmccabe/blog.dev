@extends ('layouts.master')

@section ('content')

    <h1>Roll Dice!</h1>

        Your guess is {{{ $guess }}}<br>

        Your roll was {{{ $random_number }}}<br>

    @if ($guess == $random_number)
        <p style="color:green;">your guess was right!</p>

    @else
        <p style="color:red;">Sorry guess again!</p>
    @endif

@stop



