@props(['posts'])
@if($posts->count()<1)
    <p class="text-center "> There is no posts for you sorry </p>
@endif
@if($posts->count()==1)
    <x-firs-post :post="$posts[0]"/>
@endif





        @if($posts->count()>1)
            <x-firs-post :post="$posts[0]"/>
            <div class="lg:grid lg:grid-cols-6">
        @foreach($posts->skip(1) as $post)
            <x-post-card
                :post="$post"
                class="{{$loop->iteration <3 ?'col-span-3 ':'col-span-2'}}"
            />
        @endforeach

            @endif
    </div>



