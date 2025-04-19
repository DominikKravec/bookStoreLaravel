<x-layout>

    <form action="{{route('auth.login')}}" method="post">
        @csrf
        <!-- validation errors -->
        @if($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class=" my-2 text-red-500">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif

        <label>Email</label>
        <input type="text" name="email" placeholder="enter your email">

        <label>Password</label>
        <input type="password" name="password" placeholder="enter your password">

        <input type="submit" class="btn red">

        <a href="{{route('auth.register')}}" class="text-red-400">Create an account</a>
    </form>


</x-layout>