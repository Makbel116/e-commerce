<x-layout>
    @php
        $Latest_items = \App\Models\Item::latest()->get();
        //change the toggle to pagination
        $special_items = \App\Models\Item::where('discount','!=',0)->latest()->get();

    @endphp
    @include('partials._hero')
    <x-cards :items="$Latest_items" listType="popular-products" listId="popular" />
    @include('partials._categories')
    @include('partials._benefits')
    @include('partials._ads')
    <x-cards :items="$special_items" listType="special-offers" listId="special"  />
</x-layout>
