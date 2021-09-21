<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-6  border border-gray-200 bg-gray-100 p-4 rounded-md">
            <h1 class="text-center font-bold text-xl text-gray-600">Register !</h1>
            <form method="post" action="/register" class="mt-5">
                @csrf
                <div class="mb-2">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           value="{{old('username')}}"
                           placeholder="Username"
                           required
                    >


                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           placeholder="Password"
                           required
                    >


                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5"
                           for="name"
                    >
                        Full Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           placeholder="name"
                           value="{{old('name')}}"
                           required
                    >


                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5"
                           for="email"
                    >
                        Email
                    </label>


                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           placeholder="email"
                           value="{{old('email')}}"
                           required
                    >


                    <div class="mb-6">
                        <button type="submit"
                                class="bg-blue-400 text-white mt-6 rounded py-2 px-4 hover:bg-blue-500"
                        >
                            Submit
                        </button>
                    </div>
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="text-xs text-red-500">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </form>
        </main>

    </section>

</x-layout>
