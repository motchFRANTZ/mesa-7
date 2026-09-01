<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Name</label>
            <input name="name" type="text" class="input" placeholder="Your name"/>

            <label class="label">Email</label>
            <input name="email" type="email" class="input" placeholder="Email"/>

            <label class="label">Password</label>
            <input name="password" type="password" class="input" placeholder="Password"/>

            <button class="btn btn-neutral mt-4">Register</button>

            <hr class="mt-3">

            <span class="mx-auto">Have a account? <a href="login" class="text-cyan-400">Login here</a></span>
        </fieldset>
    </form>
</x-layout>
