<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  categories: {
    type: Array,
    required: true,
  },
  products: {
    type: Array,
    required: true,
  },
  selectedCategory: {
    type: String,
    required: true,
  },
});
</script>

<template>
  <div class="flex flex-col md:flex-row">
   
    <nav class="min-h-screen w-full md:w-[20%] bg-white shadow-lg p-4">
      <h2 class="text-center text-2xl font-semibold my-3">
        <Link href="/products" class="text-green-600 hover:text-green-800">
          Categories
        </Link>
      </h2>
      <ul>
        <li
          v-for="category in categories"
          :key="category.id"
          class="p-3 cursor-pointer hover:bg-green-500 hover:text-white transition-all duration-200 rounded-md"
        >
          <Link :href="'/products/' + category.id" class="block w-full">
            {{ category.name }}
          </Link>
        </li>
      </ul>
    </nav>

  
    <div class="w-full md:w-3/4 p-5">
      <h1 class="text-center text-2xl font-semibold my-3">
        {{ selectedCategory ? selectedCategory.name : "All Products" }}
      </h1>

  
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div
          v-for="product in products"
          :key="product.id"
          class="shadow-lg p-4 rounded-lg bg-white hover:shadow-xl transition-all duration-200"
        >
          <h5 class="text-lg font-semibold text-gray-800">
            {{ product.name }}
          </h5>
          <p class="text-sm text-gray-600">{{ product.description }}</p>
          <div class="flex justify-between mt-2">
            <p class="text-xs text-gray-500">
              Wholesale Price: <span class="text-green-600">P{{ product.whole_sale_price }}</span>
            </p>
            <p class="text-xs text-gray-500">
              Retail Price: <span class="text-red-600">P{{ product.retail_price }}</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
