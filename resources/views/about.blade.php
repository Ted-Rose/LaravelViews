@if(5 > 10)
    <p> 10 is lower than 5</p>
    @elseif(5 == 10)
    <p> 5 = 10</p> 
    @elseif(5+7 < 10)
    <p> 5 is lower than 10</p> 
@else
<h2>All conditions are wrong</h2>
@endif

@unless (empty($name)) <!-- if name empty 
unless works like if (!empty)-->
<h2>Name isn't empty</h2>
@endunless

@empty($secondname)
    <h2>Second name is empty</h2>
@endempty

@isset($name) <!-- checks if variable is set-->
    <h2>Name is set!</h2>
@endisset

<!--
    Comparing multiple possible conditions
    Multiple values that may require the same code
-->

@switch($name)
    @case("Tedis")
        <h2>Name is Tedis!</h2>
        @break
    @case("John")
    <h2>Name is John!</h2>
        @break
    @case("Michael")
    <h2>Name is Michael!</h2>
        @break
    @default
    <h2>No match found</h2>
@endswitch

<!-- 
    For loop
    Foreach loop
    For else loop
    While loop
-->

@for($i = 0; $i < 10; $i++)
    <h2>The number is {{ $i }}</h2>
@endfor

@Foreach ($names as $name)
    <h2>Name is {{ $name }}</h2>
@endforeach

@forelse($names as $name)
    <h2>Name in forelse is {{ $name }}</h2>
@empty
    <h2>There are no names if array is empty!</h2>
@endforelse

{{ $i = 0 }} <!-- Not the correct way of defining
variable in view. Just for quick test purposes! -->
@while($i < 10)
    <h2>{{ $i ++}}</h2>
@endwhile