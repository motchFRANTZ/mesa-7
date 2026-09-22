<x-layout>
    <form action="/restaurant" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-md border p-6 mx-auto shadow-sm">
            <legend class="fieldset-legend font-display text-lg text-primary px-2">Dados do restaurante</legend>

            <label class="label">Nome do restaurante</label>
            <input name="restaurant_name" type="text" class="input w-full" placeholder="Meu restaurante incrível" />

            <label class="label">Slug</label>
            <input name="slug" type="text" class="input w-full" placeholder="meu-restaurante-incrivel" />

            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex flex-col w-full">
                    <label class="label">Telefone</label>
                    <input name="phone" type="text" class="input w-full" placeholder="Ex.: (11) 9 9999-9999" />
                </div>

                <div class="flex flex-col w-full">
                    <label class="label">Whatsapp</label>
                    <input name="whatsapp" type="text" class="input w-full" placeholder="Ex.: (11) 9 9999-9999" />
                </div>
            </div>

            <label class="label">URL do logo</label>
            <input name="logo_url" type="text" class="input w-full" placeholder="https://..." />

            <label class="label">Descrição</label>
            <textarea name="description" class="textarea w-full" placeholder="Descrição"></textarea>

            <button class="btn btn-primary mt-4">Criar restaurante</button>

        </fieldset>
    </form>
</x-layout>
