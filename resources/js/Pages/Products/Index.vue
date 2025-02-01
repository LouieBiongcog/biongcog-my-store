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
  <div class="flex flex-col md:flex-row min-h-screen bg-gray-100">

    <nav class="w-full md:w-1/4 bg-white shadow-lg p-6">
      <h2 class="text-center text-2xl font-bold text-gray-800 mb-4">
        <Link
          href="/products"
          class="text-green-600 hover:text-green-800 hover:underline duration-200"
        >
          Categories
        </Link>
      </h2>
      <ul class="space-y-2">
        <li
          v-for="category in categories"
          :key="category.id"
          class="p-3 rounded-lg text-gray-700 font-medium cursor-pointer transition-all duration-300 hover:bg-green-500 hover:text-white"
        >
          <Link :href="'/products/' + category.id" class="block w-full">
            {{ category.name }}
          </Link>
        </li>
      </ul>
    </nav>

    <div class="w-full md:w-3/4 p-6">
      <h1 class="text-center text-3xl font-bold text-gray-900 mb-6">
        {{ selectedCategory ? selectedCategory.name : "All Products" }}
      </h1>

 
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div
          v-for="product in products"
          :key="product.id"
          class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300"
        >
          <div class="p-4">
            <h5 class="text-xl font-semibold text-gray-800">{{ product.name }}</h5>
            <p class="text-sm text-gray-600 mt-2">{{ product.description }}</p>
            <div class="flex justify-between mt-4">
              <p class="text-sm text-gray-500">
                <span class="font-semibold text-green-600">P{{ product.whole_sale_price }}</span>
                <br />
                <span class="text-xs">Wholesale Price</span>
              </p>
              <p class="text-sm text-gray-500">
                <span class="font-semibold text-red-600">P{{ product.retail_price }}</span>
                <br />
                <span class="text-xs">Retail Price</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
