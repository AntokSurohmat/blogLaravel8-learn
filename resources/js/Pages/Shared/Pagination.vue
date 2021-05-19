
<template>
    <div class="flex flex-wrap -mb-1" v-if="showPagination">
        <span v-for="(link, key) in links" :key="key">
            <inertia-link class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded hover:bg-brand-light text-brand-dark no-underline" v-bind:class="borderRightClass(link)" :href="link.url" v-if="link.url && link.active == false">{{ link.label }}</inertia-link>
            <span class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500 bg-gray-200 no-underline" v-bind:class="borderRightClass(link)" v-else>{{ link.label }}</span>
        </span>
    </div>
</template>
<script>
    export default {
        props: {
            links: Array,
        },
        computed: {
            showPagination() {
                return this.links.length > 3
            }
        },
        methods: {
            borderRightClass(link) {
                return (link.label == 'Next') ? 'border-r' : ''
            }
        }
    }
</script>