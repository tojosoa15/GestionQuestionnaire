<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{form.nom_form}}</div>

                    <div class="card-body">
                        <div v-for="(page) in form.form_pages">
                            <!-- Hide all questions, show only the one with index === to current question index -->
                            <div >
                                <h2>{{ page.name_form_page }}</h2>
                                <ol>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        props: ['form'],
        methods: {

        }
    }
</script>
