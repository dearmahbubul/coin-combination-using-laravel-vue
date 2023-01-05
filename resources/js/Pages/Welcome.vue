<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import InputError from "@/Components/InputError.vue";

const form = useForm({
    price: '',
});

defineProps({
    combinations: Array,
    originalAmount: Number
});

let coinCombinations = '';

const submit = () => {
    form.post(route('coin-generator.make'), {
        onFinish: () => form.reset(),
    });
};
</script>
<template>
    <Head title="Welcome" />

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1">
                        <div class="bg-white shadow sm:rounded-lg">
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Distribute your coin combination</h3>
                                <div class="mt-2 max-w-xl text-sm text-gray-500">
                                    <p>Change the coin contribution.</p>
                                </div>
                                <form class="mt-5 sm:flex sm:items-center" @submit.prevent="submit">
                                    <div class="w-full sm:max-w-xs">
                                        <div class="relative mt-1 rounded-md shadow-sm">
                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <span class="text-gray-500 sm:text-sm">$</span>
                                            </div>
                                            <input type="text"
                                                   v-model="form.price"
                                                   name="price"
                                                   id="price"
                                                   autofocus
                                                   required
                                                   class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                   placeholder="0.00"
                                                   aria-describedby="price-currency"
                                            />
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
                                            </div>
                                        </div>
                                        <InputError class="mt-2" :message="form.errors.price" />
                                    </div>
                                    <button :disabled="form.processing" type="submit" class="mt-3 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Generate</button>
                                </form>

                                <div class="mt-6 flow-root" v-if="combinations">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Best combination of ${{originalAmount}}</h3>
                                    <ul role="list" class="-my-5 divide-y divide-gray-200">
                                        <li v-for="coin in combinations" :key="coin.name" class="py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="min-w-0 flex-1">
                                                    <p class="truncate text-sm font-medium text-gray-900">{{ coin.name + " ($" + coin.amount + ")" }}</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="inline-flex items-center rounded-full border border-gray-300 bg-white px-2.5 py-0.5 text-sm font-medium leading-5 text-gray-700 shadow-sm hover:bg-gray-50">
                                                        {{ coin.total }}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>
