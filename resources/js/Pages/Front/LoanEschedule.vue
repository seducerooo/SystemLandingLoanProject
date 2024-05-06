<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="داشبورد" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">برنامه ریزی وام درخواستی</h2>
        </template>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form class="container text-right">
                <div class="row ">




                    <div class="col-2"></div>
                    <div class="col-8  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="row text-center">
                            <p class="col-4 text-right mb-3"></p>
                            <p class="col-6 text-right mb-3">میلغ درخواستی : X تومان</p>
                            <p class="col-2 text-right mb-3"></p>
                        </div>

                    </div>
                    <div class="col-2"></div>



                    <div class="col-2"></div>
                    <div class="col-8  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="row">
                            <p class="col-6 text-right mb-3">قسط ماهیانه: 1,882,000تومان</p>
                            <p class=" col-6 text-right">بازپرداخت نهایی: 22,584,000تومان</p>
                        </div>

                    </div>
                    <div class="col-2"></div>






                    <div class="col-2"></div>
                    <div class="col-8  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="row">
                            <p class="col-6 text-right mb-3">نوع ضمانت: سفته</p>
                            <p class=" col-6 text-right">تعداد اقساط : X ماه</p>
                        </div>

                    </div>
                    <div class="col-2"></div>

                    <div class="col-3"></div>
                        <button type="submit" class="col-6 btn btn-outline-success shadow-lg p-3 mb-5  rounded">تایید</button>
                    <div class="col-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>
    </AuthenticatedLayout>
</template>
