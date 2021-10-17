<template>
    <div class="mt-3 mx-auto flex items-center max-w-2xl bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="m-2 w-1/3 bg-cover bg-landscape">
            <img :src="imageSrc" :alt="name" class="max-h-48 mx-auto">
        </div>
        <div class="w-2/3 p-4">
            <h1 class="text-gray-900 font-bold text-2xl border-b-2 border-gray-100 mb-2">
                {{ name }}
            </h1>
            <span class="mt-2 text-gray-600 text-sm">
                在庫数：
            </span>
            <input class="border" type="number" name="" id="" :value="stock">
            <div class="flex justify-around mt-2">
                <IconButton>
                    <template v-slot:changes>
                        <span>▲</span>
                    </template>
                </IconButton>
                <IconButton>
                    <template v-slot:changes>
                        <span>▼</span>
                    </template>
                </IconButton>
            </div>
            <div class="mt-3">
                <h1 class="text-gray-700 text-sm">
                    最終更新日：{{ updateTime }}
                </h1>
            </div>
        </div>
    </div>
</template>

<script>
import IconButton from './buttons/IconButton.vue'

export default {
    components: {
        IconButton
    },
    props: {
        name: {
            type: String,
            required: true
        },
        imageSrc: {
            type: String,
            required: true
        },
        stock: {
            type: Number,
            required: true
        },
        updateTime: {
            type: String,
            required: true
        }
    }
}
</script>