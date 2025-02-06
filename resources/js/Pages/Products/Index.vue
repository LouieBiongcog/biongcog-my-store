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
    <!-- Sidebar for Categories -->
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

    <!-- Product Listing in Table Format -->
    <div class="w-full md:w-3/4 p-6">
      <h1 class="text-center text-3xl font-bold text-gray-900 mb-6">
        {{ selectedCategory ? selectedCategory.name : "All Products" }}
      </h1>

      <table class="min-w-full table-auto bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700">
          <tr>
            <th class="p-4 text-left font-semibold">Product Name</th>
            <th class="p-4 text-left font-semibold">Category id</th>
            <th class="p-4 text-left font-semibold">Description</th>
            <th class="p-4 text-left font-semibold">Wholesale Price</th>
            <th class="p-4 text-left font-semibold">Retail Price</th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="product in products"
            :key="product.id"
            class="border-t hover:bg-gray-50 transition-all duration-200"
          >
            <td class="p-4">{{ product.name }}</td>
            <td class="p-4">{{ product.categories_id }}</td>
            <td class="p-4">{{ product.description }}</td>
            <td class="p-4 text-gray-600 font-semibold">P{{ product.whole_sale_price }}</td>
            <td class="p-4 text-gray-600 font-semibold">P{{ product.retail_price }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
