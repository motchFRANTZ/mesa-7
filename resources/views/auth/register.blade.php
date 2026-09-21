<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 mx-auto shadow-sm">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Register</legend>

            <label class="label">Name</label>
            <input name="name" type="text" class="input" placeholder="Your name"/>

            <label class="label">Email</label>
            <input name="email" type="email" class="input" placeholder="Email"/>

            <label class="label">Password</label>
            <input name="password" type="password" class="input" placeholder="Password"/>

            <button class="btn btn-primary mt-4">Register</button>

            <hr class="my-3 border-base-300">

            <span class="mx-auto text-sm">Have a account? <a href="login" class="text-primary font-medium hover:underline">Login here</a></span>
        </fieldset>
    </form>
</x-layout>
