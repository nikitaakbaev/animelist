<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import AnimeCard from '@/components/anime/AnimeCard.vue';

interface Anime {
    id: number;
    title: string;
    cover: string | null;
    rating: number | null;
    description: string | null;
    review: string | null;
}

const props = defineProps<{ animes: Anime[] }>();
</script>

<template>
    <Head title="My Anime List" />
    <AppLayout>
        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <AnimeCard v-for="anime in props.animes" :key="anime.id" :anime="anime" />
        </div>
    </AppLayout>
</template>
