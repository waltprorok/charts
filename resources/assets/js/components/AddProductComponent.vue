<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>
                    <div class="panel-body">
                        <form @submit.prevent="createProduct">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input v-model="product.name" type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input v-model="product.year" type="number" id="year" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input v-model="product.price" type="number" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default">Create Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                product: {}
            }
        },

        mounted() {
            // console.log('Component mounted.')
        },

        methods: {
            createProduct() {
                let uri = 'http://127.0.0.1:8000/products';
                axios.post(uri, this.product).then((response) => {
                    window.location.reload();
                });
            }
        }
    }
</script>
