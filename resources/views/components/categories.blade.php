<div  x-data="{show:false}">
    <button
        @click="show =!show"
        class="py-2 pl-3 pr-9 text-sm font-semibold"
    >
        {{isset($current_category)? $current_category->name : 'Category'}}
    </button>
    <div x-show="show" class="py-2 absolute w-full bg-gray-100 mt-2 rounded-xl">
        @foreach($categories as $category)
            <a href="/?category={{$category->slug}}"
               :active="request()->routeIs('home')"
               class="block text-left px-3 text-sm
                   leading-6 hover:bg-gray-300
                   {{isset($current_category) && $current_category->id ===$category->id ?'bg-blue-200 text-white':''}}"
            >{{$category->name}}</a>
        @endforeach
    </div>
</div>
