<x-layout>
    <form action="/login" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 mx-auto shadow-sm">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Entrar</legend>

            <label class="label">E-mail</label>
            <input name="email" type="email" class="input" placeholder="seuemail@exemplo.com" />
            <x-forms.error name="email" />

            <label class="label">Senha</label>
            <input name="password" type="password" class="input" placeholder="Senha" />
            <x-forms.error name="password" />

            <button class="btn btn-primary mt-4">Entrar</button>

            <hr class="my-3 border-base-300">

            <span class="mx-auto text-sm">Não tem conta? <a href="register" class="text-primary font-medium hover:underline">Criar agora</a></span>
        </fieldset>
    </form>
</x-layout>
