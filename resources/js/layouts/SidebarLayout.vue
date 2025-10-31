<script setup>
import { RouterLink } from 'vue-router'
</script>

<template>
  <div class="min-h-screen flex bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-60 bg-white border-r">
      <div class="p-4 text-xl font-bold">BarberSoft</div>
      <nav class="px-2 space-y-1">
        <RouterLink class="block px-3 py-2 rounded hover:bg-gray-100" to="/">Dashboard</RouterLink>
        <RouterLink class="block px-3 py-2 rounded hover:bg-gray-100" to="/citas">Citas</RouterLink>
        <RouterLink class="block px-3 py-2 rounded hover:bg-gray-100" to="/clientes">Clientes</RouterLink>
        <RouterLink class="block px-3 py-2 rounded hover:bg-gray-100" to="/barberos">Barberos</RouterLink>
        <RouterLink class="block px-3 py-2 rounded hover:bg-gray-100" to="/servicios">Servicios</RouterLink>
        <RouterLink class="block px-3 py-2 rounded hover:bg-gray-100" to="/pagos">Pagos</RouterLink>
        <RouterLink class="block px-3 py-2 rounded hover:bg-gray-100" to="/reportes">Reportes</RouterLink>

      </nav>
    </aside>

    <!-- Contenido -->
    <main class="flex-1 p-6">
      <slot />
    </main>
  </div>
</template>
