<x-layout>
    <h1>Hello from about page view, I am {{$data}}</h1>
    <p>Age : {{$umur}}</p>
    @if ($umur > 18)
        <h3>You have rights to voting presiden</h3>
    @else
        <h3>You dont have rights to vote</h3>
    @endif
    <x-slot:footer>
        <strong>About Page</strong>
    </x-slot:footer>
</x-layout>

