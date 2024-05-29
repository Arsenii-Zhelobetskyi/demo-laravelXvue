<template>
    <div>
        <h1>Add Items</h1>
        <form @submit.prevent="addItem">
            <input type="text" v-model="name" placeholder="Name" />
            <input type="text" v-model="price" placeholder="Price" />
            <input type="text" v-model="desc" placeholder="Description" />
            <button type="submit">Add Item</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

const name = ref("");
const price = ref("");
const desc = ref("");

const addItem = async () => {
    try {
        const response = await axios.post("/api/addItemApi", {
            id: 9999,
            name: name.value,
            price: Number(price.value),
            desc: desc.value,
        });

        console.log("Item added:", response.data);
        // Optionally reset the form fields
        name.value = "";
        price.value = "";
        desc.value = "";
    } catch (error) {
        console.error("Error adding item:", error);
    }
};
</script>
