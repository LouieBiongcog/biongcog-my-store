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
        <Link href="/products" class="hover:text-sky-800 hover:underline duration-100">Go to Products</Link>
    </div>

</template>
