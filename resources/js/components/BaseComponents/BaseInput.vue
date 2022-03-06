<template>
    <label>{{ label }}</label>
    <input 
        v-bind="$attrs"
        v-bind:placeholder="label"
        class="field"
        v-bind:value="modelValue"
        v-on:input="$emit('update:modelValue', $event.target.value)"
    />
</template>
dismiss

export default {
    props: {
        label: {
            type: String,
             default:''
        },
        modelValue: {
            type: [String, Number],
            default: ''
        }
    }
}