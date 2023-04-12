<template>
    <div class="flex items-center justify-between mb-3">
        <h1 class="text-3xl font-semibold">Produse</h1>
        <button
            @click="showProductModal"
            type="button"
            class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline:none focus:ring-offset-2 focus:ring-indigo-500"
        >
            Adauga produs
        </button>
    </div>

    <ProductModal v-model="showModal" :product="productModel" />

    <ProductsTable @clickEdit="editProduct" />

</template>

<script>

import ProductsTable from "./ProductsTable.vue";
import ProductModal from "./ProductModal.vue";
import store from "../../store/index.js";
export default {
    name: 'Products',
    components: {ProductModal, ProductsTable},

    data(){
        return{
            showModal: false,
            productModel: {
                id: '',
                title: '',
                image: '',
                price: ''
            }
        }
    },

    methods:{
        showProductModal(){
            this.showModal = true
        },

        editProduct(product){
            store.dispatch('getProduct', product.id)
                .then(({data}) =>{
                   this.productModel.value = data
                   this.showProductModal()
                })
        }
    }

};
</script>

<style scoped></style>
