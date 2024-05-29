<template>
    <div>
        <h1>Home Page</h1>
        <div>{{ count }}</div>
        <Link href="/about"> Go ot about page</Link>
        <div>
            <div v-for="item in items" :key="item.id">
                <div>{{ item.name }}</div>
                <div>{{ item.price }}</div>
                <div>{{ item.desc }}</div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
const count = ref(0);

import { Link } from "@inertiajs/vue3";
defineProps(["items"]);
</script>
