<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulário de Contato') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route("contact.send") }}" method="post">
                    @csrf
                    <div class="block mt-4">
                        <x-form-input name="subject" label="Escreva o motivo de sua mensagem" />
                    </div>
                    <div class="block mt-4">
                        <x-form-textarea name="message" label="Escreva sua mensagem aqui" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-form-submit>Enviar mensagem</x-form-submit>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
