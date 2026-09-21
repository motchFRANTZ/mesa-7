<x-layout>
    <form action="/login" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 mx-auto shadow-sm">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Login</legend>

            <label class="label">Email</label>
            <input name="email" type="email" class="input" placeholder="Email" />
            <x-forms.error name="email" />
            

            <label class="label">Password</label>
            <input name="password" type="password" class="input" placeholder="Password" />
            <x-forms.error name="password" />

            <button class="btn btn-primary mt-4">Login</button>

            <hr class="my-3 border-base-300">

            <span class="mx-auto text-sm">Don't have account? <a href="register" class="text-primary font-medium hover:underline">Create here</a></span>
        </fieldset>
    </form>
</x-layout>
