<x-layout>
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-6 mx-auto shadow-sm">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Criar conta</legend>

            <label class="label">Nome</label>
            <input name="name" type="text" class="input" placeholder="Seu nome"/>

            <label class="label">E-mail</label>
            <input name="email" type="email" class="input" placeholder="seuemail@exemplo.com"/>

            <label class="label">Senha</label>
            <input name="password" type="password" class="input" placeholder="Senha"/>

            <button class="btn btn-primary mt-4">Cadastrar</button>

            <hr class="my-3 border-base-300">

            <span class="mx-auto text-sm">Já tem conta? <a href="login" class="text-primary font-medium hover:underline">Entrar aqui</a></span>
        </fieldset>
    </form>
</x-layout>
