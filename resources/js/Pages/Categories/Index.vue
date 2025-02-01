<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    categories:{
        type:Array,
        required:true,
    }
}
)
</script>

<template>

    <div class="min-h-screen w-full flex flex-col items-center gap-3 py-5">
         <h1>Wecome to My Store</h1>
         <Link href="/products"class="text-white bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg shadow-md transition-all duration-200">Go to Products</Link>

    </div>

</template>
