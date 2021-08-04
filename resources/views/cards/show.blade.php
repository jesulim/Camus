<x-app-layout>
    <div class="container bg-white shadow overflow-hidden sm:rounded-lg px-20 py-20 pt-10">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-bold">
                FICHA DE INVENTARIO DE BIENES MUEBLES
            </h3>
        </div>
        <div class="border-t border-gray-300">
                
            <figure>
                <img class="w-120 h-120" src="{{ Storage::url($card->image) }}"
                    alt="">
            </figure>

            <dl>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-gray-700">
                        NOMBRE DEL MUSEO
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:c">
                        {{ $card->name_museo }}
                    </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-gray-700">
                        DEPARTAMENTO
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:c">
                        {{ $card->departamento }}
                    </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-gray-700">
                        PROVINCIA
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:c">
                        {{ $card->provincia }}
                    </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-gray-700">
                        LOCALIDAD
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:c">
                        {{ $card->localidad }}
                    </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-gray-700">
                        DIRECCION
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                        {{ $card->direccion }}
                    </dd>
                </div>
                <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-bold text-gray-700">
                        UBICACION EN EL INMUEBLE
                    </dt>
                    <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                        {{ $card->ubicacion }}
                    </dd>
                </div>
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-normal leading-6 font-bold">
                        IDENTIFICACION
                    </h3>
                </div>
                <div class="border-t border-gray-300">
                    <div class="px-4 py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-bold text-gray-700">
                            DESIGNACION / NOMBRE
                        </dt>
                        <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                            {{ $card->name }}
                        </dd>
                        <dt class="text-sm font-bold text-gray-700">
                            EPOCA
                        </dt>
                        <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                            {{ $card->epoca }}
                        </dd>
                    </div>
                    <div class="px-4 py-5 lg:grid lg:grid-cols-6 lg:ap-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-bold text-gray-700">
                            AUTOR
                        </dt>
                        <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                            {{ $card->autor }}
                        </dd>
                        <dt class="text-sm font-bold text-gray-700">
                            ATRIBUCION
                        </dt>
                        <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                            {{ $card->atribucion }}
                        </dd>
                    </div>
                    <div class="px-4 py-5 lg:grid lg:grid-cols-6 lg:ap-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-bold text-gray-700">
                            TECNICA Y MATERIAL
                        </dt>
                        <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                            {{ $card->tecnica }}
                        </dd>
                        <dt class="text-sm font-bold text-gray-700">
                            N° DE INVENTARIO
                        </dt>
                        <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                            {{ $card->n_inventario }}
                        </dd>
                    </div>
                    <div class="px-4 py-5 lg:grid lg:grid-cols-6 lg:ap-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-bold text-gray-700">
                            PROCEDENCIA
                        </dt>
                        <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                            {{ $card->procedencia }}
                        </dd>
                        <dt class="text-sm font-bold text-gray-700">
                            ESTADO DE CONSERVACION
                        </dt>
                        <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                            {{ $card->estado }}
                        </dd>
                    </div>
                    <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-bold text-gray-700">
                            MARCAS / INSCRIPCIONES
                        </dt>
                        <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                            {{ $card->marcas }}
                        </dd>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-normal leading-6 font-bold">
                            DIMENSIONES
                        </h3>
                    </div>
                    <div class="border-t border-gray-300">
                        <div class="px-4 py-5 lg:grid lg:grid-cols-9 lg:ap-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-bold text-gray-700">
                                ALTO
                            </dt>
                            <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                                {{ $card->alto }} cm.
                            </dd>
                            <dt class="text-sm font-bold text-gray-700">
                                LARGO
                            </dt>
                            <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                                {{ $card->largo }} cm.
                            </dd>
                            <dt class="text-sm font-bold text-gray-700">
                                ANCHO
                            </dt>
                            <dd class="mt-1 text-sm col-span-2 sm:mt-0 sm:col-span-2">
                                {{ $card->ancho }} cm.
                            </dd>
                        </div>
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-bold text-gray-700">
                                BREVE DESCRIPCION
                            </dt>
                            <dd class="mt-1 text-sm sm:mt-0 sm:col-span-2">
                                {{ $card->descripcion }}
                            </dd>
                        </div>

            </dl>
        </div>
    </div>

    <footer class="container" style="margin-top: 40px; margin-bottom: 40px">
        <p class="float-right"><a href="#">Volver Arriba</a></p>
        <p>&copy; 2021 Camus</p>
    </footer>
</x-app-layout>
