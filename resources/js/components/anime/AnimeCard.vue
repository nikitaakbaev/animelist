<script setup lang="ts">
import { Card, CardContent } from '@/components/ui/card';

interface Anime {
    id: number;
    title: string;
    cover: string | null;
    rating: number | null;
    description: string | null;
    review: string | null;
}

const props = defineProps<{ anime: Anime }>();
</script>

<template>
    <Card class="overflow-hidden">
        <img :src="props.anime.cover" :alt="props.anime.title" class="h-48 w-full object-cover" />
        <CardContent class="p-4">
            <h3 class="mb-1 text-lg font-semibold">{{ props.anime.title }}</h3>
            <p class="mb-1 text-sm text-gray-500">Rating: {{ props.anime.rating }}</p>
            <p class="mb-1 text-sm">{{ props.anime.description }}</p>
            <p class="text-sm text-gray-700">{{ props.anime.review }}</p>
        </CardContent>
    </Card>
</template>
