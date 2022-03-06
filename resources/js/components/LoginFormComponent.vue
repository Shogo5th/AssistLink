<template>

    <div class="md-form mb-5">
        <i class="fas fa-envelope prefix grey-text"></i>
        <label data-error="wrong" data-success="right" for="defaultForm-email">Your username</label>
        <BaseInput
            v-model="user.name"
            label="username"
            type="text"
        />

        
    </div>

    <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        <BaseInput
            v-model="user.password"
            label="password"
        />
    </div>



</template>

<script>
    import BaseInput from './BaseComponents/BaseInput'
    export default {
        data() {
            return {
                user: {
                    name: '',
                    password: ''

                }
            }
        },
        components: {
            'BaseInput': BaseInput
        }
    }

</script>