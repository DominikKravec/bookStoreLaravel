<x-layout>

    <form action="{{route('auth.register')}}" method="post">
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

        <label>Username</label>
        <input type="text" name="name" placeholder="Enter your username">

        <label>email</label>
        <input type="text" name="email" placeholder="example@gmail.com">

        <label>Password</label>
        <input type="password" name="password" placeholder="password">

        <label>Confirm password</label>
        <input type="password" name="password_confirmation" placeholder="confirm password">

        <input type="submit" value="Register" class="btn red">
    </form>

</x-layout>