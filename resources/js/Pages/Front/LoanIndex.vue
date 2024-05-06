<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="داشبورد" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">وام / قسط</h2>
        </template>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form class="container text-right">
                <div class="row ">


                    <div class="col-3"></div>
                    <div class="col-6  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <label for="customRange2" class="form-label">مبلغ درخواستی ( تومان )</label>
                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                </div>
                    <div class="col-3"></div>


                    <div class="col-3"></div>
                    <div class="col-6  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <label class="form-label mb-3" for="inlineRadio1">مدت بازپرداخت :</label>
                    <br>
                    <div class="form-check form-check-inline">

                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">12 ماه</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">9 ماه</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                        <label class="form-check-label" for="inlineRadio3">6 ماه</label>
                    </div>

                </div>
                    <div class="col-3"></div>


                    <div class="col-3"></div>
                    <div class="col-6  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <p class="text-right mb-3">قسط ماهیانه: 1,882,000تومان</p>
                        <p class="text-right">مجموع بازپرداخت اقساط: 22,584,000تومان</p>
                    </div>
                    <div class="col-3"></div>


                    <div class="col-3"></div>
                        <button type="submit" class="col-6 btn btn-outline-success shadow-lg p-3 mb-5  rounded">درخواست وام</button>
                    <div class="col-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>
    </AuthenticatedLayout>
</template>
