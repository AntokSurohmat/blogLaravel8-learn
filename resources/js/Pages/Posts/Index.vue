<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200 pb-20">
                        <div class="mt-8 mb-8 text-2xl">
                            List Of Posts
                        </div>

                        <div class="mt-8 mb-8">
                            <inertia-link :href="`/posts/create`" class="float-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Post</inertia-link>
                        </div>
                        <table class="shadow-lg bg-white w-full">
                            <tr>
                                <th class="bg-gray-700 border text-left px-8 py-4">Title</th>
                                <th class="bg-gray-700 border text-left px-8 py-4">Author</th>
                                <th class="bg-gray-700 border text-left px-8 py-4">Published At</th>
                            </tr>
                            <tr v-for="post in posts.data" :key="post.id">
                                <td class="border px-8 py-4"> {{ post.title }} </td>
                                <td class="border px-8 py-4"> {{ post.user.name }} </td>
                                <td class="border px-8 py-4"> {{ post.published_at }} </td>
                            </tr>
                        </table>
                        <!-- <div>
                            <paginator :paginator="posts" class="mt-3" />
                        </div> -->
                        <div class="mt-5">
                            <pagination :links="posts.links"></pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
    // import Paginator from "@/Components/Paginator";
    import AppLayout from '@/Layouts/AppLayout'
    import Pagination from '../Shared/Pagination'

    export default {
        metaInfo: { title: 'Post' },
        props: {
            posts : Object
        },
        components: {
            AppLayout,
            Pagination,
            
        },
    }
</script>